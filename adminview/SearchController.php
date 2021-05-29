<?php
	require_once "../models/db_config.php";
    $username = $_REQUEST['username'];
    
    $query = "select * from students where username like '%{$username}%'";
    $result = get($query);
    
	if($username =="")
    {
        echo "<h4 align ='center'>Enter Some value<h4>";

    }
	
    else
    {
        $response = "<table border=1 align='center'>
                        <tr>
                            <th>Student name</th>
                            <th>Username</th>
                            <th>Student ID</th>
                            <th>Department</th>
                            <th>CGPA</th>
                            <th>Batch</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            
                        </tr>";

	
		foreach ($result as $row)
		{	$response .="
							<tr>
							<td>{$row["student_name"]}</td>
							<td>{$row["username"]}</td>
							<td>{$row["student_ID"]}</td>
							<td>{$row["dept_name"]}</td>
							<td>{$row["cgpa"]}</td>
							<td>{$row["Batch"]}</td>
                            <td>{$row["DOB"]}</td>
                            <td>{$row["gender"]}</td>
                            <td>{$row["contact_no"]}</td>
                            <td>{$row["address"]}</td>
							
							</tr>";
			
			
		}
		
        // while ($row = mysqli_fetch_assoc($result)) {
            // $response .= "    <tr>
                                // <td>{$row['Id']}</td>
                                // <td>{$row['name']}</td>
                                // <td>{$row['username']}</td>
                                // <td>{$row['email']}</td>
                                
                            // </tr>";
        // }

 

        $response .= "</table>";

 

        echo $response;
    }

?>