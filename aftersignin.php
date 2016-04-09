<html>
<style>
body {
background:pink;
}

h1{
color:blue;
font-size:45px;
font-family:Trebuchet MS;
margin-right:auto;
margin-left:auto;
width:50%;
background-color:skyblue;
height:55px;
}
nav2 {
margin-right:0px;
width:21%;
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
height:68px;
position:absolute;
        bottom:0;
       
width: 1355px;
}

alb{

text-align:center;	
border: 1px solid black;
background-color: lightgreen;
border-radius: 6px;
position:absolute;
	height: 40px;
	width: 138px;
        top:200;
        left:660px;
}

search{
text-align:center;	
border: 1px solid black;
background-color: lightgreen;
border-radius: 6px;
position:absolute;
	height: 40px;
	width: 100px;
        top:300;
        left:660px;

}


</style>

<h1>
<center><big><b><marquee><font color="green">.....WELCOME......<b></font></marquee></big></center>
</h1>

<input>
<input type="text" name="title" placeholder="Type book name here">
</input>

<search>
<font face="Cursive" font size="5" color="black"><a href="#">search</a></font>
</search>

<alb>
<font face="Cursive" font size="5" color="black"><a href="list2.php">All Books</a></font>
</alb>


<?php

$con=mysqli_connect("localhost","root","niket123","online_book_store");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$email='';
if (isset($_POST['email_id']))
{
$email=mysqli_real_escape_string($con,$_POST['email_id']);
}

$sql="select email_id from customer where email_id='$Uname'";
echo "<center><table border='3' style='border-color: green; cellspacing='13' cellpadding='13'>
<tr>
<th border='2'>email_id</th>
</tr border='2'>";
echo "<td border='2'>" ."<center>".$email."</center>" . "</td>";
echo "</tr border='2'>";
echo "</center></table><p>";

mysqli_close($con);
?>

<br><br><br><br>


 <p>
<footer>
<small>
By using the Website, you confirm that you have read, understood, and 
agreed to be bound by the Terms and Conditions
<br>OnlineBooks Inc. All Rights Reserved <br>Copyright &copy; 2002-2015 Niket Raj</small>
<nav2>
<ul>
<li><a href="home.html">Home</a></li>    
<li><a href="about.html">About</a></li>
<li><a href="contact.html">Contact us</a></li>
</ul>
</nav2>
</footer>
</p>

</body>
</html>


