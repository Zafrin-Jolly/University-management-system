<?php
include('../admincontrol/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<head>
<script >

function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "") {
    document.getElementById("mytext").innerHTML="Please enter username";
	document.getElementById("mytext").style.color="red";
    return false;
  }
  if ( password.length < 5) {
    document.getElementById("mytext").innerHTML="Please enter password (minimum length 5)";
	document.getElementById("mytext").style.color="red";
    return false;
  }
}
</script>
</head>
<<link rel="stylesheet" type="text/css" href="../css/mycss1.css">
</head>
<body>
<div class="login">
   
<h2 align="center">AMERICAN INTERNATIONAL<br>
           UNIVERSITY-BANGLADESH</h2>
           <h5 align="center">---Where leaders are created</h5>
           <h6 align="center">Sign in to your AIUB account</h6>
          
          
    <form name="myForm" action="" onsubmit="return validateForm()" method="post" align="center">
    <input type="text" id="username" name="username" placeholder="Enter your username"> <br> <br>
    <input type="password" id="password" name="password" placeholder="Enter your password" > <br> <br>
    <input name="submit" type="submit" value="LOGIN">
</form>
</div>

<br>
<p id="mytext">
</p>
<?php echo $error; ?>

</body>
</html>
    