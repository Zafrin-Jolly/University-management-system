
<?php

include('../model/db.php');
$radio1=$radio2=$radio3="";
    $password=$student_name=$fathers_name=$mothers_name="";
    $DOB=$contact_no=$address=$cgpa="";
    $username=$Batch=$dept_name="";
    $err_sname="";


$error="";

if (isset($_POST['update'])) 
{
    
    
    if (empty($_POST['student_name']) || empty($_POST['fathers_name']) || empty($_POST['mothers_name']) || empty($_POST['DOB'])
    || empty($_POST['contact_no']) || empty($_POST['address']) || empty($_POST['cgpa']) 
    || empty($_POST['Batch'])  || empty($_POST['dept_name'])) 
    {
    
       
 
        //  $studentId=$_POST["studentId"];
            $username=$_POST["username"];
        //  $password=$_POST["password"];
            $student_name=$_POST["student_name"];
            $fathers_name=$_POST["fathers_name"];
            $mothers_name=$_POST["mothers_name"];
            $gender=$_POST["gender"];
            $DOB=$_POST["DOB"];
            
            $contact_no=$_POST["contact_no"];
            $address=$_POST["address"];
            $cgpa=$_POST["cgpa"];
            $Batch=$_POST["Batch"];
            $dept_name=$_POST["dept_name"];
    
            
            if(empty($_POST["username"]))
            {
                $username="*Username Required";
            }
            if( strlen($_POST["username"]) < 6)
            {
                $username="*Username should be at least 6 characters";
            }

            
            
                if(strlen($_POST["contact_no"]) < 11)
                {
                    $contact_no="* should be at least 11 number";
                }
           
        
        
            if (empty($Batch)) 
            {
                $Batch="*Enter Batch year";;
            }
         
             if (!is_numeric($cgpa)) 
            {
                $cgpa="*Enter cgpa";
            }
            if(empty($_POST["student_name"]))
            {
                $student_name="* student name Required";
            }
            if(empty($_POST["fathers_name"]))
            {
                $fathers_name="* fathers_name Required";
            }
            if(empty($_POST["mothers_name"]))
            {
                $mothers_name="* mothers_name Required";
            }
            if(empty($_POST["address"]))
            {
                $address="* address Required";
            }
            if(empty($_POST["section_name"]))
            {
                $section_name="*section_name Required";
            }
            if(empty($_POST["dept_name"]))
            {
                $dept_name="* dept_name Required";
            }
            
        
            if (empty($_POST["gender"])) 
            {
                $gender = " *You have to select one";
            } 
            
    }
    else
    {    
            $connection = new db();
             $conobj=$connection->OpenCon();
            $userQuery=$connection->UpdateUser($conobj,"students"
             ,$_POST['student_name'],$_POST['fathers_name'],$_POST['mothers_name']
             ,$_POST['DOB'],$_POST['gender'],$_POST['contact_no'],$_POST['address'],$_POST['cgpa']
             ,$_POST['Batch'],$_POST['dept_name'],$_POST['username']);
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