<html>
<head>
<style>
.tdstyle{
    width: 325px;
    height: 23px;
}
.main{
    margin-left: 320px;
    width: 50%;
    height: 50%;
    background-color: rgb(255, 255, 255);
    box-shadow: 20px 20px 66px #888888;
    
}
style="padding-top: 50px;
</style>
</head>
<body>
<br><br>
<br><br><br>
<div class="main" >
<br>
<center><h1>Login</h1><br></center>
<form method="post" >
<center>
Enter Email:&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" class="tdstyle"><br><br>
Enter Password:<input type="password" name="password" class="tdstyle"><br><br>
<input type="submit" name="submit">
</center>

</form>
</div>

</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
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
			
		$query="select * from registration where email='$email' && password='$password'";
				$result=mysqli_query($con,$query);												
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$active = $row['active'];
      
				$count = mysqli_num_rows($result);
      				
		
				if($count == 1) 
				{
						session_start();
						$_SESSION["email"] = $email;
						$_SESSION["firstname"] = $row['firstname'];
						
							header("location: booking.php");	
				}
				else
				{
					echo "<center>Please Enter correct username and password</center>";
				
				}
				
		mysqli_close($con);
				
				
				
				
				
				
				/*while($row=$result->fetch_assoc())
				{
					 if($row['email']==$email && $row['password']==$password)
					{
						session_start();
						$_SESSION["email"] = $email;
						$_SESSION["password"] = $password;
							header("location: profile.php");					
					}
					else
					{
						echo "<center>Please Enter correct username and password</center>";
						
						
					}
				}*/
}
?>