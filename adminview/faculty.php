<<!DOCTYPE html>
<html>
<head>
<title> Faculty information Page  </title>
<link rel="stylesheet" type="text/css" href="../css/mycss10.css">
</head> 
 <body>
    <h1 align="center"> Faculty information</h1>
    <table align='center'>
</table>

    <br/>
    <div class="navbar">
    <div class="navbar">
<h2 align="right" ><button> <a href="pageone.php">Go to options</a></button><button> <a href="../admincontrol/logout.php">logout</a></button></h2>
  <h2>  <button><a href="addfaculty.php" >Add Faculty</a> </button> </2>
</body> 
</div>
</html>
<?php
include "../models/db_config.php";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$query="select * from faculties";
$result=mysqli_query($conn,$query);
?>
<table align ="center" border="1" style="border-collapse:collapse"> 
<tr>
<th>Faculty name</th>
<th>Username</th>
<th>Password</th>
<th>Faculty Id</th>
<th>DOB</th>
<th>Gender</th>
<th>Contact_no</th>
<th>Address</th>
<th colspan="2">Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo"<td>".$row["faculty_name"]."</td>";
    echo"<td>".$row["username"]."</td>";
    echo"<td>".$row["password"]."</td>";
    echo"<td>".$row["faculty_ID"]."</td>";
    echo"<td>".$row["DOB"]."</td>";
    echo"<td>".$row["gender"]."</td>";
    echo"<td>".$row["contact_no"]."</td>";
    echo"<td>".$row["address"]."</td>";
    echo   "<td> <a href='updatefaculty.php' >Update </a></td>";
    echo   "<td><a href='deletefaculty.php?id={$row['faculty_ID']}'> Delete </a></td>";
    echo"</tr>"; 
}
?>  
</table>