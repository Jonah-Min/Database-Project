<html>
<head>

	<link rel='stylesheet' href='create.css' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>

</head>
<body>

	<div id='header'>
		<h1> Create New Champion </h1>
	</div>	

	<form method='post' action='update.php'>
		<div id='newchampform'>
			<h3>Champion Name</h3>
			<input type='text' name='champion' placeholder='Champion Name'>

			<h3>Passive</h3>
			<input type='text' name='passive' placeholder='Passive'>

			<h3>Champion Skills</h3>
			<input type='text' name='skill1' placeholder='Skill 1'><br>
			<input type='text' name='skill2' placeholder='Skill 2'><br>
			<input type='text' name='skill3' placeholder='Skill 3'><br>
			<input type='text' name='skill4' placeholder='Skill 4'><br>

			<input type='submit' value='Create New Champion!'>
		</div>
	</form>	

</body>