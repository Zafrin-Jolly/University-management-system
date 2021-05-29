<?php
    include "../models/db_config.php";
    session_start();

    $did= $_GET['id'];

 $query= "DELETE FROM students WHERE student_ID= $did";
    if(!execute($query))
    {
        echo " Student Deleted";
        header("Location: student.php");
    }
    else{
        echo "Can not delete student";
    }

 

?>

 

<html>
    <head>
        <legend align= "center"><h1 >Welcome <?php echo $_SESSION["username"]; ?> </h1></legend>
    
    </head>
    <body>
        
    </body>
</html>