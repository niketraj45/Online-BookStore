<html>
<?php
$con=mysqli_connect("localhost","root","niket123","online_book_store");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$email_id=' ';
$name='';
$phone_num='';
$password='';
$address='';
$city='';
if (isset($_POST['email_id']))
{
$email_id=$_POST['email_id'];
}

if (isset($_POST['name']))
{
$name=$_POST['name'];
}

if (isset($_POST['phone_num']))
{
$phone_num=$_POST['phone_num'];
}


if (isset($_POST['password']))
{
$password=$_POST['password'];
}

if (isset($_POST['address']))
{
$address=$_POST['address'];
}

if (isset($_POST['city']))
{
$city=$_POST['city'];
}



$sqll="select email_id from customer";
$retval=mysqli_query($con,$sqll);
$flag=1;

if($flag==1)
{
while($row=mysqli_fetch_array($retval,MYSQL_ASSOC))
{
	if($email_id==$row['email_id'])
	{
		header("Location:signup2.html");
	}

}

}

if($flag==1){	
$sql="INSERT INTO customer(email_id,name,phone_num,password,address,city )
	VALUES ('$email_id','$phone_num','$name','$password','$address','$city')";

	if (!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));

	}
}

 header("Location:aftersignin.html");


mysqli_close($con);
?>
</html>
 