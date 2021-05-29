<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="search.js"></script>
<title> Student information Page  </title>
<link rel="stylesheet" type="text/css" href="../css/mycss10.css">
</head> 
 <body>
    <h1 align="center"> Student information Page </h1>
    <table align='right'>
<tr > 
<div class="navbar">
<td><b><h2><a href="../admincontrol/logout.php">Logout</a></h2> </b></td> 
</tr>
</div>
</table></h1>
    <table align='center'>
<tr > 
<td><b> <h1 align="right">Admin  </h1>  <h1 align="right" > </td> 
</tr>
</table>
<div class="navbar">
    <br/>
    
    <button><a href="jsaddstudent.php" >Add Student</a>  </h5> </button> &nbsp;  &nbsp;
    <button><a href="updatestudent.php" >Update student</a>  </h5> </button> &nbsp;  &nbsp;
    <div align= "center">
        <input type="text" name="search" placeholder="Search by name" id="username" onkeyup="ajax()">
        <input type="button" name="" value="search" onclick="ajax()">
        </div> <br>
        <div id="result"></div>
   <br>
   <br>
   </div>
</body> 


</html>
<?php
include "../models/db_config.php";
$query="select * from students";
$result=get($query);
?>
<table align ="center" border="1" style="border-collapse:collapse"> 
<tr>
<th>Students name</th>
<th>Username</th>
<th>Student Id</th>
<th>Department</th>
<th>Cgpa</th>
<th>Batch</th>
<th>DOB</th>
<th>Gender</th>
<th>Contact_no</th>
<th>Address</th>
<th>Option</th>
</tr>

<?php
foreach($result as $row)
{
    echo "<tr>";
    echo"<td>".$row["student_name"]."</td>";
    echo"<td>".$row["username"]."</td>";
    echo"<td>".$row["student_ID"]."</td>";
    echo"<td>".$row["dept_name"]."</td>";
    echo"<td>".$row["cgpa"]."</td>";
    echo"<td>".$row["Batch"]."</td>";
    echo"<td>".$row["DOB"]."</td>";
    echo"<td>".$row["gender"]."</td>";
    echo"<td>".$row["contact_no"]."</td>";
    echo"<td>".$row["address"]."</td>";
    echo    "<td><a href='deletestudent.php?id={$row['student_ID']}'> Delete </a></td>";
    echo"</tr>"; 
}
?>  
</table>