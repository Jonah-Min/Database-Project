<?php

	session_start();

	$connect = mysql_connect('localhost', 'root', '');

	if (!$connect) {
		die('Could Not Connect: ' . mysql_error());
	}

	mysql_select_db('league');

	$value = $_POST['button'];

	$skinquery = "SELECT skinname, url FROM skins WHERE champname='$value'";
	$result = mysql_query($skinquery);

	$skins = array();
	$skinnames = array();

	while ($row = mysql_fetch_array($result)) {
		array_push($skins, $row['url']);
		array_push($skinnames, $row['skinname']);
	}

	$statsquery = "SELECT attack_range, attack_damage, hp, hp_regen, armor FROM stats WHERE champname='$value'";
	$stats = mysql_query($statsquery);
	$stats = mysql_fetch_array($stats);

	$champinfo = "SELECT primaryrole, secondaryrole FROM champion WHERE champname='$value'";
	$result = mysql_query($champinfo);
	$info = mysql_fetch_array($result);

	$primary = $info['primaryrole'];
	$secondary = $info['secondaryrole'];

	$_SESSION['champ'] = $value;
	$_SESSION['background'] = $skins[0];

	$skills = "SELECT * FROM skills WHERE champname='$value'";
	$skills = mysql_query($skills);

?>

<html>

<head>

	<link rel='stylesheet' type='text/css' href='result.css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<style>
		body {
			background: url(<?php echo $skins[0]?>);
			background-attachment: fixed;
			background-size: cover;
			-webkit-transition: background 0.5s linear;
			-moz-transition: background 0.5s linear;
			-o-transition: background 0.5s linear;
			-ms-transition: background 0.5s linear;
			transition: background 0.5s linear;
		}
	</style>

	<script>
		$(document).ready(function(){

			$('.skin').on('click', function() {
				$('body').css('background-image', 'url(' + $(this).attr('src') + ')');
			});

		});
	</script>

</head>

<body>

	<div id='container'>
		<p id='name'> <?php echo $value ?> </p>
		<a href='index.php'>Back</a>
		<a href='delete.php'>Delete</a>
		<a href='update.php'>Update</a><br><br><br><br>

		<span class='role'><?php echo $primary ?> </span><br>
		<span class='role'><?php echo $secondary ?> </span>

		<table id='stats'>

			<tr>
				<td colspan='2'><p class='title'>Stats</p></td>
			</tr>
			<tr>
				<td><p class='statid'>Attack Range</p></td>
				<td><p class='skillid'><?php echo $stats['attack_range']?>
			</tr>
			<tr>
				<td><p class='statid'>Attack Damage</p></td>
				<td><p class='skillid'><?php echo $stats['attack_damage']?>
			</tr>
			<tr>
				<td><p class='statid'>HP</p></td>
				<td><p class='skillid'><?php echo $stats['hp']?>
			</tr>
			<tr>
				<td><p class='statid'>HP Regen</p></td>
				<td><p class='skillid'><?php echo $stats['hp_regen']?>
			</tr>
			<tr>
				<td><p class='statid'>Armor</p></td>
				<td><p class='skillid'><?php echo $stats['armor']?>
			</tr>

		</table>

		<table id='skills'>
			<tr>
				<td colspan='5'><p class='title'>Skills</p></td>
			</tr>
			<tr>
				<td><p class='skillid'>P</p></td>
				<td><p class='skillid'>Q</p></td>
				<td><p class='skillid'>W</p></td>
				<td><p class='skillid'>E</p></td>
				<td><p class='skillid'>R</p></td>
			</tr>
			<tr>
				<?php

					while ($row = mysql_fetch_array($skills)) {
						echo "<td align='center' class='tablecell'><span class='tooltip'><img class='icon' src='"
								. $row['skillimg'] . 
								"' width='50' height='50'><span class='tooltipcontent'><strong>"
								. $row['skillname'] . "</strong><br>"
								. $row['skilldesc'] . 
								"</span></span></td>";
					}

				?>
			</tr>
		</table>

		<table id='skins'>

			<p class='title2'>Skins</p>

			<?php
				
				for ($i = 0; $i < sizeof($skins); $i++) {
					echo "<div class='skindiv'><p class='skinname'>"
							. $skinnames[$i] .
							"</p><div class='image'><img class='skin' src='" 
							. $skins[$i] .
							"'></div></div>";
				}

			?>

		</table>


	</div>

</body>