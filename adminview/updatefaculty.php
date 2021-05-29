<?php
session_start(); 

include('facultycheck.php');

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

            
            $userQuery=$connection->getUser($conobj,"faculties",$sname);

            if ($userQuery->num_rows > 0) 
            {

                // output data of each row
                while($row = $userQuery->fetch_assoc())
                {
                
                    $username= $row["username"];
                    $faculty_name=$row["faculty_name"];
                   
                    $DOB=$row["DOB"];
                    $contact_no=$row["contact_no"];
                    $address=$row["address"];
                
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
<link rel="stylesheet" type="text/css" href="../css/mycss12.css">
<html>
<body>
<h1>Update Page</h1>

Hii, <h3><?php echo $_SESSION["username"];?></h3>

<br><br>
<form action='' method='post'>
Search by username : <input type='text' name='username'  > <br>


<input name='search' type='submit' value='Search'> 
</form>

<form action='' method='post'>
username : <input type='text' name='username' value="<?php echo $username; ?>" > <br>
Student Name : <input type='text' name='faculty_name' value="<?php echo $faculty_name; ?>" > <br>


Date Of Birth : <input type='date' name='DOB' value="<?php echo $DOB; ?>" > <br>

Gender:
    <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
    <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
    <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
    <br>
Contact Number : <input type='text' name='contact_no' value="<?php echo $contact_no; ?>" > <br>
Address : <input type='text' name='address' value="<?php echo $address; ?>" > <br>


<input name='update' type='submit' value='Update'>  

        
    <?php echo $error; ?>
<br>
<br>
<a href="student.php">Go Back </a>
<br>

</body>
</html>




   