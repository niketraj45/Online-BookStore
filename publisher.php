<html>

 <title> Publishers</title> 

<style>
body
{ 

background-color:pink; 
}

search{
text-align:center;	
height: 40px;
position:absolute;
 top:89;
        left:550px;
}


h1{
text-align:center;
color:Yellow;
font-size:60px;
font-family:Cooper;
width:40%;
background-color:blue;
margin-right:auto;
margin-left:auto;
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
width:28%;
float:right;
}

footer {
color:yellow;
background-color:black;
height:70px;
position:absolute;

    
width: 1335px;
}
nav ul{
list-style-type:none;
}

nav li{
float:left;
margin-right:10px;
}
</style>


<h1>Our Publishers...</h1>

<imgc> 
<img src="images/sc.png" width="40px" height="40px" />
<a href="payment.php"><br>My Cart</a>
</imgc>


<imgl> 
<img src="images/n.png" width="40px" height="40px" />
<a href="clearcartlogout.php"><br>Log out</a>
</imgl>


<search>
 <form action="pubcart.php" method="post">
<input type="text" name="name" placeholder="Search Publishers here..." font size="25" ;>
<input type="submit" value="Search">
</form>
</search>



<?php
$con=mysqli_connect("localhost","root","niket123","online_book_store");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT  * from publisher  "; 
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

echo "<center><table border='3' style='border-color: blue; cellspacing='9' cellpadding='9'>

<tr >
<th>&#160;&#160;Pub_id&#160;&#160;</th>
<th>Name</th>

<th> &#160;&#160;Contact&#160; &#160; </th>

<th>&#160;Address &#160;</th>
<th>Select</th>
<th>Search</th>



</tr>";
while($row = mysqli_fetch_array($retval,MYSQL_ASSOC)) {


 echo "<tr>";
 
 echo "<td>" ."<center>". $row['pub_id']."</center>" . "</td>"; 
echo "<td>" ."<center>". $row['name']."</center>" . "</td>";

echo "<td>" . "<center>".$row['phone_num'] ." </center>" ."</td>";

echo "<td>" . "<center>".$row['address'] ."</center>" ."</td>";
 echo "<td><form action='pubcart.php' method='post'>
<input type='radio' name='name' value=". $row['name']." </td>";
echo "<td><input type='submit' value='Books'></form></td>";
 
echo "</tr>";
  }

echo "</center></table>";
?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><footer>
<small>
By using the Website, you confirm that you have read, understood, and 
agreed to be bound by the Terms and Conditions
OnlineBooks Inc. <br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
All Rights Reserved <br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;Copyright &copy; 2002-2015 Niket Raj</small>
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

