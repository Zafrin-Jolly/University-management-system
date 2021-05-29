<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss9.css">
<title> Notice information Page  </title>
</head> 
<body>
    <h1 align="center"> Faculty notice</h1>

    </table>
    <div class="navbar">
<h2 align="right" ><button> <a href="../facultycontrol/logout.php">logout</a> </h2> </button>
<button><a href="addnotice.php">Add Notice</a>  </h5> </button>
</div>
</body>

</html>
<?php
include "../models/db_config.php";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$query="select * from fnotice";
$result=mysqli_query($conn,$query);
?>
<fieldset>
<legend><h1>See all notice</h1></legend>
<fieldset>
<table align ="center" border="1" style="border-collapse:collapse"> 
<tr>
<th>Notice no</th>
<th>Date</th>
<th>Notice</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo"<td>".$row["notice_no"]."</td>";
    echo"<td>".$row["date"]."</td>";
    echo"<td>".$row["notice"]."</td>";
    echo"</tr>"; 
}
?>  
</table>