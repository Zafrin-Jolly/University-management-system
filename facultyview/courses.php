<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/mycss9.css">
<title> Course information Page  </title>
</head> 
 <body>
    <h1 align="center"> Course information </h1>
    <table align='right'>
<tr > 
<div class="navbar">
<h2 align="right"><button><a href="pageone.php">Go to options</a></button><button><a href="../facultycontrol/logout.php">logout</a></button></h2>
</tr>
</div>
</table></h1>

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


</tr>

<?php
foreach($result as $row)
{
    echo "<tr>";
    echo"<td>".$row["course_ID"]."</td>";
    echo"<td>".$row["course_name"]."</td>";
    echo"<td>".$row["course_credit"]."</td>";

    echo"</tr>"; 
}
?>  
</table>