<?php
$con=mysqli_connect("localhost","root","niket123","online_book_store");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="DELETE FROM `online_book_store`.`payment` WHERE `payment`.`basket_id` like 'BB%' or basket_id= '' ";

	if (!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));
}

header("Location:signin.html");

mysqli_close($con);
?>

