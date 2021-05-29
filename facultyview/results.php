<!DOCTYPE html>
<html>
<head>
<title> Result information Page  </title>
<link rel="stylesheet" type="text/css" href="../css/mycss11.css">
</head> 
 <body>
    <h1 align="center"> Results information</h1>
   
    <table align='right'>
    <div class="navbar">
    <tr > 
    <h3 align="right" ><button> <a href="../admincontrol/logout.php">logout</a> </h3> </button> 
</tr>
</div>
</table>
<div class="navbar">
    <br/>
    <button><a href="addresult.php" >Add Result</a>  </h5> </button>&nbsp;  &nbsp;
    <button><a href="updateresult.php" >Update Result</a>  </h5> </button>
</div>
</body> 

</html>
<?php
include "../models/db_config.php";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$query="SELECT * from result ";
$result=mysqli_query($conn,$query);
?>
<table align ="center" border="1" style="border-collapse:collapse"> 
<tr>
<th>Admit card number</th>
<th>Obtained Mark</th>
<th>student ID</th>
<th>Course ID</th>

</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo"<td>".$row["admitcard_number"]."</td>";
    echo"<td>".$row["obtained_mark"]."</td>";
    echo"<td>".$row["student_ID"]."</td>";
    echo"<td>".$row["course_ID"]."</td>";
    echo"</tr>"; 
}
?>  
</table>