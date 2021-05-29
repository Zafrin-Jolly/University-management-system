<?php 
session_start();
$course_Id = "";
	$course_name = "";
	$course_credit ="";
	$update = false;

	if (isset($_POST['update'])) 
{
        $course_Id = $_POST['course_ID'];
		$course_name = $_POST['course_name'];
		$course_credit = $_POST['course_credit'];
        include "../models/db_config.php";
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
    $query="insert into course values('$courseId','$coursename','$coursecredit')";
    if (mysqli_query($conn,$query))
{
    echo "inserted!";
}
else
{
   echo "can not insert user!";
}

		header('location: courses.php');
}
if (isset($_POST['update'])) {
    $course_Id = $_POST['course_ID'];
    $course_name = $_POST['course_name'];
    $course_credit = $_POST['course_credit'];

	mysqli_query($conn, "UPDATE course SET course_ID='$course_ID', course_name='$courseName',course_credit='$course_credit' WHERE course_ID=$course_ID");
	$_SESSION['message'] = "updated!"; 
	header('location: courses.php');
if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM course WHERE course_ID=$courseID");
        $_SESSION['message'] = "deleted!"; 
        header('location: courses.php');
    }
}
?>

// ...