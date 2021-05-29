<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss11.css">
<title> Home Page  </title>
</head> 
 <body>
    <h1 align="center">AIUB Portal</h1>
   
  
    <h1 align="center">Welcome to AIUB Portal  <?php echo $_SESSION["username"];?> </h1>
    <h3 align="center"> <a href="../facultycontrol/logout.php">logout</a> </h3>
    <br/>


     



<br/>
    
        <table border = "5" align="center">
            <tr>
                <td> <h5>  <a href="courses.php">Courses Information</a>  </h5> </td>
            </tr> 
            <tr>
                <td> <h5>  <a href="notice.php">Give notice</a>  </h5> </td>
            </tr> 

            <tr>
                <td> <h5>  <a href="results.php">Results Information</a>  </h5> </td>
            </tr> 
        </table>
    
</body> 

</html>


