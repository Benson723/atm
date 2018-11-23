<?php

	ob_start();
	include("Include/connection.php");
	
	if(isset($_POST['login']))
	{
	
			$selQry="select * from login where uname='".$_POST['uname']."' and password='".$_POST['password']."'";
        $rsLogin=mysql_query($selQry);
        $count=mysql_num_rows($rsLogin);
		
		
						
		 if($count>0)
         {
              session_start();
			  $row=mysql_fetch_array($rsLogin);
              /*$_SESSION['lgname']=$row['admin_username'];
			  $_SESSION['lgid']=$row['admin_id'];*/
              header('location:bankmain.php');
         }
		
		else
	  {
		  $str="Invalid Username Or Password";
                 // echo "<script> alert('Invalid Username or password')</script>";
	  }
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
  <table width="200" border="1" align="center">
    <tr>
      <td>Uname</td>
      <td><label for="uname2"></label>
      <input type="text" name="uname" id="uname" /></td>
          </tr>
    <tr>
      <td>Password</td>
      <td><label for="password"></label>
      <input type="text" name="password" id="password" /></td>
     
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="login" id="login" value="Login" /></td>
      
      
    </tr>
  </table>
</form>
</body>
</html>