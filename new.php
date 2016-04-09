<?php
	
	session_start();

	$connect = mysql_connect('localhost', 'root', '');

	if (!$connect) {
		die('Could Not Connect: ' . mysql_error());
	}

	mysql_select_db('league');

	$champname = $_POST['champion'];

	$champname = str_replace(')', '', $champname);
	$champname = str_replace('\'', '', $champname);
	$champname = str_replace(';', '', $champname);
	$champname = strip_tags($champname);

	$champimg = $_POST['championimg'];

	$champimg = str_replace(')', '', $champimg);
	$champimg = str_replace('\'', '', $champimg);
	$champimg = str_replace(';', '', $champimg);
	$champimg = strip_tags($champimg);

	$primary = $_POST['primary'];

	$primary = str_replace(')', '', $primary);
	$primary = str_replace('\'', '', $primary);
	$primary = str_replace(';', '', $primary);
	$primary = strip_tags($primary);

	$secondary = $_POST['secondary'];

	$secondary = str_replace(')', '', $secondary);
	$secondary = str_replace('\'', '', $secondary);
	$secondary = str_replace(';', '', $secondary);
	$secondary = strip_tags($secondary);

	$default = $_POST['default'];

	$default = str_replace(')', '', $default);
	$default = str_replace('\'', '', $default);
	$default = str_replace(';', '', $default);
	$default = strip_tags($default);


	$passive = $_POST['passive'];

	$passive = str_replace(')', '', $passive);
	$passive = str_replace('\'', '', $passive);
	$passive = str_replace(';', '', $passive);
	$passive = strip_tags($passive);

	$passiveimg = $_POST['passiveimg'];

	$passiveimg = str_replace(')', '', $passiveimg);
	$passiveimg = str_replace('\'', '', $passiveimg);
	$passiveimg = str_replace(';', '', $passiveimg);
	$passiveimg = strip_tags($passiveimg);

	$passivedesc = $_POST['passivedesc'];

	$passivedesc = str_replace(')', '', $passivedesc);
	$passivedesc = str_replace('\'', '', $passivedesc);
	$passivedesc = str_replace(';', '', $passivedesc);
	$passivedesc = strip_tags($passivedesc);


	$skill1 = $_POST['skill1'];

	$skill1 = str_replace(')', '', $skill1);
	$skill1 = str_replace('\'', '', $skill1);
	$skill1 = str_replace(';', '', $skill1);
	$skill1 = strip_tags($skill1);

	$skill1url = $_POST['skill1url'];

	$skill1url = str_replace(')', '', $skill1url);
	$skill1url = str_replace('\'', '', $skill1url);
	$skill1url = str_replace(';', '', $skill1url);
	$skill1url = strip_tags($skill1url);

	$description1 = $_POST['description1'];

	$description1 = str_replace(')', '', $description1);
	$description1 = str_replace('\'', '', $description1);
	$description1 = str_replace(';', '', $description1);
	$description1 = strip_tags($description1);


	$skill2 = $_POST['skill2'];

	$skill2 = str_replace(')', '', $skill2);
	$skill2 = str_replace('\'', '', $skill2);
	$skill2 = str_replace(';', '', $skill2);
	$skill2 = strip_tags($skill2);

	$skill2url = $_POST['skill2url'];

	$skill2url = str_replace(')', '', $skill2url);
	$skill2url = str_replace('\'', '', $skill2url);
	$skill2url = str_replace(';', '', $skill2url);
	$skill2url = strip_tags($skill2url);

	$description2 = $_POST['description2'];

	$description2 = str_replace(')', '', $description2);
	$description2 = str_replace('\'', '', $description2);
	$description2 = str_replace(';', '', $description2);
	$description2 = strip_tags($description2);


	$skill3 = $_POST['skill3'];

	$skill3 = str_replace(')', '', $skill3);
	$skill3 = str_replace('\'', '', $skill3);
	$skill3 = str_replace(';', '', $skill3);
	$skill3 = strip_tags($skill3);

	$skill3url = $_POST['skill3url'];

	$skill3url = str_replace(')', '', $skill3url);
	$skill3url = str_replace('\'', '', $skill3url);
	$skill3url = str_replace(';', '', $skill3url);
	$skill3url = strip_tags($skill3url);

	$description3 = $_POST['description3'];

	$description3 = str_replace(')', '', $description3);
	$description3 = str_replace('\'', '', $description3);
	$description3 = str_replace(';', '', $description3);
	$description3 = strip_tags($description3);


	$skill4 = $_POST['skill4'];

	$skill4 = str_replace(')', '', $skill4);
	$skill4 = str_replace('\'', '', $skill4);
	$skill4 = str_replace(';', '', $skill4);
	$skill4 = strip_tags($skill4);

	$skill4url = $_POST['skill4url'];

	$skill4url = str_replace(')', '', $skill4url);
	$skill4url = str_replace('\'', '', $skill4url);
	$skill4url = str_replace(';', '', $skill4url);
	$skill4url = strip_tags($skill4url);

	$description4 = $_POST['description4'];

	$description4 = str_replace(')', '', $description4);
	$description4 = str_replace('\'', '', $description4);
	$description4 = str_replace(';', '', $description4);
	$description4 = strip_tags($description4);
	

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