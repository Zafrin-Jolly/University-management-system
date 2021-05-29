<?php
    require_once 'insertresult.php'
?>
<html>
	<head><h1 align="center">Add result</h1></head> 
  <link rel="stylesheet" type="text/css" href="../css/mycss9.css">
    <h2 align="center">Fill the required information correctly</h2>
    <html>
<body>
<fieldset>
			<legend ><h1>Result</h1></legend>
  
  <form action="" method="post" onsubmit="return validate()">
  <table align="center">
  <tr> 
  <td><span>Admit card ID </span></td>
  <td><input type="text" id="admit" name="admit"><span id="err_admit"></span></td> 
  </tr>
					<tr>
          <td><span>Mark </span></td>
  <td><input type="text" id="mark" name="mark"><span id="err_mark"></span>
  </tr>
					<tr>
          <td><span>Student Id</span></td>
  <td><input type="text" id="studentId" name="studentId"><span id="err_sid"></span>
  </tr>
					<tr>
          <td><span>Course Id</span></td>
  <td><input type="text" id="courseId" name="courseId"><span id="err_cid"></span><br>
  </tr>
	<tr>
 <td><input type="submit" id="submit" name="submit" align="center"><br></td>
 </tr>

 </table>
  </form>
</body>
<script>
function get(id)
{
  return document.getElementById(id);
}
function validate()
{
  cleanUp(); 
  var err_msg=""; 
  var hasError=false;
  if(get("admit").value=="")
  {
    get("admit").focus();
    get("err_admit").innerHTML=" *Admit number required!";
    get("err_admit").style.color="red";
   err_msg ="Fill the full form";
   hasError=true;
  } 
  if(get("mark").value=="")
  {
    get("err_mark").innerHTML=" *obtained mark required!";
    get("err_mark").style.color="red";
    err_msg ="Fill the full form";
    hasError=true;
  } 
  
  if(get("studentId").value=="")
  {
    get("err_sid").innerHTML=" *Student Id required!";
    get("err_sid").style.color="red";
    err_msg ="Fill the full form";
    hasError=true;
  } 

  if(get("courseId").value=="")
  {
    get("err_cid").innerHTML=" *Course Id required!";
    get("err_cid").style.color="red";
    err_msg ="Fill the full form";
    hasError=true;
  } 
 // alert(err_msg);
  if(!hasError)
  {
    return true;
  }
  return false;
}
function cleanUp()
{
  get("err_admit").innerHTML="";
  get("err_mark").innerHTML="";
  get("err_sid").innerHTML="";
  get("err_cid").innerHTML="";
  

}
</script>
</html> 