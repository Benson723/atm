<?php
ob_start();
	include("Include/connection.php");
	session_start();
	echo "ATM no is " . $_SESSION["atmnum"] . ".";
	
	if(isset($_POST['withdraw']))
	{
		header('location:wd.php');
	}
	if(isset($_POST['deposit']))
	{
		header('location:deposit.php');
	}
	if(isset($_POST['balance']))
	{
		header('location:balance.php');
	}
	if(isset($_POST['ministatement']))
	{
		header('location:ministatement.php');
	}
	if(isset($_POST['moneytransfer']))
	{
		header('location:mt.php');
	}
	if(isset($_POST['pinchange']))
	{
		header('location:pinchange.php');
	}
    if(isset($_POST['logout']))
	{
		header('location:atmlogin.php');
		session_destroy();
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
  <p align="right">
    <input type="submit" name="logout" id="logout" value="Logout" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
      <table width="524" height="211" border="0"  align="center">
    <tr>
      <td width="124" ><input type="submit" name="withdraw" id="withdraw" value="WITHDRAW          " style="height:80px; width:220px; background-color:#666" /></td>
      <td width="131"><input type="submit" name="ministatement" id="ministatement" value="MINI STATEMENT " style="height:80px; width:220px;background-color:#666"/></td>
      
    </tr>
    <tr>
      <td><input type="submit" name="deposit" id="deposit" value="DEPOSIT              " style="height:80px; width:220px;background-color:#666"/></td>
      <td><input type="submit" name="pinchange" id="pinchange" value="CHANGE PIN         " style="height:80px; width:220px;background-color:#666" /></td>
      
    </tr>
    <tr>
      <td><input type="submit" name="balance" id="balance" value="BALANCE ENQUIRY" style="height:80px; width:220px;background-color:#666" /></td>
      <td><input type="submit" name="moneytransfer" id="moneytransfer" value="MONEY TRANSFER" style="height:80px; width:220px;background-color:#666" /></td>
     
    </tr>
  </table>
</form>
</body>
</html>
