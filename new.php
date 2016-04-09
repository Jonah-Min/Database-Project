<?php
	
	session_start();

	$connect = mysql_connect('localhost', 'root', '');

	if (!$connect) {
		die('Could Not Connect: ' . mysql_error());
	}

	mysql_select_db('league');

	$champname = $_POST['champion'];
	$champimg = $_POST['championimg'];
	$primary = $_POST['primary'];
	$secondary = $_POST['secondary'];
	$default = $_POST['default'];

	$passive = $_POST['passive'];
	$passiveimg = $_POST['passiveimg'];
	$passivedesc = $_POST['passivedesc'];

	$skill1 = $_POST['skill1'];
	$skill1url = $_POST['skill1url'];
	$description1 = $_POST['description1'];

	$skill2 = $_POST['skill2'];
	$skill2url = $_POST['skill2url'];
	$description2 = $_POST['description2'];

	$skill3 = $_POST['skill3'];
	$skill3url = $_POST['skill3url'];
	$description3 = $_POST['description3'];

	$skill4 = $_POST['skill4'];
	$skill4url = $_POST['skill4url'];
	$description4 = $_POST['description4'];

	$range = $_POST['attackrange'];
	$damage = $_POST['damage'];
	$hp = $_POST['hp'];
	$regen = $_POST['regen'];
	$armor = $_POST['armor'];


	$query = "INSERT INTO champion (champname, primaryrole, secondaryrole, champimg) VALUES ('$champname', '$primary', '$secondary', '$champimg')";
	$query2 = "INSERT INTO skills (champname, skillnumber, skillname, skilldesc, skillimg) VALUES ('$champname', 0, '$passive', '$passivedesc', '$passiveimg')";
	$query3 = "INSERT INTO skills (champname, skillnumber, skillname, skilldesc, skillimg) VALUES ('$champname', 1, '$skill1', '$description1', '$skill1url')";
	$query4 = "INSERT INTO skills (champname, skillnumber, skillname, skilldesc, skillimg) VALUES ('$champname', 2, '$skill2', '$description2', '$skill2url')";
	$query5 = "INSERT INTO skills (champname, skillnumber, skillname, skilldesc, skillimg) VALUES ('$champname', 3, '$skill3', '$description3', '$skill3url')";
	$query6 = "INSERT INTO skills (champname, skillnumber, skillname, skilldesc, skillimg) VALUES ('$champname', 4, '$skill4', '$description4', '$skill4url')";
	$query7 = "INSERT INTO stats (champname, attack_range, attack_damage, hp, hp_regen, armor) VALUES ('$champname', $range, $damage, $hp, $regen, $armor)";
	$query8 = "INSERT INTO skins (champname, skinname, url) VALUES ('$champname', 'default', '$default')";

	mysql_query($query);
	mysql_query($query2);
	mysql_query($query3);
	mysql_query($query4);
	mysql_query($query5);
	mysql_query($query6);
	mysql_query($query7);
	mysql_query($query8);

	header("location:index.php");

?>
