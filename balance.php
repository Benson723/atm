<?php
include("Include/connection.php");
session_start();
if(isset($_POST['atmmenu']))
{
	header('location:atm.php');
}

$cardno=$_SESSION['atmnum'];

// sql query to fetch all the data 
$query = "SELECT Deposit FROM account where `Cardno`='".$cardno."'"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysql_query($query)) 
{ 
    //echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysql_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
      $dep =$query_executed['Deposit'].' '; 
	  $_SESSION['balance']=$dep;
	  	         
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
//session_destroy();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="acnmng1.png">
<form id="form1" name="form1" method="post" action="">
  <table width="110" border="0" align="right">
    <tr>
      <td><input type="submit" name="atmmenu" id="atmmenu" value="ATM MENU" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p align="right">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1>  <p align="center" style="color:#FFF"> Balance Available </p>
</h1>
<table width="118" border="1" align="center">
  <tr>
    <td width="47">
    <input type="text" name="balance" id="balance" value="<?php echo $_SESSION['balance'];?>" disabled="disabled"/></td>
  </tr>
</table>
<h1>
  <p align="center" style="color:#FFF">&nbsp;</p>
</h1>

</body>

</body>
</html>