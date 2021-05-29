<<!DOCTYPE html>
<html>
<head>
<title> Student Page  </title>
</head> 
 <body>
    <h1 align="center"> Student Page </h1>
    <table align='center'>
<tr > 
<td><b> <h1 align="center">   </h1></b> </td> 
</tr>
</table>
<h1 align="right" ><button> <a href="../admincontrol/logout.php">logout</a> </h1> </button>
<button><a href="addadmin.php" >Add another admin</a>  </h5> </button>

<button><a href="addnotice.php">Update Notice</a>  </h5> </button>
</body> 

</html>
<?php
include "../models/db_config.php";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$query="SELECT student_ID,username,password,student_name,fathers_name,mothers_name,DOB,gender,contact_no,address,cgpa,Batch,section_name,dept_name FROM students WHERE username=username";
$result=mysqli_query($conn,$query);
?> 
<table align="center" border="1" style="border-collapse:collapse"> 
<tr>
<th>Admins username</th>
<th>Admin Id</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo"<td>".$row["a_username"]."</td>";
    echo"<td>".$row["admin_id"]."</td>";
    echo"</tr>"; 
}
?>  
</table>