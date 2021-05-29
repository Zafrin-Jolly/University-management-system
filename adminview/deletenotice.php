<?php
    include "../models/db_config.php";
    session_start();

    $did= $_GET['id'];

 $query= "DELETE FROM notice WHERE notice_no= $did";
    if(!execute($query))
    {
        echo " Notice Deleted";
        header("Location:notice.php");
    }
    else{
        echo "Can not delete Notice";
    }

 

?>


<html>
    <head>
        <legend align= "center"><h1 >Welcome <?php echo $_SESSION["username"]; ?> </h1></legend>
    
    </head>
    <body>
        
    </body>
</html>