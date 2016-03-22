<?php

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

	$champinfo = "SELECT primaryrole, secondaryrole FROM champion WHERE champname='$value'";
	$result = mysql_query($champinfo);
	$info = mysql_fetch_array($result);

	$primary = $info['primaryrole'];
	$secondary = $info['secondaryrole'];

	$skills = "SELECT * FROM skills WHERE champname='$value'";
	$skills = mysql_query($skills);


?>

<html>

<head>

	<link rel='stylesheet' type='text/css' href='result.css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<style>
		body {
			background: url(<?php echo $skins[0]?>);
			background-attachment: fixed;
			background-size: 100%;
		}
	</style>

</head>

<body>

	<div id='container'>
		<p id='name'> <?php echo $value ?> </p>
		<a href='delete.php'>Delete</a>
		<a href='update.php'>Update</a><br><br><br><br>

		<span class='role'><?php echo $primary ?> </span><br>
		<span class='role'><?php echo $secondary ?> </span>

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
						echo "<td align='center' class='tablecell'><img class='icon' data-type='tooltip' title='"
								. $row['skillname'] . "\n\n"
								. $row['skilldesc'] .
								"' src='"
								. $row['skillimg'] . 
								"' width='50' height='50'></td>";
					}

				?>
			</tr>
		</table>

		<table id='skins'>

			<p class='title2'>Skins</p>

			<?php

				array_shift($skins);
				array_shift($skinnames);
				
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