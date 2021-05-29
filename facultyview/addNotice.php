<html>
<link rel="stylesheet" type="text/css" href="../css/mycss12.css">
	<head><h1 align="center">Add new Notice</h1></head> 

</html>

    <?php
    $number=null;
$notice="";
$date="";
$err_notice="";
$fname="";
$err_fname="";
$hasError=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
      $notice =$_POST["notice"];
      $date=$_POST["date"];
      $fname=$_POST["fname"];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
            //for user
            if(empty($_POST["notice"]))
            {
                $err_notice="*notice must be written to provide!";
                $hasError=true;
            }
            else if(empty($_POST["fname"])||strlen($_POST["fname"]) < 6)
            {
                $err_notice="*accurate name must be given";
                $hasError=true;
            }
            else{
                $notice=htmlspecialchars($_POST["notice"]);
                include "../models/db_config.php";
                $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
                $query="insert into fnotice values('$number','$date','$notice','$fname')";
                if (mysqli_query($conn,$query))
                {
                echo "Notice added!";
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
                      <tr>
                       <td>Date</td>  
                        <td><input type="date" name="date" ></td>
                        </tr> 
                        <tr>
						<td><span>Faculty Notices </span></td>
						<td>:<textarea name="notice"></textarea></td>
                        <span><?php echo $err_notice;?></span></td>
                        </tr>
                        <tr>
                        <td>Faculty name</td>  
                        <td><input type="text" name="fname" ></td> 
					</tr>
                  
						<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>
	</body>
</html>