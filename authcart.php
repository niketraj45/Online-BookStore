<html>
<title> Authors </title>
<body>

<style>
body{
background-color:pink;
}


div
{
border:1px solid blue;
background:orange;
height:250px;
width:300px;
border-radius:10px;

}

h1{
text-align:center;
color:orange;
font-size:40px;
font-family:Britannic;
width:30%;
background-color:blue;
}


imgc{
position:absolute;
        top:10;
right:70;
}

imgl{
position:absolute;
        top:10;
right:10;
}


nav {
color:red;
margin-right:0px;
width:30%;
float:right;
}
nav ul{
list-style-type:none;
}

nav li{
float:left;
margin-right:10px;
}

footer {
color:yellow;
background-color:black;
height:70px;
position:absolute;

right:0;
left:0;

       
width: 1335px;



</style>

<center><h1>Search Results....</h1>
</center>

<imgc> 
<img src="images/sc.png" width="40px" height="40px" />
<a href="payment.php"><br>My Cart</a>
</imgc>


<imgl> 
<img src="images/n.png" width="40px" height="40px" />
<a href="clearcartlogout.php"><br>Log out</a>
</imgl>


<?php
$con=mysqli_connect("localhost","root","niket123","online_book_store");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$email='' ;
if (isset($_POST['name']))
{
$email=mysqli_real_escape_string($con,$_POST['name']);
}

$count=0;
$sql = "SELECT * from book,author where name like '$email%' and book.auth_id =author.auth_id "; 
$retval=mysqli_query($con,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
echo "
<center><table border='3' style='border-color: green; cellspacing='13' cellpadding='13'>
<tr>
<th border='2'>Author</th>
<th border='2'>Book_id</th>
<th border='2'>Title</th>
<th border='2'>Year</th>
<th border='2'>Price (&#8377;)</th>
<th border='2'>select</th>
<th border='2'>Quantity</th>
<th border='2'>Buy it</th>
</tr>";

while($row = mysqli_fetch_array($retval,MYSQL_ASSOC))
{
	$count=1;

echo "<tr border='2'>";
 echo "<td border='2'>" ."<center>". $row['name']."</center>" . "</td>";

echo "<td border='2'>" ."<center>". $row['book_id']."</center>" . "</td>";

echo "<td border='2'>" ."<center>". $row['title']."</center>" . "</td>";

echo "<td border='2'>" ."<center>". $row['year']."</center>" . "</td>";

echo "<td border='2'>" ."<center>". $row['price']."/-</center>" . "</td>";


echo "<td border='2'><form action='cart.php' method='post'><input type='radio'  name='basket_id' value=". $row['book_id']." </td>";
echo "<td border='2'><center><select name='quantity'>
<option value='	1	'>	1</option>
<option value='	2	'>	2</option>
<option value='	3	'>	3</option>
<option value='	4	'>	4</option>
<option value='	5	'>	5</option>
<option value='	6	'>	6</option>
<option value='	7	'>	7</option>
<option value='	8	'>	8</option>
<option value='	9	'>	9</option>
</select> </td>";
echo "<td border='2'><center><input type='submit' value='Add To Cart'></center> </td>";




echo "</tr border='2'>";
}
echo "</table>
</center>";
 

 
if($count==0)
{
	echo "<br><br><center>SORRY! NO Authers found...</center>";
	echo '<br><br><center><a href="author.php"> Go Back</a></center>';
}

mysqli_close($con);
?>
 
