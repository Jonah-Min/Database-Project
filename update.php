<?php

	session_start();

	$connect = mysql_connect('localhost', 'root', '');

	if (!$connect) {
		die('Could Not Connect: ' . mysql_error());
	}

	mysql_select_db('league');

	$name = $_SESSION['champ'];
	$skin = $_SESSION['background'];

	$query = "SELECT primaryrole, secondaryrole FROM champion WHERE champname='$name'";
	$query2 = "SELECT skillnumber, skillname, skilldesc FROM skills WHERE champname='$name'";
	$query3 = "SELECT attack_range, attack_damage, hp, hp_regen, armor FROM stats WHERE champname='$name'";

	$result = mysql_query($query);
	$result2 = mysql_query($query2);
	$result3 = mysql_query($query3);

	$roles = mysql_fetch_array($result);
	$stats = mysql_fetch_array($result3);

?>

<html>
<head>

	<link rel='stylesheet' href='result.css' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<style>
		body {
			background: url(<?php echo $skin ?>);
			background-attachment: fixed;
			background-size: cover;
			-webkit-transition: background 0.5s linear;
			-moz-transition: background 0.5s linear;
			-o-transition: background 0.5s linear;
			-ms-transition: background 0.5s linear;
			transition: background 0.5s linear;
		}
	</style>

</head>
<body>

	<form method='post' action='newvalues.php'>

	<div id='container'>
		
		<div id='header'>
			<p id='champ'> Update Existing Champion </p>
			<p id='championname'> <?php echo $name ?> </p>
		</div>	

		<table id='skills'>

			<tr>

				<td> 
					<p class='change'> Primary Role </p>
				</td>
				<td>
					<input type='text' name='primary' placeholder='Current: <?php echo $roles['primaryrole'] ?>'>
				</td>

			</tr>
			<tr>

				<td>
					<p class='change'> Secondary Role </p>
				</td>
				<td>
					<input type='text' name='secondary' placeholder='Current: <?php echo $roles['secondaryrole'] ?>'>
				</td>

			</tr>

			<?php

				while ($row = mysql_fetch_array($result2)) {
					echo "<tr>";
					if ($row['skillnumber'] == 0) {
						echo "<td><p class='change'>Passive</p></td>";
						echo "<td><input type='text' name='passivename' placeholder='Current: " . $row['skillname'] . "'><br>";
						echo "<textarea rows='3' cols='30' name='passivedesc' placeholder='Current: " . $row['skilldesc'] . "'></textarea><br></td>";
					} else {
						echo "<td><p class='change'>Skill " . $row['skillnumber'] . "</p></td>";
						echo "<td><input type='text' name='skill[]' placeholder='Current: " . $row['skillname'] . "'><br>";
						echo "<textarea rows='3' cols='30' name='passivedesc' placeholder='Current: " . $row['skilldesc'] . "'></textarea><br></td>";
					}
					echo "</tr>";
				}

			?>

			<tr>
				<td><p class='change'>Attack Range</p></td>
				<td><input type='text' name='attackrange' placeholder="Current: <?php echo $stats['attack_range'] ?>"></td>
			</tr>

			<tr>
				<td><p class='change'>Attack Damage</p></td>
				<td><input type='text' name='damage' placeholder="Current: <?php echo $stats['attack_damage'] ?>"></td>
			</tr>

			<tr>
				<td><p class='change'>HP</p></td>
				<td><input type='text' name='hp' placeholder="Current: <?php echo $stats['hp'] ?>"></td>
			</tr>

			<tr>
				<td><p class='change'>HP Regen</p></td>
				<td><input type='text' name='regen' placeholder="Current: <?php echo $stats['hp_regen'] ?>"></td>
			</tr>			

			<tr>
				<td><p class='change'>Armor</p></td>
				<td><input type='text' name='armor' placeholder="Current: <?php echo $stats['armor'] ?>"></td>
			</tr>

			<tr>
				<td colspan='2'><input type='submit'></td>
			</tr>

		</table>

	</div>

	</form>

</body>