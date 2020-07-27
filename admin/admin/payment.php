<html>
<head>
<title>Timig Schedule</title>
<style>
.tdstyle{
    width: 325px;
    height: 23px;
}
</style>
</head>

<body>
<?php include "aprofile.php" ?>
<form>
<center>
<h3>Enter Detail For Payment of vechile</h3>
Enter Owner First-Name:<br><input type="text" name="name" class="tdstyle" ><br><br>
Select Vehicle Type:<br><select name="vtype" class="tdstyle" required>
					<option></option>
					<option>Two Wheeler</option>
					<option>Three Wheeler</option>
					<option>Four Wheeler</option>
					<option>Six Wheeler</option>
					</select><br><br>
Enter Vehicle Number:<br><input type="text" name="vnumber" class="tdstyle" required><br><br>					
Enter Date.:<br><input type="text" name="date" class="tdstyle" required><br><br>
Select Payment Done Method:<br><select name="payment" class="tdstyle" required>
					<option></option>
					<option>Payment Done through Cash</option>
					<option>Payment Done through Card</option>
					</select><br><br>	
<input type="submit" name="submit"><br><br>
</center>
<?php
if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['name'];
	$vtype=$_REQUEST['vtype'];
	$vnumber=$_REQUEST['vnumber'];
	$date=$_REQUEST['date'];
	$payment=$_REQUEST['payment'];
	$con=mysqli_connect("localhost","root","");
				if($con->connect_error)
				{
					//die("connection failed".$con->connect_error);
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
				//echo "Database Connection failed";
				
			}
			
				
							$query="UPDATE twowheeler SET payment='$payment' WHERE name='$name' and vtype='$vtype' and vnumber='$vnumber' and date='$date' ";										
						    if(mysqli_query($con,$query))			
								{
									echo '<script language="javascript">alert("Payment Done.")</script>';
									
								}
							else
								{
									echo '<script language="javascript">alert("Payment Not Done.")</script>';
									echo mysqli_error($con);
								}
					
				
				
				
				
			mysqli_close($con);
				
				
			
}

?>

</table>
</form>

</body>
</html>