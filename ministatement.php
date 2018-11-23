 <?php
	
	 include("Include/connection.php");
	 session_start();
	 
	 if(isset($_POST['withdraw']))
	{
		header('location:miniwithdraw.php');
	}
	 if(isset($_POST['deposit']))
	{
		header('location:minideposit.php');
	}
	 if(isset($_POST['moneytransfer']))
	{
		header('location:mtmini.php');
	}
		
	 ?>	


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="download.jpg">
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="99" border="1" align="center">
    <tr>
      <td><input type="submit" name="withdraw" id="withdraw" value="WITHDRAW              " /></td>
    </tr>
    <tr>
      <td><input type="submit" name="deposit" id="deposit" value="DEPOSIT                  " /></td>
    </tr>
    <tr>
      <td><input type="submit" name="moneytransfer" id="moneytransfer" value="MONEY TRANSFER" /></td>
    </tr>
  </table>
</form>
</body>
</html>