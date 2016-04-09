<?php 
$con=mysqli_connect("localhost","root","niket123","online_book_store");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




$name='';
$mob='';
$mode_sel='';
$address='';
$city='';
$pin='';
$status='';
if (isset($_POST['name']))
{
$name=$_POST['name'];
}

if (isset($_POST['mobile']))
{
$mob=$_POST['mobile'];
}



if (isset($_POST['address']))
{
$address=$_POST['address'];
}

if (isset($_POST['town']))
{
$town=$_POST['town'];
}

if (isset($_POST['pin']))
{
$pin=$_POST['pin'];
}



if (isset($_POST['Range']))
{
$mode_sel=$_POST['Range'];
}


$c=0;
if($mode_sel == 1)
{
$status=0;

}
 if($mode_sel == 2)
{
$status=1;
}
if ($mode_sel == 3)
{
$status=1;
}


$sql="select mobile from basket";
$retval=mysqli_query($con,$sql);
$flag=1;

if($flag==1)
{
while($row=mysqli_fetch_array($retval,MYSQL_ASSOC))
{
	if($mob==$row['mobile'])
	{
		echo "Mob Number Exists";
	}

}

}

if($flag==1){	
$sql="INSERT INTO basket(name,mobile,address,town,pin,payment_mode,status )
	VALUES ('$name','$mob','$address','$town','$pin','$mode_sel',$status)";

	if (!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));

	}


}


$c=0;
if($mode_sel == 1)
{
header("Location:ty.html");

}
if($mode_sel == 2)
{
header("Location:card.html");
}
 if($mode_sel ==3)
{
header("Location:nb.html");
}


 


mysqli_close($con);
?>

