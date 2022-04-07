setInterval(function()
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("containerhealthparam").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "ftchlthur.php", true);
    xhttp.send();
  }, 4000);


/*api.showChat().then((res) => 
        {
           this.setState({chatList: res.data});
        });
*/