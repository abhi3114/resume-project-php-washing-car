<html>
<head>
	<title>Registration</title>
</head>
<body>
<center>
<table>
<form  method="post">
		<tr>
			<td>Enter First-Name:</td>
			<td><input type="text" name="fname" required></td>
			<td>Enter Middle-Name:</td>
			<td><input type="text" name="mname" required></td>
			<td>Enter Last-Name:</td>
			<td><input type="text" name="lname"></td>
		</tr>
		<tr>
			<td>Select sex:</td>
			<td><input type="radio"name="gender" value="male" required>MALE<input type="radio" name="gender" value="female" selected>FEMALE</td>
			<td>Enter D.O.B:</th>
			<td><input type="text" name="dob" required></td>
			<td>Enter Mobile-no.:</td>
			<td><input type="text" name="mobile" required></td>
		</tr>
		<tr>
			<td>Enter Email:</td>
			<td><input type="text" name="email" required></td>
			<td>Enter password:</td>
			<td><input type="text" name="password" required></td>
			<td>Re-Enter password:</td>
			<td><input type="text" name="cpassword" required></td>
		</tr>
		<tr>
		<td><input type="submit" name="submit" value="Register"></td>
		<td><input type="reset" name="reset" value="Clear"></td>
		</tr>
</form>
</table>
</center>
</body>
<?php
if(isset($_REQUEST['submit']))
{
		$fname=$_REQUEST['fname'];
		$mname=$_REQUEST['mname'];
		$lname=$_REQUEST['lname'];
		$gender=$_REQUEST['gender'];
		$dob=$_REQUEST['dob'];
		$mobile=$_REQUEST['mobile'];
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$cpassword=$_REQUEST['cpassword'];
		
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
			
				$query="select * from registration";
				$result=mysqli_query($con,$query);
				while($row=$result->fetch_assoc())
				{
					 if($row['email']==$email)
					{
						echo '<script language="javascript">alert("You had been already Register.")</script>';
					}
					else
					{
							$query="insert into registration values(DEFAULT,'$fname','$mname','$lname','$gender','$dob','$mobile','$email','$password','$cpassword')";				
							$set=mysqli_query($con,$query);
							if($set==true)
								{
									echo '<script language="javascript">alert("You had been succesfully Register.")</script>';
								}
							else
								{
									//echo "insert query Connection failed ";
								}
					}
				}
				
				
				
			mysqli_close($con);
				
				
			
}

?>
</html>