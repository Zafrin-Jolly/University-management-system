<?php

include('../cmodel/db.php');
$radio1=$radio2=$radio3="";
    $course_ID=$course_name="";
    $course_credit="";
    
$error="";
   

if (isset($_POST['update'])) 
{
    
    
    if (empty($_POST['course_name']) ||  empty($_POST['course_credit'])) 
    {
    
       
 
        
            
        
            $course_name=$_POST["course_name"];
            $course_ID=$_POST["course_ID"];
            $course_credit=$_POST["course_credit"];
            

           
            if(empty($_POST["course_name"]))
            {
                $student_name="* faculty name Required";
            }
           
            
                if(strlen($_POST["course_ID"]) <2 )
                {
                    $faculty_ID="* should be at least 3 number";
                }
           

            
            
    }
    else
    {    
            $connection = new db();
             $conobj=$connection->OpenCon();
            $userQuery=$connection->UpdateUser($conobj,"course",$_POST['course_ID'],$_POST['course_name'],$_POST['course_credit']);
                 if($userQuery==TRUE)
                 {
                     echo "update successful"; 
                 }
                 else
                 {
                     echo "could not update";    
                 }
             $connection->CloseCon($conobj);
    }      
}

?>