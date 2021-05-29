<?php
session_start(); 

if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>

<?php
   

    
    if(isset($_POST["search"]))
    {
        $course_credit="";
        $course_ID="";
        $course_name="";
            $course_ID=$_POST['course_ID'];
           
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "mydb";
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
           $userQuery = $conn->query("SELECT * FROM course where course_ID='$course_ID'");
            //$userQuery=$connection->getUser($conobj,"course",$cname);

            if ($userQuery->num_rows > 0) 
            {

                // output data of each row
                while($row = $userQuery->fetch_assoc())
                {
                    $course_ID= $row["course_ID"];
                
                    $course_name= $row["course_name"];
                    
                   
                    $course_credit=$row["course_credit"];
                   
                
                    
            
                } 
            }
            else 
            {
            echo "0 results";

            }
}
    ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss12.css">
<title> Course information Page  </title>
</head> 
 <body>
    <h1 align="center"> Course information Page </h1>
   
  
    <h1> <h1 align="center"> Course </h1> 
    <form action='' method='post'>
 
Search by Course ID : <input type='text' name='course_ID'  > <br>


<input name='search' type='submit' value='Search'> 
</form>

<form action='' method='post'>
course_ID : <input type='text' name='course_ID' value="<?php echo $course_ID; ?>" > <br>
course_name : <input type='text' name='course_name' value="<?php echo $course_name; ?>" > <br>

course_credit : <input type='text' name='course_credit' value="<?php echo $course_credit; ?>" > <br>  
<br>
<br>
</body> 

</html>
<?php
include "../models/db_config.php";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$query="select * from course";
$result=mysqli_query($conn,$query);
?>
<table align ="center" border="1" style="border-collapse:collapse"> 
<tr>
<th>Course ID</th>
<th>Course name</th>
<th>course credit</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo"<td>".$row["course_ID"]."</td>";
    echo"<td>".$row["course_name"]."</td>";
    echo"<td>".$row["course_credit"]."</td>";
    echo"</tr>"; 
}
?>  
</table>