<?php

session_start();

if(isset($_SESSION['u']))
{
	
	session_destroy();
	echo "<script>location.href='login.html'</script>";
}


?>