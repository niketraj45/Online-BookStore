<html>
<head>
<title> Your Cart </title>
</head>

<style>


body{
background-color:pink;
}

h1{
color:Yellow;
border: 1px solid blue;
border-radius: 8px;
text-align:center; 
font-size:60px;
font-family:Fixedsys;
background-color:maroon;
height:70px;
width:42%;
margin-bottom:5px;
}


img1{
position:absolute;
        top:160;
right:435;
}
img2{
position:absolute;
        top:160;
right:60;
}


pub{

text-align:center;	
border: 1px solid black;
background-color: blue;
border-radius: 6px;
position:absolute;
	height: 40px;
	width: 250px;
        top:455;
        right:250px;
}


alb{

text-align:center;	
border: 1px solid black;
background-color: skyblue;
border-radius: 6px;
position:absolute;
	height: 30px;
	width: 145px;
        top:530;
        right:300px;
}






imgl{
position:absolute;
        top:10;
right:15;
}

nav2 {
color:red;
margin-right:0px;
width:26%;
float:right;
}
nav2 ul{
list-style-type:none;
}

nav2 li{
float:left;
margin-right:10px;
}
footer {
color:yellow;
background-color:black;
height:70px;
position:absolute;
     
width: 1355px;
}
</style>

<center><h1><u>Your Cart</u></h1></center>

<form action="clearcart.php" method="post">
<input type="submit"  value="Clear Cart"><br><br>
<imgl> 
<img src="images/n.png" width="40px" height="40px" />
<a href="clearcartlogout.php"><br>Log out</a>
</imgl>

<img1> 
<img src="images/crt.jpg"width= 300px height= 250px />
</img1>

<img2>
<img src="images/gb.jpg" width= 300px height=250px/>
</img2>

<?php
$con=mysqli_connect("localhost","root","niket123","online_book_store");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = 'SELECT * from payment' ; 
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

echo "<table border='3' style='border-color: blue; cellspacing='15' cellpadding='15'>

<tr >
<th>&#160;&#160;Book_id&#160;&#160;</th>
<th>&#160;Price (&#8377;)&#160;</th>
<th> &#160;Quantity&#160; </th>

<th>&#160;Total (&#8377;)&#160;</th>




</tr>";
while($row = mysqli_fetch_array($retval,MYSQL_ASSOC))
{
echo "<tr>";
 
 echo "<td>" ."<center>". $row['basket_id']."</center>" . "</td>"; 

echo "<td align='center' width='200'>".$row['cost'] ." </center>" ."</td>";
echo "<td>" . "<center>".$row['quantity'] ." </center>" ."</td>";
echo "<td>" . "<center>".$row['total'] ."/-</center>" ."</td>";
echo "</tr>";
  }
echo "</table>";
?>
<?php
	
$grandtotal='';
$sql = 'SELECT total from payment' ; 
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());

}
while($row = mysqli_fetch_array($retval,MYSQL_ASSOC))
{

$grandtotal +=$row['total'];

}
echo"<h2><font face='Arial' font size='7' color='black'>Total Amount : &#8377;&#160;"."$grandtotal "."/-</h2></font>";

mysqli_close($con);
?>









<alb>
<font face="Cursive" font size="4" color="black"><a href="list2.php">Add more books</a></font>
</alb>

<pub>
<a href="paymentmode.html"><font face="Cursive" font size="5" color="yellow">Proceed to Payment</font></a>
</pub>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
<small>
&#160;&#160;By using the Website, you confirm that you have read, understood, and 
agreed to be bound by the Terms and Conditions
<br>&#160;&#160;OnlineBooks Inc. All Rights Reserved <br>&#160;&#160;Copyright &copy; 2002-2015 Niket Raj</small>
<nav2>
<ul>
<li><a href="home.html">Home</a></li>    
<li><a href="about.html">About</a></li>
<li><a href="contact.html">Contact us</a></li>
<li><a href="signin.html">My Account</a></li>
	
</ul>
</nav2>
</footer>

</body>
</html>

