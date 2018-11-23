<?php

	ob_start();
	include("Include/connection.php");
	session_start(); 
	$SelQuery="select * from account where `Cardno`='".$_SESSION['atmnum']."'";
		    $sel=mysql_query($SelQuery);
			$rowEdit=mysql_fetch_array($sel)or die(mysql_error());
			$new=$_POST["newpin"];
			$new1=$_POST["repin"];
if(isset($_POST['changepass']))
	   {
		   if($rowEdit['Pin']==$_POST['currentpin'])
		   {
			   if($new==$new1)
			   {
			$insQry= "update account set Pin = '".$_POST['repin']."' where `Cardno`='".$_SESSION['atmnum']."'";
	       mysql_query($insQry,$con) or die(mysql_error());
 		    //$str1="Password Changed Successfully";
			echo "Pin changed Succesfully";
			   }
			   else
			   {
				   //$hide="";
				   //$str="Password Doesnt Match";
				   echo "<script> alert('PIN doestnot match')</script>";
		
			   }
		   }
		   else
		   {
			
			   //$str="Check Your Current Password";
			   echo "<script> alert('Wrong current PIN')</script>";
		
		   }
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
  <table width="314" border="1" align="center">
    <tr>
      <td width="138" style="color:#FFF">Current PIN</td>
      <td width="160"><label for="currentpin"></label>
      <input type="number" name="currentpin" id="currentpin" required="required" /></td>
    </tr>
    <tr>
      <td height="27" style="color:#FFF">New PIN</td>
      <td><label for="newpin"></label>
      <input type="number" name="newpin" id="newpin" required="required" /></td>
    </tr>
    <tr>
      <td style="color:#FFF">Re Enter New PIN</td>
      <td><label for="repin"></label>
      <input type="number" name="repin" id="repin" required="required" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><input type="submit" name="changepass" id="changepass" value="Change Password" /></td>
    </tr>
  </table>
</form>
</body>
</html>