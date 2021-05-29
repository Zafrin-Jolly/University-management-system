<<!DOCTYPE html>
<html>
<head>
<title> Result information Page  </title>
<link rel="stylesheet" type="text/css" href="../css/mycss10.css">
</head> 
 <body>
    <h1 align="center"> Results information</h1>
    
    <table align='right'>
    <div class="navbar">
    <tr > 
    <h2 align="right" ><button> <a href="../admincontrol/logout.php">logout</a> </h2> </button> 
</tr>
</div>
</table>

    <br/>
    <div class="navbar">
    &nbsp;  &nbsp; <button><a href="addresult.php" >Add Result</a> </button>
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
<th colspan="2">Action</th>

</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo"<td>".$row["admitcard_number"]."</td>";
    echo"<td>".$row["obtained_mark"]."</td>";
    echo"<td>".$row["student_ID"]."</td>";
    echo"<td>".$row["course_ID"]."</td>";
    echo   "<td><a href='updateresult.php'> Update</a></td>";
    echo   "<td><a href='deleteresult.php?id={$row['student_ID']}'> Delete </a></td>";
    echo"</tr>"; 
}
?>  
</table>