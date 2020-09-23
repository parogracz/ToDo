<?php 
include("db.php");
function Show()
{
	$quest = "SELECT * FROM zadania WHERE status=0";
	$db_cont = mysqli_query($_SESSION["link"],$quest);
	echo '<table align="center">';
	while($result = $db_cont->fetch_array())
	{
		echo '<tr>
				<td>'.$result[1].'</td>'.																									// tytuł
				'<td><form action="db_execute.php" method="POST">'.																			// przycisk wykonania
					'<input type="hidden" value="'.$result[0].'" name="ID"/>'.
					'<input type="submit" value="wykonano"/>'.
				'</form></td>'.																												
				'<td><form action="db_deleter.php" method="POST">'.																			// przycisk usuń
					'<input type="hidden" value="'.$result[0].'" name="ID"/>'.
					'<input type="submit" value="usuń"/>'.
				'</form></td>';		
		if($result[2]==1) echo "<td><input type=\"checkbox\" value=\"priorytet\" checked disabled/></td></tr>";								// instrukcja na priorytet 
			else echo "<td><input type=\"checkbox\" value=\"wykonano\" disabled/></td></tr>";
	}
	echo '</table>';
}
function Show_W()
{
	$quest = "SELECT * FROM zadania WHERE status=1";
	$db_cont = mysqli_query($_SESSION["link"],$quest);
	echo '<table align="center">';
	while($result = $db_cont->fetch_array())
	{
		echo '<tr>
				<td>'.$result[1].'</td>
			</tr>';
	}
	echo '</table>';
}
function Show_P()
{
	$quest = "SELECT * FROM zadania WHERE priorytet=1 AND status=0";
	$db_cont = mysqli_query($_SESSION["link"],$quest);
		echo '<table align="center">';
	while($result = $db_cont->fetch_array())
	{
		echo '<tr>
				<td>'.$result[1].'</td>'.																									// tytuł
				'<td><input type="submit" value="wykonano" name="'.$result[0].'"/></td>'.													// przycisk wykonania 
				'<td><form action="db_deleter.php" method="POST">'.																			// przycisk usuń
					'<input type="hidden" value="'.$result[0].'" name="ID"/>'.
					'<input type="submit" value="usuń"/>'.
				'</form></td>';		
		if($result[2]==1) echo "<td><input type=\"checkbox\" value=\"priorytet\" checked disabled/></td></tr>";								// instrukcja na priorytet 
			else echo "<td><input type=\"checkbox\" value=\"wykonano\" disabled/></td></tr>";
	}
	echo '</table>';
}
function Insert($title, $prio)
{
	$quest = "INSERT INTO zadania (ID, tytul, priorytet, status) VALUES ('','".$title."','".$prio."','0')";
	$do = mysqli_query($_SESSION["link"],$quest);
	if(!$do) $_SESSION["ER2"] = true;
	else $_SESSION["SUCCESS"] = true;
}
function Deleter($ID)
{
	$quest = "DELETE FROM zadania WHERE ID=".$ID;
	$do = mysqli_query($_SESSION["link"],$quest);
	if(!$do) $_SESSION["ER3"] = true;
	else $_SESSION["SUCCESS"] = true;
}
function Execute($ID)
{
	$quest = "UPDATE zadania SET status=1 WHERE ID=".$ID;
	$do = mysqli_query($_SESSION["link"],$quest);
	if(!$do) $_SESSION["ER3"] = true;
	else $_SESSION["SUCCESS"] = true;
}
?>