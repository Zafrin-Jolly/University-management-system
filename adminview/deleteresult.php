<?php
    include "../models/db_config.php";
    session_start();

    $did= $_GET['id'];

 $query= "DELETE FROM result WHERE student_ID= $did";
    if(!execute($query))
    {
        echo " Result Deleted";
        header("Location:results.php");
    }
    else{
        echo "Can not delete result";
    }

 

?>


<html>
    <head>
        <legend align= "center"><h1 >Welcome <?php echo $_SESSION["username"]; ?> </h1></legend>
    
    </head>
    <body>
        
    </body>
</html>