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
	</div>
	<div class="left">
		<h2>Wykonane Zadania</h2> 
		<a href="index.php"><div class="przycisk">Pokaż <br> zadania</div></a>
		<a href="priorytety.php"><div class="przycisk">Pokaż same priorytety</div></a>
		<?php
			Show_W();
			mysqli_close($_SESSION["link"]); 
		?>
	</div>
</body>
</html>