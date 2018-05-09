<?php 
	session_start();
	require_once __DIR__."/../libraries/functions.php";	
	unset($_SESSION['email']);
	header('location:'.baseUrl()."admin/index.php");
	
 ?>