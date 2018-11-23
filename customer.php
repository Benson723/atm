
<?php
include("Include/connection.php");
include("Include/validatephone.php");
if(isset($_POST['register']))
{
	$accntno=$_POST['accntno'];
	$name=$_POST['name'];
	$gender=$_POST['rad'];
	$hname=$_POST['hname'];
	$street=$_POST['street'];
	$district=$_POST['district'];
	$phone=$_POST['phone'];
	$acnttype=$_POST['rad1'];
	$deposit=$_POST['deposit'];
	$cardno=$_POST['cardno'];
	$pin=$_POST['pin'];
	$sel="select * from account where `Acntno`='".$accntno."'";
	$rs=mysql_query($sel);
    $count=mysql_num_rows($rs);
	
	if($count > 0)
	{
		echo "<script> alert('Account already exists')</script>";
		
	}else
	{
		
	$inq="insert into account (Acntno,Name,Gender,Housename,Street,District,Phone,Acnttype,Deposit,Cardno,Pin) values ('$accntno','$name','$gender','$hname','$street','$district',$phone,'$acnttype',$deposit,'$cardno',$pin)";
	mysql_query($inq);
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
  <p>
    <label for="title" ></label>
  </p>
  <p><h1 style="color:#FFF" align="center"></p>
  </h1>
  <h1 style="color:#FFF" align="center">Account Creation Form</h1>
  <p>&nbsp;</p>
  <table width="461" height="354" border="0" align="center">
    <tr>
      <td width="109">ACCOUNT NUMBER</td>
      <td width="149"><label for="accntno"></label>
      <input type="number" name="accntno" id="accntno"  required="required"/></td>
    </tr>
    <tr>
      <td>NAME</td>
      <td><label for="name"></label>
      <input type="text" name="name" id="name"  required="required"/></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><label for="gender"></label>
        <input type="radio" name="rad" value="male"  id="gender" onblur="return validategender(this.value)"/>
      <label for="male"  > Male 
        <input type="radio" name="rad"  value="female" id="gender1" onblur="return validategender(this.value)"/> 
        Female
       </label>
         <div id="gen"></div>
         </td>
     
    </tr>
    <tr>
      <td>HOUSE NAME</td>
      <td><label for="hname"></label>
      <input type="text" name="hname" id="hname"  required="required"/></td>
    </tr>
    <tr>
      <td>STREET</td>
      <td><label for="street"></label>
      <input type="text" name="street" id="street"  required="required"/></td>
    </tr>
    <tr>
      <td>DISTRICT</td>
      <td><label for="district"></label>
      <input type="text" name="district" id="district"  required="required"/></td>
    </tr>
    <tr>
      <td>PHONE</td>
      <td><label for="phone"></label>
      <input type="number" name="phone" id="phone"  required="required" onblur="return phno(this.value)"/></td>
      <div id="cn"></div></td>
    </tr>
    <tr>
      <td width="109">ACCOUNT TYPE</td>
      <td width="149"><label for="accntno"></label>
        <input type="radio" name="rad1" id="saving" value="saving" />Saving
      <label for="saving">
        <input type="radio" name="rad1" id="current" value="current" />Current
      </label></td>
    </tr>
    <tr>
      <td width="109">DEPOSIT</td>
      <td width="149"><label for="deposit"></label>
      <input type="number" name="deposit" id="deposit"  required="required"/></td>
    </tr>
    
    <tr>
      <td>ATM CARD NO</td>
      <td><label for="cardno"></label>
      <input type="number" name="cardno" id="cardno"  required="required"/></td>
    </tr>
    <tr>
      <td>PIN</td>
      <td><label for="pin"></label>
      <input type="" name="pin" id="pin" required="required" /></td>
    </tr>
  </table>
  <table width="133" border="0" align="center" >
    <tr>
      <td><table width="182" height="34" border="0" >
        <tr>
          <td>&nbsp;</td>
          <td>  <input type="submit" name="register" id="register" value="Register"  /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<script>
function validategender(frm)
	{
		g1=document.getElementById('gender').checked;
		g2=document.getElementById('gender1').checked;
		if(g1==g2)
		{
			document.getElementById('gen').innerHTML="*Select A Gender";
			return false;
		}
		
	}

	
function phno(inpu)
{
	var ph=/^\d{10}$/;
	var a=inpu.match(ph);
	
	if(a==null)
	{
		document.getElementById('cn').innerHTML="*Enter a 10 Digit Number";
		//alert("Enter a 10 Digit Number");
		document.getElementById('phone').value="";
		//document.getElementById('txtemail').focus();
		
	}
	
	return false;
}
</script>
</body>
</html>