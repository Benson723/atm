<body background="acnmng1.png">
<form >
    <h1 style="color:#FFF">Money Transfer Statement </h1>
	<table border="1" align="left" cellpadding="5" cellspacing="0">
	<tr>
        
		<th style="color:#FFF">Tid</th>
		<th style="color:#FFF">Date</th>
        <th style="color:#FFF">Cardno</th>
        <th style="color:#FFF">Dcardno</th>
        <th style="color:#FFF">Amount</th>
        
		
    
	</tr>
    </body>
    
    <?php
	
	 include("Include/connection.php");
	 session_start();
	 $cardno=$_SESSION['atmnum'];
	 $sel=mysql_query("select * from moneytransfer where`Cardno`='".$cardno."'",$con);
	 $count=mysql_num_rows($sel);
	 
	 
	 if($count>0)
	 {
		  
    while($row=mysql_fetch_array($sel))
	{
		
	 ?>	
     <tr>
     <td style="color:#FFF"><?php echo $row['Tid'];?></td>
     <td style="color:#FFF"><?php echo $row['Date'];?></td>
     <td style="color:#FFF"><?php echo $row['Cardno'];?></td>
     <td style="color:#FFF"><?php echo $row['Dcardno'];?></td>
     <td style="color:#FFF"><?php echo $row['Amount'];?></td>

    </tr>
	<?php
	}
	}
	else
	{
		echo "<script> alert('No Records Found')</script>";
	}
		
		
	?>
    
	</table>
    
    
</form>			
