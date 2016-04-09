<html>
 <title> All Books</title> 
<style>
body{
background-color:pink;
}

h1{
text-align:center;
color:Yellow;
font-size:60px;
font-family:Cooper;
width:50%;
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
search{
text-align:center;	
height: 40px;
position:absolute;
 top:87;
        left:530px;
}


</style>

<h1>Suggested Books...</h1>
<imgc> 
<img src="images/sc.png" width="40px" height="40px" />
<a href="payment.php"><br>My Cart</a>
</imgc>


<imgl> 
<img src="images/n.png" width="40px" height="40px" />
<a href="clearcartlogout.php"><br>Log out</a>
</imgl>

<search>
 <form action="searchresults.php" method="post">
<input type="text" name="title" placeholder="Search books" font size="25" ;>
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

$sql = 'SELECT * from book,author where book.auth_id =author.auth_id '; 
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

echo "<center><table border='3' style='border-color: blue; cellspacing='9' cellpadding='9'>

<tr >
<th border='2'>select</th>
<th>&#160;&#160;Book_id&#160;&#160;</th>
<th>Title</th>
<th>&#160;&#160;Author&#160;&#160;</th>
<th> &#160;&#160;Year&#160; &#160; </th>

<th>&#160;Price (&#8377;)&#160;</th>
<th border='2'>Quantity</th>
<th border='2'>Buy it</th>


</tr>";
while($row = mysqli_fetch_array($retval,MYSQL_ASSOC)) {
  

 echo "<tr>";
 echo "<td border='2'> <form action='cart.php' method='post'><input type='radio'  name='basket_id' value=". $row['book_id']." </td>";
 echo "<td>" ."<center>". $row['book_id']."</center>" . "</td>"; 
echo "<td>" ."<center>". $row['title']."</center>" . "</td>";

echo "<td align='center' width='200'>".$row['name'] ." </center>" ."</td>";
echo "<td>" . "<center>".$row['year'] ." </center>" ."</td>";

echo "<td>" . "<center>".$row['price'] ."/-</center>" ."</td>";

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
 
echo "</tr>";
}

echo "</center></table>";
?>




</body>
</html>


  




