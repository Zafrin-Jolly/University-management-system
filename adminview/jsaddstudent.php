<?php
    require_once 'addstudent.php'
?>
<html>
<link rel="stylesheet" type="text/css" href="../css/mycss9.css">
	<head><h1 align="center">Add new student</h1></head> 
    <h2 align="center">Fill the required information correctly</h2>
    <html>
<body>
<fieldset>
			<legend><h1>Student form</h1></legend>
			<form action="addstudent.php" method="post" onsubmit="return validateForm()">
				<table>
                <tr>
						<td><span>Student ID </span></td>
						<td>:<input type="text" placeholder="studentId" value="<?php echo $studentId;?>" name="studentId" id="studentId">
                        <span id="err_studentid"><?php echo $err_sname;?></span></td>
					</tr>
					<tr>
						<td><span>User name</span></td>
						<td>:<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname" id="uname">
						<span id="err_uname"><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<!--<td ><span>Password </span></td>-->
                        <td><span>Password</span></td>
						<td>:<input type="password" placeholder="Password" value="<?php echo $password;?>" name="password" id="password">
						<span id="err_password"><?php echo $err_password;?></span></td>
					</tr>
                    <tr>
						<td><span>Student name </span></td>
						<td>:<input type="text" placeholder="Student name" value="<?php echo $sname;?>" name="sname" id="sname">
						<span id="err_sname"><?php echo $err_sname;?></span></td>
					</tr>
                    <tr>
						<td><span>Father name</span></td>
						<td>:<input type="text" placeholder="Father name" value="<?php echo $fname;?>" name="fname" id="fname">
						<span id="err_fname"><?php echo $err_sname;?></span></td>
					</tr>
                    <tr>
						<td><span>Mother name</span></td>
						<td>:<input type="text" placeholder="Mother name" value="<?php echo $mname;?>" name="mname" id="mname">
						<span id="err_mname"><?php echo $err_sname;?></span></td>
					</tr>
                
                    <tr>
                    <td>Date of Birth</td>  
                    <td><input type="date" id="birthday" name="dob" ></td>    
                    </tr> 
                    <tr>
                    <tr>
                    <tr>
						<td><span>Gender </span></td>
                        <td>:<input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Male">Male
                         <input type="radio" name="gender" value="Other">Other
						<span><?php echo $err_gender;?></span></td>
					</tr>
					</tr>
                    <tr>
						<td><span>Contact no </span></td>
						<td>:<input type="text" placeholder="Contact no" value="<?php echo $contactno;?>" name="contactno" id="contactno">
						<span id="err_contactno"><?php echo $err_contactno;?></span></td>
					</tr>
					
					<tr>
						<td><span>Address </span></td>
						<td>:<input type="text" placeholder="Address" value="<?php echo $address;?>" name="address" id="address">
                        <span id="err_address"><?php echo $err_sname;?></span></td>
					</tr>
                    <tr>
						<td><span>CGPA: </span></td>
						<td>:<input type="text" placeholder="CGPA" value="<?php echo $cgpa;?>" name="cgpa" id="cgpa">
						<span id="err_cgpa"><?php echo $err_cgpa;?></span></td>
					</tr>
                    <tr>
						<td><span>Batch: </span></td>
						<td>:<input type="text" placeholder="Batch" value="<?php echo $batch;?>" name="batch" id="batch">
						<span id="err_batch"><?php echo $err_batch;?></span></td>
					</tr>
                    <tr>
						<td><span>department </span></td>
						<td>:<input type="text" placeholder="dept" value="<?php echo $dept_name;?>" name="dept_name">
					
					</tr>
                    <tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
					</tr>
					
				</table>
				 
				
			</form>
	</body>

        <script>

function validateForm() {
  var uname = document.getElementById("uname").value;
  var password = document.getElementById("password").value;
  var studentId= document.getElementById("studentId").value;
  var fname = document.getElementById("fname").value;
  var mname= document.getElementById("mname").value;
  var contactno = document.getElementById("contactno").value;
  var address = document.getElementById("address").value;
  var cgpa = document.getElementById("cgpa").value;
  var batch = document.getElementById("batch").value;

  if (studentId == "") {
    document.getElementById("mytext").innerHTML="Id should be written";
    return false;
  }
  if (uname == "") {
    document.getElementById("mytext").innerHTML="Please enter username";
    return false;
  }
  if ( password.length < 5) {
    document.getElementById("mytext").innerHTML="Please enter password above 5 digit";
    return false;
  }
  if (sname == "") {
    document.getElementById("mytext").innerHTML="insert Students name";
    return false;
  }
  if (fname== "") {
    document.getElementById("mytext").innerHTML="Enter fathers name";
    return false;
  }
  if (mname== "") {
    document.getElementById("mytext").innerHTML="Enter mothers name";
    return false;
  }
  if (contactno == "") {
    document.getElementById("mytext").innerHTML="Enter your contact number";
    return false;
  }

   if(contactno.length <11)
   {
    document.getElementById("mytext").innerHTML="Contact number should have 11 numbers";
    return false;
    }
    if(contactno.length >11)
   {
    document.getElementById("mytext").innerHTML="Contact number should have 11 numbers";
    return false;
    }
   if(isNaN(contactno))
   {
    document.getElementById("mytext").innerHTML="Contact number should be only numeric";
    return false;
   }

  if (address == "") {
    document.getElementById("mytext").innerHTML="Enter your address";
    return false;
  }
  if (cgpa=="") {
    document.getElementById("mytext").innerHTML="Please enter float number";
    return false;
  }
  if (batch == ""||isNaN(batch)) {
    document.getElementById("mytext").innerHTML="Should Enter a numeric value";
    return false;
  }

}       
    </script>
    <p id="mytext"></p>
    </fieldset>
</html>