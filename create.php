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
		<table>
			<tr>
				<td><h3>Champion Name</h3></td>
				<td><input type='text' name='champion' placeholder='Champion Name'></td>
			</tr>

			<tr>
				<td><h3>Primary Role</h3></td>
				<td><input type='text' name='primary' placeholder='Primary Role'></td>
			</tr>

			<tr>
				<td><h3>Secondary Role</h3></td>
				<td><input type='text' name='secondary' placeholder='Secondary Role'></td>
			</tr>	

			<tr>
				<td><h3>Passive</h3></td>
				<td><input type='text' name='passive' placeholder='Passive'></td>
			</tr>

			<tr>
				<td colspan='2'><h3>Champion Skills</h3></td>
			</tr>

			<tr>
				<td><input type='text' name='skill1' placeholder='Skill 1' class='skill'><br></td>
				<td>
					<textarea rows='3' cols='35' name='description1' placeholder='Skill 1 Description'></textarea><br>
				</td>
			</tr>	

			<tr>
				<td><input type='text' name='skill2' placeholder='Skill 2' class='skill'><br></td>
				<td>
					<textarea rows='3' cols='35' name='description2' placeholder='Skill 2 Description'></textarea><br>
				</td>
			</tr>	

			<tr>
				<td><input type='text' name='skill3' placeholder='Skill 3' class='skill'><br></td>
				<td>
					<textarea rows='3' cols='35' name='description3' placeholder='Skill 3 Description'></textarea><br>
				</td>
			</tr>	

			<tr>
				<td><input type='text' name='skill4' placeholder='Skill 4' class='skill'><br></td>
				<td>
					<textarea rows='3' cols='35' name='description4' placeholder='Skill 4 Description'></textarea><br>
				</td>
			</tr>	

			<tr>
				<td colspan='2'><input type='submit' value='Create New Champion!'></td>
			</tr>

	</table>
	</form>	

</body>