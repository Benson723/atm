<?php
include("Include/connection.php");
session_start();

if(isset($_POST['continue']))
{
	$cardno=$_SESSION['atmnum'];
	$amount=$_POST['amount'];
	$dep=0;
	$date = date('Y-m-d');
	
	
	// sql query to fetch all the data 
$query = "SELECT Deposit FROM account where `Cardno`='".$cardno."'";
$res= "SELECT SUM(Amount) from withdraw where `Cardno`='".$cardno."' and `Date`= '".$date."'";
$result=mysql_query($res);
$row = mysql_fetch_row($result);
$wd =$row[0];

 
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
$fdep=$dep-$amount;
$am1 = $wd + $amount ;
if ($fdep>=0 )
{
	if($am1<=40000)
	{
		
	$inq1="insert into withdraw (Wid,Date,Cardno,Amount) values (null,'$date',$cardno,$amount)";
	mysql_query($inq1);
	$inq="UPDATE account SET `Deposit`=".$fdep." WHERE `Cardno`='".$cardno."'";
	mysql_query($inq);
	
	header('location:transcmplt.php');
	
}
	  else
	  {
		  echo "<script> alert('Reached Todays Transaction Limit')</script>";
	  }
}
	  else
	  {
		  echo "<script> alert('No Balance Available')</script>";
	  
	  }}
 
 
//echo "ATM no is '".$cardno."'";

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
  
		
  <table width="231" border="1" align="center">
    <tr>
      <td width="69" style="color:#FFF">ATM NO</td>
      <td width="213"><label for="atmno"></label>
      <input type="text" name="atmno" id="atmno"  value="<?php echo $_SESSION['atmnum'];?>"  disabled="disabled"/></td>
    </tr>
    <tr>
      <td style="color:#FFF"> AMOUNT</td>
      <td><label for="amount"></label>
      <input type="text" name="amount" id="amount" required="required" / placeholder="Enter Amount"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="continue" id="continue" value="Continue" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
</form>
</body>
</html>