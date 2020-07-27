<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include "profile.php" ?>
<div class="main">
	<br>
     <center><h2>Booking</h2></center>
<hr id="line"> 
<center>
<form>
 <table style="padding-top: 10px">
 <tr>
	<td>Name:</td>
</tr>
<tr>
	<td><input type="text" class="tdstyle" name="name" value="<?php echo $_SESSION['firstname']?>"  disabled></td>
</tr>
<tr>
	<td>Email:</td>
</tr>
<tr>
	<td><input type="text" name="email" class="tdstyle" value="<?php echo $_SESSION['email']?>" disabled></td>
</tr>
<tr>
	<td>Select Vehicle Type:</td>
</tr>
<tr>
	<td><select name="vtype" class="tdstyle" required>
					<option></option>
					<option>Two Wheeler</option>
					<option>Three Wheeler</option>
					<option>Four Wheeler</option>
					<option>Six Wheeler</option>
					</select></td>
</tr>
<tr>
	<td>Enter Vehicle Name:</td>
</tr>
<tr>
	<td><input type="text" name="vname" class="tdstyle" required></td>
</tr>
<tr>
	<td>Enter Vehicle Number:</td>
</tr>
<tr>
	<td><input type="text" name="vnumber" class="tdstyle" required></td>
</tr>
<tr>
	<td>Select Washing Type:</td>
</tr>				
<tr>
	<td><select name="wtype" class="tdstyle" required>
					<option></option>
					<option>Express 1</option>
					<option>Express 2</option>
					<option>Express 3</option>	
					</select></td>
</tr>
<tr>	
	<td>Enter mobile no.:</td>
</tr>
<tr>
	<td><input type="text" name="mobile" class="tdstyle" required></td>
</tr>
<tr>
	<td>Enter Aleternative mobile no.:</td>
</tr>
<tr>
	<td><input type="text" name="amobile" class="tdstyle"></td>
</tr>
<tr>
	<td>Select Day:</td>
</tr>
<tr>
	<td><select name="day" class="tdstyle" required>
					<option></option>
					<option>Monday</option>
					<option>Tuesday</option>
					<option>Wednesday</option>
					<option>Thursday</option>
					<option>Friday</option>
					<option>Saturday</option>
					<option>Sunday</option>
					</select></td>
</tr>
<tr>					
	<td>Enter Date.:</td>
</tr>
<tr>
	<td><input type="text" name="date" class="tdstyle" required></td>
</tr>
<tr>
	<td><input type="submit" name="submit" class="btn" value="Submit">	</td>
</tr>
</table>				
</form>
</center>
</div>
</body>
<?php
if(isset($_REQUEST['submit']))
{
		
		$vtype=$_REQUEST['vtype'];
		$vname=$_REQUEST['vname'];
		$vnumber=$_REQUEST['vnumber'];
		$wtype=$_REQUEST['wtype'];
		$mobile=$_REQUEST['mobile'];
		$amobile=$_REQUEST['amobile'];
		$day=$_REQUEST['day'];
		$date=$_REQUEST['date'];
		$payment="NOT DONE";
		$time="Not yet schedule";
		
		//echo $name.$vtype.$vname.$vnumber.$wtype.$mobile.$amobile.$day.$date;
		$con=mysqli_connect("localhost","root","");
				if($con->connect_error)
				{
					die("connection failed".$con->connect_error);
				}
				else
				{
					//echo "<center>Connection successful<center>";
				}
		if(mysqli_select_db($con,"washingcar"))
			{
				//echo "<br>Database Connection successful <br>";
			}
		else
			{
			echo "Database Connection failed";
				
			}
			
			$query="select count(date)As num from twowheeler where date='$date' and vtype='$vtype' ";
			$result=mysqli_query($con,$query);
			$row=mysqli_fetch_assoc($result);
			$num=$row['num'];
			//echo $num;
				if($num<25)
				{
							$query="select count(date)As num from twowheeler where date='$date' and vnumber='$vnumber' and vtype='$vtype' and name='$fname' ";
							$result=mysqli_query($con,$query);
							$row=mysqli_fetch_assoc($result);
							$num=$row['num'];
							//echo $num;
							if($num>0)
							{
								echo '<script language="javascript">alert("Your Booking had already been done")</script>';
							}
							else
							{
								$query="insert into twowheeler values('$fname','$femail','$vtype','$vname','$vnumber','$wtype','$mobile','$amobile','$day','$date','$payment','$time')";				
								$result=mysqli_query($con,$query);
								if($result==true)
									{
										echo '<script language="javascript">alert("Your Booking has been Done")</script>';
									}
								else
									{
										echo "insert query Connection failed ";
									}
							}
				}
				else
				{
					echo '<script language="javascript">alert("Sorry booking is full.Please Select another day")</script>';
				}
				
				
				
				
			mysqli_close($con);
				
				
			
}

?>

</html>