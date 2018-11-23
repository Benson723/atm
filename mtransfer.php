<?php
include("Include/connection.php");
session_start();
if(isset($_POST['Transfer']))
{
	$cardno=$_SESSION['atmnum'];
	$dacntno=$_POST['dacntno'];
	$amount=$_POST['amount'];
	//$dep=0;
	$date = date('Y-m-d');
	
	$query = "SELECT Acntno FROM account where `Cardno`='".$cardno."'";
	if ($is_query_run = mysql_query($query)) 
{ 
    //echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysql_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
      $acn =$query_executed['Acntno'].' '; 
	  	         
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
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
  <table width="283" border="1" align="center">
    <tr>
      <td width="145" style="color:#FFF">Account Number</td>
      <td width="122"><label for="acntno"></label>
      <input type="text" name="acntno" id="acntno" /></td>
    </tr>
    <tr>
      <td style="color:#FFF">Desig Acnt NO</td>
      <td><label for="dacntno"></label>
      <input type="text" name="dacntno" id="dacntno" /></td>
    </tr>
    <tr>
      <td style="color:#FFF">Amount</td>
      <td><label for="amount"></label>
      <input type="text" name="amount" id="amount" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><input type="submit" name="Transfer" id="Transfer" value="Transfer" /></td>
    </tr>
  </table>
</form>
</body>
</html>