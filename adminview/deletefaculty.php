<?php
    include "../models/db_config.php";
    session_start();

    $did= $_GET['id'];

 $query= "DELETE FROM faculties WHERE faculty_ID= $did";
    if(!execute($query))
    {
        echo " Faculty Deleted";
        header("Location: faculty.php");
    }
    else{
        echo "Can not delete Faculty";
    }

 

?>


<html>
    <head>
        <legend align= "center"><h1 >Welcome <?php echo $_SESSION["username"]; ?> </h1></legend>
    
    </head>
    <body>
        
    </body>
</html>