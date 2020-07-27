<html>
<head><title> two wheeler Records</title>
<style>
.label{
 width: 325px;
    height: 23px;
	}
#table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,th {
    border: 1px solid #ddd;
    padding: 8px;
}

 tr:nth-child(even){
	 background-color: #f2f2f2;
	 }

 tr:hover {background-color: #ddd;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #DC143C;
    color: white;
}	
   
	

</style>
</head>
<body>
<?php include "aprofile.php" ?>
<form>
Select Vehicle Type:&nbsp;<select name="vtype" class="label" required>
					<option></option>
					<option>Two Wheeler</option>
					<option>Three Wheeler</option>
					<option>Four Wheeler</option>
					<option>Six Wheeler</option>
					</select>&nbsp;&nbsp;&nbsp;
Enter Date.:<input type="text" name="date" class="label" required>&nbsp;&nbsp;	
<input type="submit" name="submit">	<br><br>				

<?php
if(isset($_REQUEST['submit']))
{
	$vtype=$_REQUEST['vtype'];
	$date=$_REQUEST['date'];
	echo "<table id='table'>
	<tr>
	<th>Owner Name</th>
	<th>Email-ID</th>
	<th>Vehicle Type</th>
	<th>Vehicle Name</th>
	<th>Vehicle Number</th>
	<th>Mobile number</th>
	<th>Day</th>
	<th>Date</th>
	<th>Appointment Timing</th>
	<th>Payment</th>
	</tr>";
	$con=mysqli_connect("localhost","root","");				
		mysqli_select_db($con,"washingcar");
			
			
			
			$query="select * from twowheeler where vtype='$vtype' and date='$date' ";
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
			
			
}				
?>

</table>
</form>
</body>
</html>