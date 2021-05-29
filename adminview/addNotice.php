<html>
	<head><h1 align="center">Add new Notice</h1></head> 
    <link rel="stylesheet" type="text/css" href="../css/mycss10.css">
</html>

    <?php
    $number=null;
$notice="";
$date="";
$err_notice="";
$hasError=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
      $notice =$_POST["notice"];
      $date=$_POST["date"];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
            //for user
            if(empty($_POST["notice"]))
            {
                $err_notice="*notice must be written to provide!";
                $hasError=true;
            }
            else{
                $notice=htmlspecialchars($_POST["notice"]);
                include "../models/db_config.php";
                $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
                $query="insert into notice values('$number','$date','$notice')";
                if (mysqli_query($conn,$query))
                {
                echo "Notice added!";
                header("Location:notice.php");
                }
                else
                {
                echo "can not insert notice!";
                }

            }
        }
    }
    
    

?> 
<html>
<body>
<fieldset>
			<legend><h1>Notice!</h1></legend>
			<form action="" method="post">
				<table>
                       <td>Date</td>  
                        <td><input type="date" name="date" ></td> 
						<td><span>Admin Notices </span></td>
						<td>:<textarea name="notice"></textarea></td>
                        <span><?php echo $err_notice;?></span></td>
					</tr>
                  
						<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>
	</body>
</html>