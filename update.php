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

	$skillnames = array();
	$skills = array();
 
	while ($row = mysql_fetch_array($result2)) {
		array_push($skillnames, $row['skillname']);
		array_push($skills, $row['skilldesc']);
	}

?>

<html>
<head>

	<link rel='stylesheet' href='result.css' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<script>

		function validate() {

			inputs = document.getElementsByTagName('input');

			for (i = 0; i < inputs.length; ++i) {
				if (inputs[i].name == 'attackrange'
					|| inputs[i].name == 'damage' 
					|| inputs[i].name == 'hp' 
					|| inputs[i].name == 'regen'
					|| inputs[i].name == 'armor') {
					
					var val = inputs[i].value;
					var name = inputs[i].name;
					Number(val);

					if (val != '') {

						if (isNaN(val)) {
							alert('Attack Range, Damage, HP, HP Regen, or Armor must be a number!');
							return false;
						}

					}
				}
			}
		}

	</script>

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

	<form method='post' action='newvalues.php' onsubmit='return validate();'>

	<div id='container'>
		
		<div id='header'>
			<p id='champ'> Update Existing Champion </p>
			<p id='championname'> <?php echo $name ?> </p>
		</div>	

		<table id='skills'>

			<tr>

				<td>
					<p class='change'> Champion Name </p>
				</td>
				<td>
					<input type='text' name='name' placeholder='Current: <?php echo $name ?>'>
				</td>

			</tr>

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
			<tr>

				<td>
					<p class='change'>Passive</p></td>
				</td>
				<td>
					<input type='text' name='passivename' placeholder="Current: <?php echo $skillnames[0] ?>"><br>
					<textarea rows='3' cols='30' name='passivedesc' placeholder="Current: <?php echo $skills[0] ?>"></textarea><br></td>
				</td>

			</tr>
			<tr>

				<td>
					<p class='change'>Q</p></td>
				</td>
				<td>
					<input type='text' name='Q' placeholder="Current: <?php echo $skillnames[1] ?>"><br>
					<textarea rows='3' cols='30' name='Qdesc' placeholder="Current: <?php echo $skills[1] ?>"></textarea><br></td>
				</td>

			</tr>
			<tr>

				<td>
					<p class='change'>W</p></td>
				</td>
				<td>
					<input type='text' name='W' placeholder="Current: <?php echo $skillnames[2] ?>"><br>
					<textarea rows='3' cols='30' name='Wdesc' placeholder="Current: <?php echo $skills[2] ?>"></textarea><br></td>
				</td>

			</tr>
			<tr>

				<td>
					<p class='change'>E</p></td>
				</td>
				<td>
					<input type='text' name='E' placeholder="Current: <?php echo $skillnames[3] ?>"><br>
					<textarea rows='3' cols='30' name='Edesc' placeholder="Current: <?php echo $skills[3] ?>"></textarea><br></td>
				</td>

			</tr>
			<tr>

				<td>
					<p class='change'>R</p></td>
				</td>
				<td>
					<input type='text' name='R' placeholder="Current: <?php echo $skillnames[4] ?>"><br>
					<textarea rows='3' cols='30' name='Rdesc' placeholder="Current: <?php echo $skills[4] ?>"></textarea><br></td>
				</td>

			</tr>
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