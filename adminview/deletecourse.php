<?php
    include "../models/db_config.php";
    session_start();

    $did= $_GET['id'];

 $query= "DELETE FROM course WHERE course_ID= $did";
    if(!execute($query))
    {
        echo " Course Deleted";
        header("Location: courses.php");
    }
    else{
        echo "Can not delete course";
    }

 

?>

 

<html>
    <head>
        <legend align= "center"><h1 >Welcome <?php echo $_SESSION["username"]; ?> </h1></legend>
    
    </head>
    <body>
        
    </body>
</html>