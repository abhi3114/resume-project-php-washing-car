<html>
<head><title>My Records</title>
<style>
	th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: 	#DC143C;
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
<?php include "profile.php" ?>
<form>
<table id="table">
<tr>
<th>Owner Name</th>
<th>Email</th>
<th>Vehicle Type</th>
<th>Vehicle Name</th>
<th>Vehicle Number</th>
<th>Mobile number</th>
<th>Day</th>
<th>Date</th>
<th>Washing Timing</th>
<th>Payment</th>
</tr>
<?php
	$con=mysqli_connect("localhost","root","");				
		mysqli_select_db($con,"washingcar");
			
		
 
			
			$query="select * from twowheeler where name='$fname' && email='$femail'";
				$result=mysqli_query($con,$query);
				while($row=$result->fetch_assoc())
				{
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['vtype']."</td>";
					echo "<td>".$row['vname']."</td>";
					echo "<td>".$row['vnumber']."</td>";
					echo "<td>".$row['mobile']."</td>";
					echo "<td>".$row['day']."</td>";
					echo "<td>".$row['date']."</td>";
					echo "<td>".$row['timing']."</td>";					
					echo "<td>".$row['payment']."</td>";					
					echo "</tr>";
				}
			
			
				
?>

</table>
</form>
</body>
</html>