<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }
 function getUser($conn,$table,$username)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
 return $result;
 }

//ShowAll User function
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
//Inser user function
function InsertData($conn,$table,$student_ID,$username,$password,$student_name,$fathers_name
,$mothers_name,$DOB,$gender,$contact_no,$address,$cgpa,$Batch
,$section_name,$dept_name)
 {
    $sql = "INSERT INTO $table (student_ID,username, password, student_name, fathers_name
     ,mothers_name, DOB, gender,contact_no, address, cgpa, Batch
     ,section_name, dept_name) 

    VALUES ('$student_ID','$username', '$password','$student_name', '$fathers_name' 
    ,'$mothers_name','$DOB','$gender','$contact_no', '$address','$cgpa', '$Batch' 
    ,'$section_name','$dept_name')";
    
    $result = $conn->query($sql);
    if($result)
    { 
        echo "New record has been inserted"; 
        return $result;
    }
    else
    {
        echo "An Error Occurred".$conn->error;
    }
  
 }

//Updatecheck function
 function UpdateUser($conn,$table,$student_name,$fathers_name,$mothers_name,$DOB,$gender
 ,$contact_no,$address,$cgpa,$Batch,$section_name,$dept_name,$username)
 {
      $sql = "UPDATE $table SET
       student_name='$student_name'
      ,fathers_name='$fathers_name',mothers_name='$mothers_name', DOB='$DOB'
      ,gender='$gender',contact_no='$contact_no',address='$address'
      ,cgpa='$cgpa',Batch='$Batch',section_name='$section_name',dept_name='$dept_name'
      WHERE username='$username'";
 


    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>