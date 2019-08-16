<?php

session_start();




$username=$_POST['name'];

$_SESSION['x']=1;

$password=$_POST['password'];

$flag=0;

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'groupchat');

$q="select * from user";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

mysqli_close($con);

for($i=1;$i<=$num;$i++)
{
$a=mysqli_fetch_array($result);

if( ($a['username'] == "$username") && ($a['password'] == "$password") )
{
$flag=1;
echo "Login Successful";
$_SESSION['u']=$username;

?>

echo "<script>location.href="mainpage.php"</script>";

<?php

}

}

if($flag!=1)
{ 
?>

<div style="margin-top:100px;margin-left:200px;width:800px;height:400px;background-color:lightgreen;">
<html> <head>  </head>  <body> <br/> <h1 style="text-align:center;"> Incorrect  Username or Password  </h1> <a href="login.html" style="margin-left:400px;"> Login Again </a>  </body> </html>

<?php

}

?>