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
$result = $conn->query("SELECT * FROM ". "course"." WHERE username='". "Principle of account"."'");
 return $result;
 }

//ShowAll User function
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

//Updatecheck function
 function UpdateUser($conn,$table,$course_ID,$course_name,$course_credit)
 {
      $sql = "UPDATE $table SET
       course_ID='$course_ID', course_name='$course_name',course_credit='$course_credit'
      WHERE course_ID='$course_ID'";
 


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