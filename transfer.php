<?php
ob_start();
include("Include/connection.php");
session_start();
	
if(isset($_POST['transfer']))
{
        $cardno=$_SESSION['atmnum'];
        $dcardno=$_SESSION['cardno'];
        $date = date('Y-m-d');
        $amount=$_POST['amount'];
		$fdep=0;
		$fdep1=0;
		$fdep2=0;

$query = "SELECT Deposit FROM account where `Cardno`='".$dcardno."'"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysql_query($query)) 
{ 
    //echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysql_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
      $dep =$query_executed['Deposit'].' '; 
	  	         
    } 
}
 
else
{ 
    echo "Error in execution"; 
} 
$query = "SELECT Deposit FROM account where `Cardno`='".$cardno."'"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysql_query($query)) 
{ 
    //echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysql_fetch_assoc ($is_query_run)) 
    { 
        // these four line is for four column 
      $dep1 =$query_executed['Deposit'].' '; 
	  	         
    } 
}
 
else
{ 
    echo "Error in execution"; 
} 
    $fdep2=$dep-$amount;
	$fdep=$dep+$amount;
	$fdep1=$dep1-$amount;
	if ($fdep2>=0)
	{
	$inq="UPDATE account SET `Deposit`=".$fdep." WHERE `Cardno`='".$dcardno."'";
	mysql_query($inq);
	$inq2="UPDATE account SET `Deposit`=".$fdep1." WHERE `Cardno`='".$cardno."'";
	mysql_query($inq2);
	
	
	$inq1="insert into moneytransfer (Tid,Date,Cardno,Dcardno,Amount) values (null,'$date',$cardno,$dcardno,$amount)";
	mysql_query($inq1);
	header('location:transfercmplt.php');
	

}

else
{
	 echo "<script> alert('No Balance Available')</script>";
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
  <table width="132" border="1" align="center">
    <tr>
      <td><label for="amount"></label>
      <input type="number" name="amount" id="amount"  placeholder="Enter Amount" required="required"/></td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="transfer" id="transfer" value="Transfer" /></td>
    </tr>
  </table>
</form>
</body>
</html>