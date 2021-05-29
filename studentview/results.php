<?php
session_start(); 

if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>

<?php
   
$admitcard_number="";
$course_ID="";
$student_ID="";
$obtained_mark="";
    
    if(isset($_POST["search"]))
    {   
            $course_ID=$_POST['course_ID'];
            $admitcard_number=$_POST['admitcard_number'];
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "mydb";
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
           $userQuery = $conn->query("SELECT * FROM result where  admitcard_number='$admitcard_number'");
            //$userQuery=$connection->getUser($conobj,"course",$cname);

            if ($userQuery->num_rows > 0) 
            {

                // output data of each row
                while($row = $userQuery->fetch_assoc())
                {
                    $admitcard_number= $row["admitcard_number"];

                    $obtained_mark= $row["obtained_mark"];

                    $student_ID= $row["student_ID"];

                    $course_ID= $row["course_ID"];

            
                } 
            }
            else 
            {
            echo "0 results";

            }
}
    ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss12.css">
<title> Result </title>
</head> 
<script >
function validateForm() {
  var admitcard_number = document.getElementById("admitcard_number").value;
  if (admitcard_number== "") {
    document.getElementById("mytext").innerHTML="Please enter Admitcard";
    return false;
  }
  }
}</script>
    </head>
    <body>
 <body>
    <h1 align="center"> Enter your admit card number</h1>
    <h1> <h1 align="center"> Course </h1> 


<form name="myForm" action="" onsubmit="return validateForm()" method="post" align="center">
Search here <br>
admitcard number : <input type='text' id="admitcard_number"name='admitcard_number'  > <br>
<input name='search' type='submit' value='Search'> 
<table>
<tr>
 <td>Admit card number: <input type='text' name='course_name' value="<?php echo $admitcard_number; ?>" > </td>
 <td>Obtained mark: <input type='text' name='course_name' value="<?php echo $obtained_mark; ?>" > </td>
<td> Student ID : <input type='text' name='course_name' value="<?php echo $student_ID; ?>" > </td>
<td>Course ID: <input type='text' name='course_ID' value="<?php echo $course_ID; ?>" > </td> 
</tr>
</table>
<br>
<br>
</body> 

</html>
 