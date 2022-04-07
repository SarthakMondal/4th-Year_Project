#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

int Led_OnBoard = 2;                  // Initialize the Led_OnBoard 

const char* ssid = "221B_BakerStreet";                  // Your wifi Name       
const char* password = "i_am_sherlocked";          // Your wifi Password
const char *host = "192.168.0.168"; //X.X.X.X = ip of your local host ..... type ipcofig on cmd and copy the IPV4 address.

HTTPClient http;    //Declare object of class HTTPClient
WiFiClient wifiClient;

void setup() {
  // put your setup code here, to run once:
  delay(1000);
  pinMode(Led_OnBoard, OUTPUT);       // Initialize the Led_OnBoard pin as an output
  Serial.begin(115200);
  WiFi.mode(WIFI_OFF);        //Prevents reconnection issue (taking too long to connect)
  delay(1000);
  WiFi.mode(WIFI_STA);        //This line hides the viewing of ESP as wifi hotspot
  
  WiFi.begin(ssid, password);     //Connect to your WiFi router
  Serial.println("");

  Serial.print("Connecting");
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    digitalWrite(Led_OnBoard, LOW);
    delay(250);
    Serial.print(".");
    digitalWrite(Led_OnBoard, HIGH);
    delay(250);
  }

  digitalWrite(Led_OnBoard, HIGH);
  //If connection successful show IP address in serial monitor
  Serial.println("");
  Serial.println("Connected to Network/SSID");
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP
}

void loop() 
{
  String uId = "3";
  String otp = "463598";
  String uIdOtpGiven = uId + " " + otp;
  if(checkUserAndOtp(uIdOtpGiven) == true)
  {
    Serial.println("Provided User Id and OTP is OK"); //Show in 16*2 Display
    String sensorVal = sensorValue(uId);
    uploadValue(sensorVal);
  }
  
  else
  {
    Serial.println("Please check Your User Id and OTP"); //Show in 16*2 Display
  }

  delay(4000);  //Here there is 4 seconds delay plus 1 second delay below, so Post Data at every 5 seconds
  
}

String sensorValue(String uId)
{
  String ret;
  int s1=analogRead(A0);
  int s2=analogRead(A0);
  int s3=analogRead(A0);
  int s4=analogRead(A0);
  int s5=analogRead(A0);
  int s6=analogRead(A0);
  //Read Sensor value
  
  ret = uId+" "+String(s1)+" "+String(s2)+" "+String(s3)+" "+String(s4)+" "+String(s5)+" "+String(s6);   //String to interger conversion
  return ret;
}


void uploadValue(String data)
{
  String postData = "sensor_value=" + data;
  http.begin(wifiClient, "http://192.168.0.168/upldndmcu.php");  //Specify request destination, X.X.X.X = ip of your local host ..... type ipcofig on cmd and copy the IPV4 address.
  http.addHeader("Content-Type", "application/x-www-form-urlencoded"); //Specify content-type header
 
  int httpCode = http.POST(postData);   //Send the request
  String payload = http.getString();    //Get the response payload

  Serial.println(httpCode);   //Print HTTP return code
  http.end();  //Close connection
}


boolean checkUserAndOtp(String uIdAndOtp)
{
 
  http.begin(wifiClient, "http://192.168.0.168/chkuidotp.php");  //Specify request destination, X.X.X.X = ip of your local host ..... type ipcofig on cmd and copy the IPV4 address.
  http.addHeader("Content-Type", "application/x-www-form-urlencoded"); //Specify content-type header
 
  String matchOTP = "input_value=" + uIdAndOtp;
  int httpCode = http.POST(matchOTP);   //Send the request
  String payload = http.getString();    //Get the response payload

  Serial.println(payload);    //Print request response payload
  http.end();
  if(payload == "TRUE")
  {
    return true;
  }

  else
  {
    return false;
  }

}
