<?php

ob_start();
	include("Include/connection.php");
	
    session_start();
 
	if(isset($_POST['enter']))
	{
	
			$selQry="select * from account where Cardno='".$_POST['atmno']."' and Pin='".$_POST['pin']."'";
        $rsLogin=mysql_query($selQry);
        $count=mysql_num_rows($rsLogin);
		$_SESSION['atmnum']=$_POST['atmno'];
		
		
						
		 if($count>0)
         {
              session_start();
			  $row=mysql_fetch_array($rsLogin);
              /*$_SESSION['lgname']=$row['admin_username'];
			  $_SESSION['lgid']=$row['admin_id'];*/
              header('location:atm.php');
         }
		
		else
	  {
		  $str="Invalid Username Or Password";
                 echo "<script> alert('Invalid Username or password')</script>";
	  }
   }
 
      
?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body  background="atmlogin.png">
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="0"  align="center">
    <tr>
      <td style="color:#FFF">ATMNO</td>
      <td><label for="atmno"></label>
      <input type="text" name="atmno" id="atmno" /></td>
    </tr>
    <tr>
      <td style="color:#FFF">PIN</td>
      <td><label for="pin"></label>
      <input type="text" name="pin" id="pin" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enter" id="enter" value="Enter" /></td>
      
    </tr>
  </table>
</form>
</body>
</html>
