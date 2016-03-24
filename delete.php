<?php

	session_start();

	$connect = mysql_connect('localhost', 'root', '');

	if (!$connect) {
		die('Could Not Connect: ' . mysql_error());
	}

	mysql_select_db('league');

	$champion = $_SESSION['champ'];

	$query = "DELETE FROM champion WHERE champname='$champion'";

	mysql_query($query);
	
	$_SESSION['champ'] = '';

	header('location:index.php');

?>