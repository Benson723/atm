<?php

if(isset($_POST['accountmng']))
{
	header('location:acntmng.php');
}
if(isset($_POST['custdetails']))
{
	header('location:custdetails.php');
}

?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="acnmng1.png">
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="0" align="center">
    <tr>
      <td colspan="2" align="center"><input type="submit" name="accountmng" id="accountmng" value="Account Management" style="height:75px; width:140px; background-color:#666" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="custdetails" id="custdetails" value="   Customer Details   " style="height:75px; width:140px; background-color:#666" /></td>
    </tr>
    
  </table>
</form>
</body>
</html>
