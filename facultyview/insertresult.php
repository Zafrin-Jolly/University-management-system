<?php
include "../models/db_config.php";
$admit="";
$err_admit="";

$mark="";
$err_mark="";

$studentId="";
$err_studentId="";

$courseId="";
$err_courseId="";
$hasError=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $admit=$_POST["admit"];
    $mark=$_POST["mark"];
    $studentId=$_POST["studentId"];
    $courseId=$_POST["courseId"];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    if(empty($_POST["admit"]))
    {
       $admit=" *enter admit number";
    }
    else if( strlen($_POST["admit"]) < 6)
            {
                $admit="*Enter accurate number";
                $hasError=true;
            }
    else if (!is_numeric($courseId)) 
            {
                $courseId="*Must be integer";
                $hasError=true;
            }
    else if (!is_float((float)($mark))) 
            {
                $mark="*Enter accurate year";
                $hasError=true;
            }
    else
    {
        $admit=htmlspecialchars($_POST["admit"]);
        $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
        $query="insert into result values('$admit','$mark','$studentId','$courseId')";
        if (mysqli_query($conn,$query))
        {
        echo "inserted!";
        }
        else
        {
        echo mysqli_error($conn);

        }
    }
}
}    
 ?>