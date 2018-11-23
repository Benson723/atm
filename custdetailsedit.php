<?php
include("Include/connection.php");

$id=$_REQUEST['editid'];
	 if($_GET['edit'])
      {
 		   $selQry="select * from account where Acntno='".$id."'";
 		   $sel=mysql_query($selQry,$con)or die(mysql_error());
  	       $row=mysql_fetch_array($sel)or die(mysql_error());

      }
	  
if(isset($_POST['save']))
	{
  	  $name=$_POST['name'];
	  $housename=$_POST['housename'];
	  $street=$_POST['street'];
	  $district=$_POST['district'];
	  $phone=$_POST['phone'];
	  $cardno=$_POST['cardno'];

		        $upQry= "update account set Name='".$name."',Housename='".$housename."',Street='". $street."',District='".$district."',Phone='". $phone."',Cardno='". $cardno."'where Acntno='".$id."'";
		        mysql_query($upQry,$con) or die(mysql_error());
 		        echo "<b>Values updated successfully!";
			    header("location:custdetails.php");
		
	
	}
	
	if(isset($_POST['cancel']))
	{
		header("location:custdetails.php");
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
  <table width="281" border="1" align="center">
    <tr>
      <td width="130" style="color:#FFF">Name</td>
      <td width="135"><label for="name"></label>
      <input type="text" name="name" id="name"  value="<?php echo $row['Name'];?>"/></td>
    </tr>
    <tr>
      <td style="color:#FFF">Housename</td>
      <td><label for="housename"></label>
      <input type="text" name="housename" id="housename" value="<?php echo $row['Housename'];?>" /></td>
    </tr>
    <tr>
      <td style="color:#FFF">Street</td>
      <td><label for="street"></label>
      <input type="text" name="street" id="street" value="<?php echo $row['Street'];?>"/></td>
    </tr>
    <tr>
      <td style="color:#FFF">District</td>
      <td><label for="district"></label>
      <input type="text" name="district" id="district"  value="<?php echo $row['District'];?>"/></td>
    </tr>
    <tr>
      <td style="color:#FFF">Phone</td>
      <td><label for="phone"></label>
      <input type="text" name="phone" id="phone" value="<?php echo $row['Phone'];?>" /></td>
    </tr>
    
    <tr>
      <td style="color:#FFF">Cardno</td>
      <td><label for="cardno"></label>
      <input type="text" name="cardno" id="cardno"  value="<?php echo $row['Cardno'];?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><input type="submit" name="save" id="save" value="Save" />        <input type="submit" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>