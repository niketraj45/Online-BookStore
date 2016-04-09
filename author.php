<html>
 <title> Authors</title> 
<style>
body{
background-color:pink;
}
h1{
text-align:center;
color:brown;
font-size:40px;
font-family:AR BERKLEY;
width:28%;
background-color:skyblue;

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


img1{
position:absolute;
        top:80;
right:15;

}
img2{
position:absolute;
        top:80;
right:350;

}

img3{
position:absolute;
top:80;
right:695;

}

img4{
position:absolute;
        top:380;
right:15;

}

img5{
position:absolute;
        top:380;
right:355;

}
img6{
position:absolute;
        top:380;
right:695;

}
search{
text-align:center;	
height: 40px;
position:absolute;
 top:100;
        left:25px;
}




nav li{
float:left;
margin-right:12px;
}

</style>

<h1>Suggested Authors...</h1>


<imgc> 
<img src="images/sc.png" width="40px" height="40px" />
<a href="payment.php"><br>My Cart</a>
</imgc>


<imgl> 
<img src="images/n.png" width="40px" height="40px" />
<a href="clearcartlogout.php"><br>Log out</a>
</imgl>


<br>
<img1> 
<img src="images/mp.jpg"width= 250px height= 250px />
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
<a href="https://www.facebook.com/search/top/?q=kavi%20mahesh"><img src="images/soc.png" /> </a>
</img1>

<img2>
<img src="images/ch.jpg"  width= 250px height= 250px />
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
<a href="www.faceboook.com/cs_paul"><img src="images/soc.png" /> </a>
</img2>

<img3>
<img src="images/km.jpg"width= 250px height= 250px />
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
<a href="https://www.facebook.com/search/top/?q=kavi%20mahesh"><img src="images/soc.png" /> </a>

</img3>

<img4>
<img src="images/cs.jpg"width= 250px height= 250px />
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
<a href="https://www.facebook.com/search/top/?q=kavi%20mahesh"><img src="images/soc.png" /> </a>
</img4>

<img5>
<img src="images/tt.jpg"width= 250px height= 250px />
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
<a href="https://www.facebook.com/search/top/?q=kavi%20mahesh"><img src="images/soc.png" /> </a>
</img5>

<img6>
<img src="images/i.jpg" width= 250px height= 250px />
<br>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
<a href="https://www.facebook.com/search/top/?q=kavi%20mahesh"><img src="images/soc.png" /> </a>
</img6>
<search>
 <form action="authcart.php" method="post">
<input type="text" name="name" placeholder="Search Authors" font size="25" ;>
<input type="submit" value="Search">
</form>
</search>
<br><br>


<?php
$con=mysqli_connect("localhost","root","niket123","online_book_store");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql =$sql = 'SELECT auth_id,name from author '; 
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
echo "
<table border='3' style='border-color: green; cellspacing='7' cellpadding='7'>
<tr>
<th border='2'>Auth_id</th>
<th border='2'>Author</th>

<th>Select</th>
<th>Search</th>
</tr>";


while($row = mysqli_fetch_array($retval,MYSQL_ASSOC)) {
 echo "<tr>";
 echo "<td>" ."<center>" . $row['auth_id']."</center>" . "</td>"; 
echo "<td>" ."<center>".$row['name']."</center>" . "</td>";

echo "<td><form action='authcart.php' method='post'>
<input type='radio' name='name' value=". $row['name']." </td>";
echo "<td><input type='submit' value='Books'></form></td>";
 
echo "</tr>";
  }
echo "</table>
";
?>




</body>
</html>


