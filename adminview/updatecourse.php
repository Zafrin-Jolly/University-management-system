<?php
session_start(); 

include('coursecheck.php');

if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>

<?php
   

    
    if(isset($_POST["search"]))
    {
            $course_ID=$_POST['course_ID'];
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "mydb";
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
           $userQuery = $conn->query("SELECT * FROM course where course_ID=102");
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
    
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/mycss12.css">
<body>
<h1>Update Page</h1>
<br><br>
<form action='' method='post'>
Search by Course ID : <input type='text' name='course_ID'  > <br>


<input name='search' type='submit' value='Search'> 
</form>

<form action='' method='post'>
course_ID : <input type='text' name='course_ID' value="<?php echo $course_ID; ?>" > <br>
course_name : <input type='text' name='course_name' value="<?php echo $course_name; ?>" > <br>

course_credit : <input type='text' name='course_credit' value="<?php echo $course_credit; ?>" > <br>
<input name='update' type='submit' value='Update'>  

        
    <?php echo $error; ?>
<br>
<br>
<button><a href="courses.php" >Go Back</a>  </h5> </button>
<br>

</body>
</html>




   