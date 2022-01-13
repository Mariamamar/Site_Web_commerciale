<?php
	session_start();
	session_destroy();
 
	if (isset($_COOKIE["idadmin"])){
		setcookie("idadmin", '', time() - (3600));
	}
 
	header('location:loginadmin.php');
 
?>