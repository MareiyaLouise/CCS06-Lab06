<html>
    <title>Thankyou</title>
    <style>
		p {
			font-size: 20px;
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])) {
			$complete_name = $_POST['complete_name'];
			$email = $_POST['email'];
			$type = $_POST['type'];
			$satisfaction_level = $_POST['satisfaction_level'];
			$message = $_POST['message'];

			echo "<h1>Thank you!</h1>";
			echo "<p>Received $type message from $complete_name ($email)";
            echo "<p>$message";
            echo "<p>Satisfaction Level: $satisfaction_level";
        }
