<?php
$con=mysqli_connect("localhost","root","niket123","online_book_store");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$count=0;

$sql = "select * from book;

$retval=mysqli_query($con,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
?>


<?php

echo "<html>";
echo "<body>";
echo "<table border='1'>";
<tr>

<th>image</th>

<th>email</th>

<th>first name</th>

<th>last name</th>

</tr>";
while($row = mysqli_fetch_array($retval,MYSQL_ASSOC)) {
    ?>
    <?php
 echo "<tr>";
  
echo "<td>" ."<center>". $row['book_id']."</center>" . "</td>";

echo "<td>" . $row['title'] . "</td>";

echo "<td>" . $row['price'] . "</td>";

echo "</tr>";
  }

echo "</table>";
echo "</body>";
echo "</html>";
 
?>

if($count==0)
{
	echo "SORRY! NO BOOKS FOUND";
}
else
{
echo '<a href="invite.php">WANT TO invite?</a>';
}
mysqli_close($con);

 