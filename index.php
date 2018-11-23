<?php

if(isset($_POST['bank']))
{
	header('location:adminlogin.php');
}
else 
if(isset($_POST['atm']))
{
	header('location:atmlogin.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="main.jpg">
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="3" border="0" align="center">
    <tr>
      <td><input type="submit" name="atm" id="atm" value="ATM"  style="height:120px; width:120px; background-color:#666" /></td>
      <td><input type="submit" name="bank" id="bank" value="BANK"  style="height:120px; width:120px; background-color:#666" /></td>
    </tr>
  </table>
</form>
</body>
</html>