function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var birthday = document.getElementById("birthday").value;
    var phonenumber = document.getElementById("phonenumber").value;
    var otp = document.getElementById("otp").value;
    var presentAddress = document.getElementById("presentAddress").value;
    var permanentAddress = document.getElementById("permanentAddress").value;

    var ssc = document.getElementById("ssc").value;
    var hsc = document.getElementById("hsc").value;
    var cgpa = document.getElementById("cgpa").value;
   
  
    if (name == "")
    {
      document.getElementById("mytext").innerHTML="*Please re-enter the name and your name should contain atleast 6 digits";
      return false;
    }
    if (name.length<6)
    {
      document.getElementById("mytext").innerHTML="*Please re-enter the name and your name should contain atleast 6 digits";
      return false;
    }


    if(email.indexOf('@')<=0){
        document.getElementById('mytext').innerHTML="You have to have @ in your email adrress ";
        return false;
    }     
    if ((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')) 
    {
        document.getElementById('mytext').innerHTML="You missed the dot symbol of your email adrress";
        return false;
    }
    if (document.getElementById("female").checked == false &&  document.getElementById("male").checked == false  &&  document.getElementById("other").checked == false )
    {
      document.getElementById("mytext").innerHTML="Please select any radio button";
      return false;
    }

    if (birthday == "")
    {
      document.getElementById("mytext").innerHTML="*Have to Enter your Birthday ";
      return false;
    }

    if (phonenumber.length!=11)
    {
      document.getElementById("mytext").innerHTML="*Your Phonenumber should contain atleast 11 digits";
      return false;
    }

    if (otp.length!=6)
    {
      document.getElementById("mytext").innerHTML="*Your otp should contain atleast 6 digits";
      return false;
    }

    if (presentAddress == "")
    {
      document.getElementById("mytext").innerHTML="*Have to fill present address box";
      return false;
    }

    if (permanentAddress == "") 
    {
      document.getElementById("mytext").innerHTML="*Have to fill Permanent Address box";
      return false;
    }

    if (ssc == "")
    {
      document.getElementById("mytext").innerHTML="*Please enter your ssc result";
      return false;
    }

    if (hsc == "")
    {
      document.getElementById("mytext").innerHTML="*Please enter your hsc result";
      return false;
    }

    if (cgpa == "")
    {
      document.getElementById("mytext").innerHTML="*Please enter your cgpa result";
      return false;
    }

    


    

  }