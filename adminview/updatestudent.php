<?php
session_start(); 

include('updatecheck.php');

if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>

<?php
   

    $connection = new db();
    $conobj=$connection->OpenCon();
    if(isset($_POST["search"]))
    {
            $sname=$_POST['username'];

            
            $userQuery=$connection->getUser($conobj,"students",$sname);

            if ($userQuery->num_rows > 0) 
            {

                // output data of each row
                while($row = $userQuery->fetch_assoc())
                {
                
                    $username= $row["username"];
                    $student_name=$row["student_name"];
                    $fathers_name=$row["fathers_name"];
                    $mothers_name=$row["mothers_name"];
                    $DOB=$row["DOB"];
                    $contact_no=$row["contact_no"];
                    $address=$row["address"];
                    $cgpa=$row["cgpa"];
                    $Batch=$row["Batch"];
                    $section_name=$row["section_name"];
                    $dept_name=$row["dept_name"];
                
                    if(  $row["gender"]=="female" )
                    { $radio1="checked"; }
                    else if($row["gender"]=="male")
                    { $radio2="checked"; }
                    else{$radio3="checked";}
            
                } 
            }
            else 
            {
            echo "0 results";
            }
}
    ?>
    
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/mycss12.css">
<body>
<h1>Student Update Page</h1>

Hii, <h3><?php echo $_SESSION["username"];?></h3>

<br><br>
<form action='' method='post'>
Search by username : <input type='text' name='username'  > <br>


<input name='search' type='submit' value='Search'> 
</form>

<form action='' method='post'>
username : <input type='text' name='username' value="<?php echo $username; ?>" > <br>
Student Name : <input type='text' name='student_name' value="<?php echo $student_name; ?>" > <br>
Fathers Name : <input type='text' name='fathers_name' value="<?php echo $fathers_name; ?>" > <br>
Mothers Name : <input type='text' name='mothers_name' value="<?php echo $mothers_name; ?>" > <br>

Date Of Birth : <input type='date' name='DOB' value="<?php echo $DOB; ?>" > <br>

Gender:
    <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
    <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
    <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
    <br>
Contact Number : <input type='text' name='contact_no' value="<?php echo $contact_no; ?>" > <br>
Address : <input type='text' name='address' value="<?php echo $address; ?>" > <br>
CGPA : <input type='text' name='cgpa' value="<?php echo $cgpa; ?>" > <br>

Batch : <input type='text' name='Batch' value="<?php echo $Batch; ?>" > <br>
Department Name : <input type='text' name='dept_name' value="<?php echo $dept_name; ?>" > <br>



<input name='update' type='submit' value='Update'>  

        
    <?php echo $error; ?>
<br>
<br>
<a href="student.php">Go Back </a>
<br>

</body>
</html>




   