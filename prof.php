<!DOCTYPE html>
<html>
<head>
	<title>Profile Form</title>
	<style>
		form {
			width: 50%;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		h2 {
			text-align: center;
		}
		input[type="submit"] {
			display: block;
			margin: 0 auto;
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])) {
			$name = $_POST['complete_name'];
			$birthdate = $_POST['birthdate'];
			$email = $_POST['email'];
			$program = $_POST['program'];
			$favorite_color = $_POST['favorite_color'];
			$superpower_level = $_POST['superpower_level'];
			echo "<h2>Hello, $name!</h2>";
			echo "<p>Your birthdate is $birthdate.</p>";
			echo "<p>Your email address is $email.</p>";
			echo "<p>You are enrolled in the $program program.</p>";
			echo "<p>Your favorite color is $favorite_color.</p>";
			echo "<p>Your superpower level is $superpower_level.</p>";
		}
	?>
    
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h2>Profile Form</h2>
		<label for="complete_name">Complete Name:</label>
		<input type="text" id="complete_name" name="complete_name" required>
		<label for="birthdate">Birthdate:</label>
		<input type="date" id="birthdate" name="birthdate" required>
		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required>
		<label for="program">Program:</label>
		<select id="program" name="program" required>
			<option value="">--Please choose an option--</option>
			<option value="BSCS">BSCS</option>
			<option value="BSIT">BSIT</option>
		</select>
		<label for="favorite_color">Favorite Color:</label>
		<input type="color" id="favorite_color" name="favorite_color" required>
		<label for="superpower_level">Superpower Level:</label>
		<input type="range" id="superpower_level" name="superpower_level" min="1" max="10" required>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>