<?php
include("Include/connection.php");
if(isset($_POST['insert']))
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$inq="insert into customer (name,age,gender) values ('$name','$age','$gender')";
	mysql_query($inq) or die(mysql_error());
}
if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$inq="update customer set  (name,age,gender) values ('$name','$age','$gender')";
	mysql_query($inq) or die(mysql_error());
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><label for="name"></label>
      <input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><label for="age"></label>
      <input type="text" name="age" id="age" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><label for="gender"></label>
      <input type="text" name="gender" id="gender" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="insert" id="insert" value="Insert" />  </td>
      <td><input type="submit" name="update" id="update" value="Update" />
      <input type="submit" name="delete" id="delete" value="Delete" /></td>
      
      
    </tr>
  </table>
</form>
</body>
</html>
