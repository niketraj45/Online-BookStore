<html>
<title> Serched books </title>
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


       
width: 100%;

</style>

<center><h1>Selected Book...</h1></center><br>

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

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



$count=0;
$sql = "SELECT * from book,author where book.auth_id =author.auth_id and book_id = 'BB007' "; 
$retval=mysqli_query($con,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval,MYSQL_ASSOC))
{
	$count=1;
echo "<center><table border='3' style='border-color: green; cellspacing='13' cellpadding='13'>
<tr>
<th border='2'>select</th>
<th border='2'>Book_id</th>
<th border='2'>Title</th>
<th border='2'>Year</th>
<th border='2'>Price (&#8377;)</th>
<th border='2'>Author</th>
<th border='2'>Quantity</th>
<th border='2'>Buy it</th>


</tr border='2'>";

echo "<tr border='2'>";

echo "<td border='2'><form action='cart.php' method='post'><input type='radio'  name='basket_id' value=". $row['book_id']." </td>";
echo "<td border='2'> <center>". $row['book_id']."</center></td>";

echo "<td border='2'><center>". $row['title']."</center></td>";

echo "<td border='2'><center>" . $row['year']. "</center></td>";

echo "<td border='2'><center>". $row['price']."/-</center></td>";

echo "<td border='2'><center>" . $row['name']."</center> </td>";
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
echo "</center></table><p>";

 
} 
if($count==0)
{
	echo "SORRY! NO Books found...";
echo '<br><a href="aftersignin.html"> Go Back</a>';

}

mysqli_close($con);
?>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
&#160;&#160;By using the Website, you confirm that you have read, understood, and 
agreed to be bound by the Terms and Conditions
<br>&#160;&#160;OnlineBooks Inc. All Rights Reserved <br>&#160;&#160;Copyright &copy; 2002-2015 Niket Raj</small>
<nav>
<ul>
<li><a href="home.html">Home</a></li>    
<li><a href="about.html">About</a></li>
<li><a href="contact.html">Contact us</a></li>
<li><a href="signup.html">Sign up</a></li>
<li><a href="signin.html">My Account</a></li>
</ul>
</nav>
</footer>


</body>
</html>


