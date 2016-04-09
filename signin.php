<?php
$con=mysqli_connect("localhost","root","niket123","online_book_store");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
if (isset($_POST['email_id']))
{
$Uname=$_POST['email_id'];
}

if (isset($_POST['password']))
{
$password=$_POST['password'];
}

$sql="select password from customer where email_id='$Uname'";
$res=mysqli_query($con, $sql);
if(!$res)
  {
  die('Error:' . mysql_error()); 
  }


$row=mysqli_fetch_array($res);

if ($row['password'] == $password && $password != '' && $Uname != '')
{

header("Location:aftersignin.html");
}
else
{
header("Location:wrngpwd.html");

}

mysqli_close($con);
?> 
