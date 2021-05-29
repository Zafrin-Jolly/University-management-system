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
<title> Home Page  </title>
</head> 
<link rel="stylesheet" type="text/css" href="../css/mycss11.css">
 <body>
    <h1 align="center">AIUB Portal</h1>
    <h1 align="center">Welcome to AIUB Portal  <?php echo $_SESSION["username"];?> </h1>
    <div class="navbar">
    <button> <a href="../admincontrol/logout.php" align="right">logout</a></button>
</div>
<br/>
    
        <table border = "5" align="center">
            <tr>
                <td align="center"> <h5>  <a href="admin.php">Admin Information</a>  </h5> </td>
            </tr> 

            <tr>
                <td align="center"> <h5>  <a href="student.php">Student Information</a>  </h5> </td>
            </tr> 
            <tr>
                <td align="center"> <h5>  <a href="faculty.php">Faculty Information</a>  </h5> </td>
            </tr> 

            <tr>
                <td align="center"> <h5>  <a href="courses.php">Courses Information</a>  </h5> </td>
            </tr> 
            <tr>
                <td align="center"> <h5>  <a href="notice.php">Notice Information</a>  </h5> </td>
            </tr> 
            <tr>
                <td align="center"> <h5>  <a href="results.php">Results Information</a>  </h5> </td>
            </tr> 

            <tr>
                <td align="center"> <h5>  <a href="../view/aall.php">See Undergrade Applicant students</a>  </h5> </td>
            </tr> 
            <tr>
                <td align="center"> <h5>  <a href="../view/gall.php">See Graduate Applicant students</a>  </h5> </td>
            </tr>
 
           
        </table>
    
</body> 

</html>


