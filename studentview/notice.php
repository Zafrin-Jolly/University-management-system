<link rel="stylesheet" type="text/css" href="../css/mycss10.css">
</html>
<?php
include "../models/db_config.php";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$query="select * from fnotice";
$result=mysqli_query($conn,$query);
?>
<fieldset>
<legend><h1>See faculty notice </h1></legend>
<fieldset>
<table align ="center" border="1" style="border-collapse:collapse"> 
<tr>
<th>Notice no</th>
<th>Date</th>
<th>Notice</th>
<th>Facult name</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo"<td>".$row["notice_no"]."</td>";
    echo"<td>".$row["date"]."</td>";
    echo"<td>".$row["notice"]."</td>";
    echo"<td>".$row["faculty_name"]."</td>";
    echo"</tr>"; 
}
?>  
</table>