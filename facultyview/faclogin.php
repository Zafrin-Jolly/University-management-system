<?php
include('../facultycontrol/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<head><script >
function checkUsername(control)
{
  var username=control.value;
  //ajax
  var xhttp=new XMNHttpRequest();
  xhttp.onereadystatechange=function()
  {
    if(this.readyStyle ==4 && this.status==200)
    { //when server responses
      var rsp==this.responseText;
      if(rsp=="true")
      {
        document.getElementByID("err_username").innerHTML="<br> Valid";

      }
      else{
        document.getElementByID("err_username").innerHTML="<br> Invalid";
      }

    }
  };
  xttp.open("GET","checkusername.php?username="+username,true);
  xttp.send();
}
</script></head>
<body>

<<link rel="stylesheet" type="text/css" href="../css/mycss1.css">
<body>
<div class="login">
   
<h2 align="center">AMERICAN INTERNATIONAL<br>
           UNIVERSITY-BANGLADESH</h2>
           <h5 align="center">---Where leaders are created</h5>
           <h6 align="center">Sign in to your AIUB account</h6>
          
           <form name="myForm" action="" onsubmit="return validateForm()" method="post" align="center">
    <input type="text" id="username" name="username" placeholder="Enter your username" > <br> <br>
    <input type="password" id="password" name="password" placeholder="Enter your password" > <br> <br>
    <input name="submit" type="submit" value="LOGIN">
</form>

<br>
<p id="mytext">
</p>
<?php echo $error; ?>

</body>
</html>

    