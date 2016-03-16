<?php

	$connect = mysql_connect('localhost', 'root', '');

	if (!$connect) {
		die('Could Not Connect: ' . mysql_error());
	}

	mysql_select_db('league');

	$query = "SELECT champname, primaryrole, secondaryrole, champimg FROM champion";
	$result = mysql_query($query);

?>

<html>
<head>

	<link rel='stylesheet' type='text/css' href='league.css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	
</head>

<body>

	<div id='header'>

		<h1> Jonah and Bryan's League of Legends Champion Database </h1>

	</div>

	<form method='Post' action='result.php'>
		<div id='icons'>

			<?php	
				while ($row = mysql_fetch_array($result)) {	
					echo "<input type='image' name='button' value='" 
						. $row['champname'] .
						"' data-type='tooltip' title='" 
						. $row['champname'] . 
						"' width='100' height='100' src='" 
						. $row['champimg'] . "'/>";	 
				}
			?>
			
		</div>
	</form>

	<div id='footer'>
		<div id='create'>
			<input type='submit' value='Create New'/>
		</div>
	</div>

</body>
</html>
