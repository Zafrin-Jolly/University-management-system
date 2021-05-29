<?php
$adminId="";
$uname="";
$password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $adminId=$_POST["adminId"];
    $uname=$_POST["uname"];
    $password=$_POST["password"];
    include "../models/db_config.php";
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
    $query="insert into admin values('$adminId','$uname','$password')";
    if (mysqli_query($conn,$query))
{
    
    echo "inserted!";
}
else
{
   echo "can not insert user!";
}
}
?> 
<html>
<link rel="stylesheet" type="text/css" href="../css/mycss9.css">
    <body>
    <h1 align="center"> Add new admin here </h1>
    <h2 align="center">Please enter the required information</h2>
        <form action="" method="post" align="center">
        Admin ID:<input type="text" name="adminId"placeholder="adminId"><br>
        Username:<input type="text" name="uname"placeholder="Username"><br>
        Password:<input type="password" name="password"placeholder="Password"><br>
        <input type="submit" value="Add Admin">
        <br><br><br>
        <button><a href="admin.php"> Go back<a></button>
        </table>
        </form>
    </body>  
</html> 