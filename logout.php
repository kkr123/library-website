<?php
include('connect.php');
session_start();
	$msg=md5('logout');	
	unset($_SESSION['name']);
	session_destroy();
	header("Location:login.php?sign_out=".$msg);
?>
