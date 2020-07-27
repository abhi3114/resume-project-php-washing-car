<html>
<head><title>Records</title>
<style>
	th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: 	#9ACD32;
    color: white;
}
tr:nth-child(even)
{
	background-color: #f2f2f2;
}
tr:hover 
{
	background-color: #ddd;
}
td,th {
    border: 1px solid #ddd;
    padding: 8px;
}
#table{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
</style>
</head>
<body>
<?php include "aprofile.php" ?>
<form>
<table id="table">
<tr>
<th>userid</th>
<th>First-Name</th>
<th>Middle-Name</th>
<th>Last-Name</th>
<th>Gender</th>
<th>D.O.B</th>
<th>Mobile</th>
<th>Email</th>
<th>Password</th>
<th>Confirm Password</th>
</tr>
<?php
	$con=mysqli_connect("localhost","root","");				
		mysqli_select_db($con,"washingcar");
			
			
			
			$query="select * from registration";
				$result=mysqli_query($con,$query);
				while($row=$result->fetch_assoc())
				{
					echo "<tr>";
					echo "<td>".$row['userid']."</td>";
					echo "<td>".$row['firstname']."</td>";
					echo "<td>".$row['middlename']."</td>";
					echo "<td>".$row['lastname']."</td>";
					echo "<td>".$row['gender']."</td>";			
					echo "<td>".$row['dob']."</td>";					
					echo "<td>".$row['mobile']."</td>";	
				    echo "<td>".$row['email']."</td>";		
					echo "<td>".$row['password']."</td>";
					echo "<td>".$row['cpassword']."</td>";	
					echo "</tr>";
				}
			
			
				
?>

</table>
</form>
</body>
</html>