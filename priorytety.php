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
		<h2>Zadania Priorytetowe</h2> 
		<a href="wykonane.php"><div class="przycisk">Pokaż  wykonane</div></a>
		<a href="index.php"><div class="przycisk">Pokaż <br> zadania</div></a>
		<?php
			Show_P();
		?>
	</div>
</body>
</html>