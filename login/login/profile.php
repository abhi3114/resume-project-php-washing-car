<?php
session_start();

if(empty($_SESSION['email']) || empty($_SESSION['firstname']) )
{
	header("location: login.php");
}
else
{

$fname= $_SESSION['firstname'];
$femail= $_SESSION['email'];
 


?>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}



</style>
</head>
<body>
<form method="post">
<ul>
 <li style="margin-left:0px;"><a href="">Welcome <?php echo $_SESSION['firstname']?></a></li>
  <li><a class="active" href="booking.php">Booking</a></li>
  <li><a href="myrecord.php">My Record</a></li>  
  <li style="margin-left:850px;"><input type="submit" name="logout" value="Logout" style="background-color: #333;color:white;padding: 14px 16px;border:none;text-align: center"></li>
  
</ul>


</form>
</body>
</html>
<?php
if(isset($_REQUEST['logout']))
{
	session_unset(); 
	session_destroy();
	echo "Logout successful";
	header("location: login.php");
}


}
?>