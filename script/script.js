function roleCheck()
{
    var a = document.getElementById("rlelg").value;
    if(a=="user")
    {
        window.location.href = "signupur.php";
    }

    else
    {
        window.alert("Driver don't need to sign up...please select role as user to sign up");
    }
}

function validateSignupForm()
{
    console.log("checkSignup function called");
    var a,b,d,e,g,h,i,j,k;
    a = document.getElementById("uname").value;
    b = document.getElementById("emlsgn").value;
    d = document.getElementById("mblno").value;
    e = document.getElementById("pwssgn").value;
    i = document.getElementById("city").value;
    j = document.getElementById("adres").value;
    k = document.getElementById("role").value;
   
    g = e.length;
    h = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (a != "" && b != "" && d != "" && e != "" && i != "" && j != "" && k != "")
    {

        if (b != "")
        {
           if (b.match(h))
           {
               
           }

           else
           {
                document.getElementById("ermgs").innerHTML = "Enter a valid Email ID";
                document.getElementById("emlsgn").style.border = "solid 2px red";
                return false;
           }
        }



        if (g<6)
        {
            document.getElementById("ermgs").innerHTML = "Password Must be 6 digits";
            document.getElementById("pwssgn").style.border = "solid 2px red";
            return false;
        }

        if(d.length != 10)
        {
            document.getElementById("ermgs").innerHTML = "Mobile Number Must be 10 digits";
            document.getElementById("mblno").style.border = "solid 2px red";
            return false;
        }

        return true;


    }

    else
    {
        document.getElementById("ermgs").innerHTML = "All Fields are Mandatory";
        return false;
    }

}

function validateLoginForm()
{
    var a, b;
    a = document.getElementById("emllgn").value;
    b = document.getElementById("pwslgn").value;

   
    if(a == "" && b == "")

    {
        document.getElementById("emllgn").style.border = "solid 2px red";
        document.getElementById("pwslgn").style.border = "solid 2px red";
        document.getElementById("ermgs").innerHTML = "Please enter email and password to Login";
        return false;
    }

    else if(a == "")
    {
        document.getElementById("emllgn").style.border = "solid 2px red";
        document.getElementById("ermgs").innerHTML = "Please enter Email to Login";
        return false;
    }

    else if(b == "")
    {
        document.getElementById("pwslgn").style.border = "solid 2px red";
        document.getElementById("ermgs").innerHTML = "Please enter Password to Login";
        return false;
    }

    else
    {
       
        return true;
    }

}

function downLoadPdf()
{
    //console.log("pdf.js called");
    const file = document.getElementById("containerhealthparam");
    var qunat = {
        margin: 0,
        filename: 'Patient_Data.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
    html2pdf().from(file).set(qunat).save();
}
