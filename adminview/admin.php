<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss9.css">
<title> Admin information Page  </title>
</head> 
 <body>
    
    <h1 align="center"> Admin information Page </h1>
    <table align='center'>
<tr > 
<td><b><h1 align="center"> Admin  </h1></td>
</tr>
</table> 
<div class="navbar">
<h2 align="right" ><button> <a href="pageone.php">Go to options</a></button><button> <a href="../admincontrol/logout.php">logout</a> </h2> </button>
<button><a href="addadmin.php" >Add admin</a>  </h5> </button>
</div>
</body> 

</html>
<?php
include "../models/db_config.php";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$query="select * from admin";
$result=mysqli_query($conn,$query);
?>
<table align ="center" border="1" style="border-collapse:collapse"> 
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