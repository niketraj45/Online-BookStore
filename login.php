<html>
<?php
session_start();
$_SESSION['email_id']=$_POST['email_id'];
?>

<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='niket123';
$con=mysqli_connect($dbhost,$dbuser,$dbpass,"online_book_store");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$row=mysqli_fetch_array($res);


if (! empty($_POST) && $_POST['email_id'] == $row['email_id'] && $_POST['password'] == $row['password'])
{
    $_SESSION['logged_in'] = true;
    header('Location: aftersignin.php');
}
else
{
    

     header('Location: wrngpwd.html');
}
mysqli_close($con);
   ?>

</html>