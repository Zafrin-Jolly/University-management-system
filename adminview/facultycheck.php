
<?php

include('../fmodel/db.php');
$radio1=$radio2=$radio3="";
    $password=$faculty_name="";
    $DOB=$contact_no=$address="";
    
$error="";
   

if (isset($_POST['update'])) 
{
    
    
    if (empty($_POST['faculty_name']) ||  empty($_POST['DOB'])
    || empty($_POST['contact_no']) || empty($_POST['address'])) 
    {
    
       
 
        
            $username=$_POST["username"];
        
            $faculty_name=$_POST["faculty_name"];
            $gender=$_POST["gender"];
            $DOB=$_POST["DOB"];
            
            $contact_no=$_POST["contact_no"];
            $address=$_POST["address"];
            
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
           
        
        
            if(empty($_POST["faculty_name"]))
            {
                $student_name="* faculty name Required";
            }
           
            if(empty($_POST["address"]))
            {
                $address="* address Required";
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
            $userQuery=$connection->UpdateUser($conobj,"faculties"
             ,$_POST['faculty_name']
             ,$_POST['DOB'],$_POST['gender'],$_POST['contact_no'],$_POST['address'],$_POST['username']);
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