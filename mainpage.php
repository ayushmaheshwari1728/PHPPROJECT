<?php

session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'groupchat');

if($_SESSION['x']==0){

$username=$_SESSION['u'];
$text=$_POST['msg'];

$q="insert into message(username,text) values ('$username','$text')";
$i=mysqli_query($con,$q);

}

$q="select * from message";


$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);
mysqli_close($con);

$_SESSION['x']=0;


?>

<html>

<head>
</head>

<body>

<div style="margin-top:100px;margin-left:200px;width:800px;height:400px;background-color:lightgreen;">


<?php
for($i=1;$i<=$num;$i++)
{

$a=mysqli_fetch_array($result);
echo $a['username'];  ?>

</br>

<?php

echo $a['text'];  ?>

</br>

<?php

}

?>

</div>


<div style="margin-top:20px;margin-left:200px;width:800px;height:50px;background-color:lightgreen;">


<form action="mainpage.php" method="post">

<input type="text" name="msg" placeholder="type here">
</br>

<input type="submit" name="submit" value="send" />

</form>

</div>

</body>

</html>