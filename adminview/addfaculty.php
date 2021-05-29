<html>
	<head><h1 align="center">Add new Faculty</h1></head> 
	<link rel="stylesheet" type="text/css" href="../css/mycss10.css">
    <h2 align="center">Fill the required information correctly</h2>
</html>

    <?php
$facultyId="";
$uname="";
$password="";
$fname="";
$dob="";
$gender="";
$contactno="";
$address="";
$err_uname="";
$err_fname="";
$err_password="";
$err_gender="";
$err_contactno="";
$err_f="";
$hasError=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $facultyId=$_POST["facultyId"];
    $uname=$_POST["uname"];
    $password=$_POST["password"];
    $fname=$_POST["fname"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $contactno=$_POST["contactno"];
    $address=$_POST["address"];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //if(isset($_POST["submit"])){
            //for id
            if (is_numeric($facultyId)) 
            {
                $facultyId=$_POST["facultyId"];
            }
             else 
            {
                $err_f="Id must be integer";
                $hasError=true;
            }
            //for user
            if(empty($_POST["uname"])){
                $err_uname="*Username Required";
                $hasError=true;
            }
            else if(strlen($_POST["uname"]) < 6){
                $err_uname="*Username should be at least 6 characters";
                $hasError=true;
            }
            else{
                $uname=htmlspecialchars($_POST["uname"]);
                include "../models/db_config.php";

                $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
                $query="insert into faculties values('$facultyId','$uname','$password','$fname','$dob','$gender','$contactno','$address')";
                if (mysqli_query($conn,$query))
                {
                echo "inserted!";
                header("location:faculty.php");
                }
                else
                {
                echo "can not insert user!";
                }

            }
            if (is_numeric($contactno)) 
            {
                if(strlen($_POST["contactno"]) < 11)
                {
                    $err_contactno="* should be at least 11 number";
                    $hasError=true;
                }
            }
             else 
            {
                $err_contactno="*Enter only numbers";
                $hasError=true;
            }

            
            if(empty($_POST["fname"]) || empty($_POST["address"])){
                $err_fname= "* Information Required";
                $hasError=true;
            }else
            {
                $fname=$_POST["fname"];
                $address=$_POST["address"];

            }
            //for password
            if(empty($_POST["password"])){
                $err_password = "*password Required";
                $hasError=true;
            }else{
                $password=$_POST["password"];
            }
            if(!$hasError){
                echo "Password recorded!";
            }
            //for gender
            if (empty($_POST["gender"])) 
            {
                $err_gender = " *You have to select one";
                $hasError=true;
              } else
               {
                $gender = $_POST["gender"];
              }
            }
        }
    
    

?> 
<html>
<body>
<fieldset>
			<legend><h1>Faculty form</h1></legend>
			<form action="" method="post">
				<table>
                <tr>
						<td><span>Faculty ID </span></td>
						<td>:<input type="text" placeholder="facultyId" value="<?php echo $facultyId;?>" name="facultyId">
                        <span><?php echo $err_f;?></span></td>
					</tr>
					<tr>
						<td><span>User name</span></td>
						<td>:<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname">
						<span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<!--<td ><span>Password </span></td>-->
                        <td><span>Password</span></td>
						<td>:<input type="password" placeholder="Password" value="<?php echo $password;?>" name="password">
						<span><?php echo $err_password;?></span></td>
					</tr>
                    <tr>
						<td><span>Faculty name</span></td>
						<td>:<input type="text" placeholder="Faculty name" value="<?php echo $fname;?>" name="fname">
						<span><?php echo $err_fname;?></span></td>
					</tr>
                    <tr>
                    <td>Date of Birth</td>  
                    <td><input type="date" id="birthday" name="dob"></td>    
                    </tr> 
                    <tr>
                    <tr>
						<td><span>Gender </span></td>
                        <td>:<input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                         <input type="radio" name="gender" value="other">Other
						<span><?php echo $err_gender;?></span></td>
					</tr>
                    <tr>
						<td><span>Contact no </span></td>
						<td>:<input type="text" placeholder="Contact no" value="<?php echo $contactno;?>" name="contactno">
						<span><?php echo $err_contactno;?></span></td>
					</tr>
					
					<tr>
						<td><span>Address </span></td>
						<td>:<textarea name="address"></textarea></td>
                        <span><?php echo $err_fname;?></span></td>
					</tr>
                  
						<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>
        <button><a href="faculty.php">Go back</a></button>
	</body>
</html>