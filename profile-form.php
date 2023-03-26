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
			echo "<p>Birthdate is $birthdate.</p>";
			echo "<p>Email address is $email.</p>";
			echo "<p>Enrolled in the $program program.</p>";
			echo "<p>Favorite color is $favorite_color.</p>";
			echo "<p>Superpower level is $superpower_level.</p>";
		}
	?>

<h1>Enter Data</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="complete_name" /><br />
    Birthdate: <input type="date" name="birthdate" /><br />
    Email Address: <input type="email" name="email" /><br />
    Program:
        <select name="program">
            <option value="BSCS">B.S. Computer Science</option>
            <option value="BSIT">B.S. Information Technology</option>
            <option value="BSIS">B.S. Information Systems</option>
        </select>
    <br />
    Favorite Color: <input type="color" name="favorite_color" /><br />
    Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br />
    <input type="submit" name="submit" value="Submit">
</form>

</body>