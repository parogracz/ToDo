<!DOCKTYPE HTML>
<html>
<head>
	<link rel="StyleSheet" href="style.css"/>
	<?php
		session_start();
		include("db.php");
		include("function.php");
	?>
</head>
<body>
	<div class="console"> <br/>
		<?php
			if(isset($_SESSION["ER1"]))if($_SESSION["ER1"]==true) {echo '<p>Tytuł musi zawierać zawartość!</p>'; $_SESSION["ER1"] = false;}
			if(isset($_SESSION["ER2"]))if($_SESSION["ER2"]==true) {echo '<p>Nie udało się wstawić zadania!</p>'; $_SESSION["ER2"] = false;}
			if(isset($_SESSION["ER3"]))if($_SESSION["ER3"]==true) {echo '<p>Nie udało się usunąć zadania!</p>'; $_SESSION["ER3"] = false;}
			if(isset($_SESSION["ER4"]))if($_SESSION["ER4"]==true) {echo '<p>!</p>'; $_SESSION["ER1"] = false;}
			if(isset($_SESSION["SUCCESS"]))if($_SESSION["SUCCESS"]==true) {echo '<p style="color:green">Wykonano pomyślnie!</p>'; $_SESSION["SUCCESS"] = false;}
		?>
	</div>
	<div class="left">
		<h2>Zadania</h2> 
		<a href="wykonane.php"><div class="przycisk">Pokaż wykonane</div></a>
		<a href="priorytety.php"><div class="przycisk">Pokaż same priorytety</div></a>
		<?php
			Show();
		?>
	</div>
	<div class="right">					
		<h2>Nowe zadanie</h2>
		<form method="post" action="db_input.php">
			<input type="text" name="title" placeholder="Podaj tytuł.."/>
			Priorytet
			<input type="checkbox" name="priorytet"/>
			<input type="submit" value="Dodaj!"/>
		</form>
	</div>
</body>
</html>