<?php
include('../studentcontrol/logincheck.php');

if(isset($_SESSION['username'])){
header("location:../studentview/pageone.php");
}
?>
<!DOCTYPE html>
<html>
<head><script >
function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "") {
    document.getElementById("mytext").innerHTML="Please enter username";
    return false;
  }
  if ( password.length < 5) {
    document.getElementById("mytext").innerHTML="Please enter password";
    return false;
  }
}</script></head>
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
</div>

<?php
   

    $validateuserName="";
    $validatepassword="";
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
           
            $userName = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            

            
            if(empty($userName) || !preg_match('/[a-zA-Z0-9._]{5,}$/', $userName)){
                $validateuserName="Please re-enter the username";
            }
            else{
                $validateuserName=$userName;
            }
            if((empty($password) || strlen($password)<5) || (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password))){
                $validatepassword = "you have to enter more than 6 characters";
            }
            else{
                $validatepassword = "Password setted";
            }
            
            
            
            
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->CheckUser($conobj,"students",$userName,$password);
            
            $connection->CloseCon($conobj);
            
    }

?>
<?php echo $error; ?>

</body>
</html>