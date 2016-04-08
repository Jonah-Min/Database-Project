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
		$query = "UPDATE champion SET champname='$name' WHERE champname='$champname'";
		mysql_query($query);
		$_SESSION['champ'] = $name;
	}

	if (!empty($_POST['primary'])) {
		$primary = $_POST['primary'];
		$query = "UPDATE champion SET primaryrole='$primary' WHERE champname='$champname'";
		mysql_query($query);
	} 

	if (!empty($_POST['secondary'])) {
		$primary = $_POST['primary'];
		$query = "UPDATE champion SET secondary='$primary' WHERE champname='$champname'";
		mysql_query($query);
	} 

	if (!empty($_POST['passivename'])) {
		$primary = $_POST['passivename'];
		$query = "UPDATE skills SET skillname='$primary' WHERE champname='$champname' AND skillnumber=0";
		mysql_query($query);
	} 

	if (!empty($_POST['passivedesc'])) {
		$primary = $_POST['passivedesc'];
		$query = "UPDATE skills SET skilldesc='$primary' WHERE champname='$champname' AND skillnumber=0";
		mysql_query($query);
	} 

	if (!empty($_POST['Q'])) {
		$skill = $_POST['Q'];
		$query = "UPDATE skills SET skillname='$skill' WHERE champname='$champname' AND skillnumber=1";
		mysql_query($query);
	} 

	if (!empty($_POST['Qdesc'])) {
		$desc = $_POST['Qdesc'];
		$query = "UPDATE skills SET skilldesc='$desc' WHERE champname='$champname' AND skillnumber=1";
		mysql_query($query);
	} 

	if (!empty($_POST['W'])) {
		$skill = $_POST['W'];
		$query = "UPDATE skills SET skillname='$skill' WHERE champname='$champname' AND skillnumber=2";
		mysql_query($query);
	} 

	if (!empty($_POST['Wdesc'])) {
		$desc = $_POST['Wdesc'];
		$query = "UPDATE skills SET skilldesc='$desc' WHERE champname='$champname' AND skillnumber=2";
		mysql_query($query);
	} 

	if (!empty($_POST['E'])) {
		$skill = $_POST['E'];
		$query = "UPDATE skills SET skillname='$skill' WHERE champname='$champname' AND skillnumber=3";
		mysql_query($query);
	} 

	if (!empty($_POST['Edesc'])) {
		$desc = $_POST['Edesc'];
		$query = "UPDATE skills SET skilldesc='$desc' WHERE champname='$champname' AND skillnumber=3";
		mysql_query($query);
	}   

	if (!empty($_POST['R'])) {
		$skill = $_POST['R'];
		$query = "UPDATE skills SET skillname='$skill' WHERE champname='$champname' AND skillnumber=4";
		mysql_query($query);
	} 

	if (!empty($_POST['Rdesc'])) {
		$desc = $_POST['Rdesc'];
		$query = "UPDATE skills SET skilldesc='$desc' WHERE champname='$champname' AND skillnumber=4";
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