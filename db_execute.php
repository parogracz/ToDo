<?php 
	session_start();
	include("db.php");
	include("function.php");
	Execute($_POST["ID"]);
	header("Location: index.php");
?>