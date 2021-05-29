<<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss11.css">
<title> Course information Page  </title>
</head> 
 <body>
    <h1 align="center"> Course information </h1>
    <table align='right'>
<tr > 
<div class="navbar">
<td><h2><a href="../admincontrol/logout.php">logout</a></h2></td> 
</tr>
</div>
</table></h1>


    <br/>
    <button><a href="addcourse.php" >Add course</a>  </h5> </button> &nbsp;  &nbsp;
   <br>
   <br>
</body> 

</html>
<?php
include "../models/db_config.php";
$query="select * from course";
$result=get($query);
?>
<table align ="center" border="1" style="border-collapse:collapse"> 
<tr>
<th>Course ID</th>
<th>Course Name</th>
<th>Course credit</th>
<th colspan="2"> Action</th>

</tr>

<?php
foreach($result as $row)
{
    echo "<tr>";
    echo"<td>".$row["course_ID"]."</td>";
    echo"<td>".$row["course_name"]."</td>";
    echo"<td>".$row["course_credit"]."</td>";
	echo   "<td><a href='updatecourse.php?id={$row['course_ID']}'> Update</a></td>";
    echo   "<td><a href='deletecourse.php?id={$row['course_ID']}'> Delete </a></td>";
    echo"</tr>"; 
}
?>  
</table>