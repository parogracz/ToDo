<?php
	session_start();
	include("db.php");
	include("function.php");
	if($_POST["title"]==null || !isset($_POST["title"]))	
	{
		header("Location: index.php");
	}
	else
	{
		if(isset($_POST["priorytet"])) {Insert($_POST["title"],1); header("Location: index.php");}
			else {Insert($_POST["title"],0); header("Location: index.php");}
	}
?>