<?php
//include('db.php');
include('../model/db.php');


$error="";

if (isset($_POST['update'])) 
{
    if (empty($_POST['student_name']) || empty($_POST['fathers_name']) || empty($_POST['mothers_name']) || empty($_POST['DOB'])
    || empty($_POST['contact_no']) || empty($_POST['address']) || empty($_POST['cgpa']) 
    || empty($_POST['Batch']) || empty($_POST['section_name']) || empty($_POST['dept_name'])) 
        {
        $error = "input given is invalid/ Fill up all the field ";
        }
    else
        {
        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery=$connection->UpdateUser($conobj,"students",$_SESSION["username"]
        ,$_POST['password'],$_POST['student_name'],$_POST['fathers_name'],$_POST['mothers_name']
        ,$_POST['DOB'],$_POST['contact_no'],$_POST['address'],$_POST['cgpa']
        ,$_POST['Batch'],$_POST['section_name'],$_POST['dept_name']);
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