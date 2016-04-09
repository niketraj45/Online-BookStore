<?php include 'signin.php';
$con=mysqli_connect("localhost","root","niket123","online_book_store");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$basket_id='';
$cust_id='';
$quantity='';
$total='';

if (isset($_POST['email_id']))
{
$cust_id=$_POST['email_id'];
}



if (isset($_POST['basket_id']))
{
$basket_id=$_POST['basket_id'];
}


if (isset($_POST['quantity']))
{
$quantity=$_POST['quantity'];
}


$sqll="select basket_id from payment";
$retval=mysqli_query($con,$sqll);

$cost='';
if($basket_id=='BB001'){$cost=500;}
if($basket_id=='BB002'){$cost=600;}
if($basket_id=='BB003'){$cost=400;}
if($basket_id=='BB004'){$cost=450;}
if($basket_id=='BB005'){$cost=550;}
if($basket_id=='BB006'){$cost=230;}
if($basket_id=='BB007'){$cost=380;}
if($basket_id=='BB008'){$cost=520;}
if($basket_id=='BB009'){$cost=120;}
if($basket_id=='BB010'){$cost=350;}
if($basket_id=='BB011'){$cost=525;}
if($basket_id=='BB012'){$cost=350;}
if($basket_id=='BB013'){$cost=630;}
if($basket_id=='BB014'){$cost=480;}
if($basket_id=='BB015'){$cost=458;}
if($basket_id=='BB016'){$cost=399;}
if($basket_id=='BB017'){$cost=599;}
if($basket_id=='BB018'){$cost=389;}
if($basket_id=='BB019'){$cost=299;}
if($basket_id=='BB020'){$cost=849;}
if($basket_id=='BB021'){$cost=399;}
if($basket_id=='BB022'){$cost=499;}
if($basket_id=='BB023'){$cost=199;}

$total=$cost * $quantity;


$flag=1;

if($flag==1)
{


while($row=mysqli_fetch_array($retval,MYSQL_ASSOC))
{
	if($basket_id==$row['basket_id'])
	{
		header("Location:alreadyadded.html");
	}

}
}




if($flag==1){
$sql="INSERT INTO payment(basket_id,cust_id,cost,quantity,total )
VALUES ('$basket_id','$cust_id','$cost','$quantity','$total')";

	if (!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));
}
}

header("Location:list2.php");


mysqli_close($con);
?>