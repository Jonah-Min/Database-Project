<html>
<head>

	<link rel='stylesheet' href='create.css' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>

</head>
<body>

	<div id='header'>
		<h1> Create New Champion </h1>
	</div>	

	<form method='post' action='new.php'>
		<table>
			<tr>
				<td><h3>Champion Name</h3></td>
				<td><input type='text' name='champion' placeholder='Champion Name'></td>
			</tr>

			<tr>
				<td><h3>Image Url</h3></td>
				<td><input type='text' name='championimg' placeholder='Champion Image URL'></td>
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
				<td colspan='2'><h3>Passive</h3></td>
			</tr>

			<tr>
				<td>
					<input type='text' name='passive' placeholder='Passive'><br>
					<input type='text' name='passiveimg' placeholder='Passive Image URL'>
				</td>
				<td>
					<textarea rows='3' cols='35' name='passivedesc' placeholder='Skill 1 Description'></textarea><br>
				</td>
			</tr>

			<tr>
				<td colspan='2'><h3>Champion Skills</h3></td>
			</tr>

			<tr>
				<td>
					<input type='text' name='skill1' placeholder='Skill 1'><br>
					<input type='text' name='skill1url' placeholder='Skill 1 Image URL'>
				</td>
				<td>
					<textarea rows='3' cols='35' name='description1' placeholder='Skill 1 Description'></textarea><br>
				</td>
			</tr>	

			<tr>
				<td>
					<input type='text' name='skill2' placeholder='Skill 2' class='skill'><br>
					<input type='text' name='skill2url' placeholder='Skill 2 Image URL'>
				</td>
				<td>
					<textarea rows='3' cols='35' name='description2' placeholder='Skill 2 Description'></textarea><br>
				</td>
			</tr>	

			<tr>
				<td>
					<input type='text' name='skill3' placeholder='Skill 3' class='skill'><br>
					<input type='text' name='skill3url' placeholder='Skill 3 Image URL'>
				</td>
				<td>
					<textarea rows='3' cols='35' name='description3' placeholder='Skill 3 Description'></textarea><br>
				</td>
			</tr>	

			<tr>
				<td>
					<input type='text' name='skill4' placeholder='Skill 4' class='skill'><br>
					<input type='text' name='skill4url' placeholder='Skill 4 Image URL'>
				</td>
				<td>
					<textarea rows='3' cols='35' name='description4' placeholder='Skill 4 Description'></textarea><br>
				</td>
			</tr>	

			<tr>
				<td><h3>Attack Range</h3></td>
				<td><input type='text' name='attackrange' placeholder="Attack Range"></td>
			</tr>

			<tr>
				<td><h3>Attack Damage</h3></td>
				<td><input type='text' name='damage' placeholder="Attack Damage"></td>
			</tr>

			<tr>
				<td><h3>HP</h3></td>
				<td><input type='text' name='hp' placeholder="HP"></td>
			</tr>

			<tr>
				<td><h3>HP Regen</h3></td>
				<td><input type='text' name='regen' placeholder="HP Regen"></td>
			</tr>			

			<tr>
				<td><h3>Armor</h3></td>
				<td><input type='text' name='armor' placeholder="Armor"></td>
			</tr>

			<tr>
				<td colspan='2'><input type='submit' value='Create New Champion!' id='update'></td>
			</tr>

	</table>
	</form>	

	<form method='post' action='index.php'>
		<input type='submit' value='Return to Champions' id='directory'>
	</form>

</body>
