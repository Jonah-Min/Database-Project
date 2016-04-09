<?php

	session_start();

	$connect = mysql_connect('localhost', 'root', '');

	if (!$connect) {
		die('Could Not Connect: ' . mysql_error());
	}

	mysql_select_db('league');

	$champname = $_SESSION['champ'];

	if (!empty($_POST['name'])) {
		$name = $_POST['name'];
		$name = str_replace(')', '', $name);
		$name = str_replace('\'', '', $name);
		$name = str_replace(';', '', $name);
		$name = strip_tags($name);

		$query = "UPDATE champion SET champname='$name' WHERE champname='$champname'";
		mysql_query($query);
		$_SESSION['champ'] = $name;
	}

	if (!empty($_POST['primary'])) {
		$primary = $_POST['primary'];
		$primary = str_replace(')', '', $primary);
		$primary = str_replace('\'', '', $primary);
		$primary = str_replace(';', '', $primary);
		$primary = strip_tags($primary);

		$query = "UPDATE champion SET primaryrole='$primary' WHERE champname='$champname'";
		mysql_query($query);
	} 

	if (!empty($_POST['secondary'])) {
		$secondary = $_POST['secondary'];
		$secondary = str_replace(')', '', $secondary);
		$secondary = str_replace('\'', '', $secondary);
		$secondary = str_replace(';', '', $secondary);
		$secondary = strip_tags($secondary);

		$query = "UPDATE champion SET secondaryrole='$secondary' WHERE champname='$champname'";
		mysql_query($query);
	} 

	if (!empty($_POST['passivename'])) {
		$primary = $_POST['passivename'];
		$primary = str_replace(')', '', $primary);
		$primary = str_replace('\'', '', $primary);
		$primary = str_replace(';', '', $primary);
		$primary = strip_tags($primary);

		$query = "UPDATE skills SET skillname='$primary' WHERE champname='$champname' AND skillnumber=0";
		mysql_query($query);
	} 

	if (!empty($_POST['passivedesc'])) {
		$primary = $_POST['passivedesc'];
		$primary = str_replace(')', '', $primary);
		$primary = str_replace('"', '', $primary);
		$primary = str_replace(';', '', $primary);
		$primary = strip_tags($primary);

		$query = "UPDATE skills SET skilldesc=\"$primary\" WHERE champname='$champname' AND skillnumber=0";
		mysql_query($query);
	} 

	if (!empty($_POST['Q'])) {
		$skill = $_POST['Q'];
		$skill = str_replace(')', '', $skill);
		$skill = str_replace('\'', '', $skill);
		$skill = str_replace(';', '', $skill);
		$skill = strip_tags($skill);

		$query = "UPDATE skills SET skillname='$skill' WHERE champname='$champname' AND skillnumber=1";
		mysql_query($query);
	} 

	if (!empty($_POST['Qdesc'])) {
		$desc = $_POST['Qdesc'];
		$desc = str_replace(')', '', $desc);
		$desc = str_replace('"', '', $desc);
		$desc = str_replace(';', '', $desc);
		$desc = strip_tags($desc);

		$query = "UPDATE skills SET skilldesc=\"$desc\" WHERE champname='$champname' AND skillnumber=1";
		mysql_query($query);
	} 

	if (!empty($_POST['W'])) {
		$skill = $_POST['W'];
		$skill = str_replace(')', '', $skill);
		$skill = str_replace('\'', '', $skill);
		$skill = str_replace(';', '', $skill);
		$skill = strip_tags($skill);

		$query = "UPDATE skills SET skillname='$skill' WHERE champname='$champname' AND skillnumber=2";
		mysql_query($query);
	} 

	if (!empty($_POST['Wdesc'])) {
		$desc = $_POST['Wdesc'];
		$desc = str_replace(')', '', $desc);
		$desc = str_replace('"', '', $desc);
		$desc = str_replace(';', '', $desc);
		$desc = strip_tags($desc);

		$query = "UPDATE skills SET skilldesc=\"$desc\" WHERE champname='$champname' AND skillnumber=2";
		mysql_query($query);
	} 

	if (!empty($_POST['E'])) {
		$skill = $_POST['E'];
		$skill = str_replace(')', '', $skill);
		$skill = str_replace('\'', '', $skill);
		$skill = str_replace(';', '', $skill);
		$skill = strip_tags($skill);

		$query = "UPDATE skills SET skillname='$skill' WHERE champname='$champname' AND skillnumber=3";
		mysql_query($query);
	} 

	if (!empty($_POST['Edesc'])) {
		$desc = $_POST['Edesc'];
		$desc = str_replace(')', '', $desc);
		$desc = str_replace('"', '', $desc);
		$desc = str_replace(';', '', $desc);
		$desc = strip_tags($desc);

		$query = "UPDATE skills SET skilldesc=\"$desc\" WHERE champname='$champname' AND skillnumber=3";
		mysql_query($query);
	}   

	if (!empty($_POST['R'])) {
		$skill = $_POST['R'];
		$skill = str_replace(')', '', $skill);
		$skill = str_replace('\'', '', $skill);
		$skill = str_replace(';', '', $skill);
		$skill = strip_tags($skill);

		$query = "UPDATE skills SET skillname='$skill' WHERE champname='$champname' AND skillnumber=4";
		mysql_query($query);
	} 

	if (!empty($_POST['Rdesc'])) {
		$desc = $_POST['Rdesc'];
		$desc = str_replace(')', '', $desc);
		$desc = str_replace('"', '', $desc);
		$desc = str_replace(';', '', $desc);
		$desc = strip_tags($desc);

		$query = "UPDATE skills SET skilldesc=\"$desc\" WHERE champname='$champname' AND skillnumber=4";
		mysql_query($query);
	}  

	if (!empty($_POST['attackrange'])) {
		$range = $_POST['attackrange'];
		$query = "UPDATE stats SET attack_range='$range' WHERE champname='$champname'";
		mysql_query($query);
	} 

	if (!empty($_POST['damage'])) {
		$damage = $_POST['damage'];
		$query = "UPDATE stats SET attack_damage='$damage' WHERE champname='$champname'";
		mysql_query($query);
	} 

	if (!empty($_POST['hp'])) {
		$hp = $_POST['hp'];
		$query = "UPDATE stats SET hp='$hp' WHERE champname='$champname'";
		mysql_query($query);
	} 

	if (!empty($_POST['regen'])) {
		$regen = $_POST['regen'];
		$query = "UPDATE stats SET hp_regen='$regen' WHERE champname='$champname'";
		mysql_query($query);
	} 

	if (!empty($_POST['armor'])) {
		$armor = $_POST['primary'];
		$query = "UPDATE stats SET armor='$armor' WHERE champname='$champname'";
		mysql_query($query);
	} 

	header('location:result.php');

?>