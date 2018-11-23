<?php

	ob_start();
	include("Include/connection.php");
	session_start();
	
	
	if(isset($_POST['continue']))
	{
	        $_SESSION['acntno']=$_POST['acntno'];
			$selQry="select Acntno from account where Acntno='".$_POST['acntno']."'";
        $rsLogin=mysql_query($selQry);
        $count=mysql_num_rows($rsLogin);
		
		
						
		 if($count>0)
         {
              session_start();
			  $row=mysql_fetch_array($rsLogin);
              /*$_SESSION['lgname']=$row['admin_username'];
			  $_SESSION['lgid']=$row['admin_id'];*/
              header('location:transfer.php');
         }
		
		else
	  {
		  //$str="Invalid Username Or Password";
           echo "<script> alert('Invvalid Account')</script>";
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
  <p>&nbsp;             </p>
   <table width="140" border="1" align="center">
    <tr>
      <td><label for="acntno"></label>
      <input type="text" name="acntno" id="acntno" placeholder="Enter Account Number"/></td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="continue" id="continue" value=  "Continue" /></td>
    </tr>
  </table> 
</form>
</body>
</html>