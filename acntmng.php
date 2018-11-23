<?php

if(isset($_POST['create']))
{
	header('location:customer.php');
}
if(isset($_POST['close']))
{
	header('location:close.php');
}

?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body  background="acnmng1.png">
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <table width="3" border="0" align="center">
    <tr>
      <td><input type="submit" name="create" id="create" value="Create Account" style="height:75px; width:140px; background-color:#666"  /></td>
    </tr>
    <tr>
      <td><input type="submit" name="close" id="close" value="Close Account  " style="height:75px; width:140px; background-color:#666" /></td>
    </tr>
  </table>
</form>
</body>
</html>