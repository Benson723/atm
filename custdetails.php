


<body background="acnmng1.png">
<form >
    <h1 style="color:#FFF">Customer Details </h1>
	<table border="1" align="left" cellpadding="5" cellspacing="0">
	<tr>
        
		<th style="color:#FFF">Acntno</th>
		<th style="color:#FFF">Name</th>
        <th style="color:#FFF">Gender</th>
        <th style="color:#FFF">Housename</th>
        <th style="color:#FFF">Street</th>
		<th style="color:#FFF">District</th>
        <th style="color:#FFF">Phone</th>
        <th style="color:#FFF">Acnttype</th>
        <th style="color:#FFF">Deposit</th>
        <th style="color:#FFF">Cardno</th>
        
		
    
	</tr>
    </body>
    
    <?php
	
	 include("Include/connection.php");
	$sel=mysql_query("select * from account",$con);
		  
    while($row=mysql_fetch_array($sel))
	{
		
	 ?>	
     <tr>
     <td style="color:#FFF"><?php echo $row['Acntno'];?></td>
     <td style="color:#FFF"><?php echo $row['Name'];?></td>
     <td style="color:#FFF"><?php echo $row['Gender'];?></td>
     <td style="color:#FFF"><?php echo $row['Housename'];?></td>
     <td style="color:#FFF"><?php echo $row['Street'];?></td>
     <td style="color:#FFF"><?php echo $row['District'];?></td>
     <td style="color:#FFF"><?php echo $row['Phone'];?></td>
     <td style="color:#FFF"><?php echo $row['Acnttype'];?></td>
     <td style="color:#FFF"><?php echo $row['Deposit'];?></td>
     <td style="color:#FFF"><?php echo $row['Cardno'];?></td>
     <td><a href="custdetailsedit.php?edit=1&amp;editid=<?php echo $row['Acntno'];?>">Edit</a></td>
    </tr>
	<?php
		}
		
	?>
    
	</table>
    <?php
	$id=$_REQUEST['delid'];
	 if($_GET['del'])
      {
 		$delQry="delete from account  where Acntno ='".$id."'";
 		mysql_query($delQry,$con);
		echo "<b>Values Deleted successfully!";
		echo "<meta http-equiv=Refresh content=6;url=custdetails.php>"; 
		

      }
	?>
    
</form>			
