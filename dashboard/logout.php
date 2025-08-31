<?php  
	session_start();

	session_unset();
	session_destroy();

	setcookie('ID', '', time() - 3600, '/');
	setcookie('KEY', '', time() - 3600, '/');

	header('Location: ../login.php');
	exit;

?>