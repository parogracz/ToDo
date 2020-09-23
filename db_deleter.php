<?php 
	session_start();
	include("db.php");
	include("function.php");
	Deleter($_POST["ID"]);
	header("Location: index.php");
?>