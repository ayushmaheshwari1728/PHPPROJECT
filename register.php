<?php

$username=$_POST['name'];

$password=$_POST['password'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'groupchat');

$q="insert into user (username,password) values ('$username','$password')";

$i=mysqli_query($con,$q);

mysqli_close($con);

if($i)
{echo "Registered Successfully";

?>

<html> <head>  </head>  <body> <br/>  <a href="login.html"> Login Here </a>  </body> </html>

<?php
}


?>