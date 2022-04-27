<!DOCTYPE html!>
<html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Blood Donation Managment System</title>
	<link href="css/style.css" rel="Stylesheet">
</head>
<body>
	<?php
		echo "Hello World!";
		echo "<hr>";
		echo $_SERVER['PHP_SELF'];
		echo "<hr>";
		echo $_SERVER['SERVER_NAME'];
	 ?>
	 <h4>Login</h4>
	 <section id="register-form">
		 <form method="POST"action="register.class.php">
			 <input name="name" placeholder="Name">
			 <input name="surname" placeholder="Surname">
			 <input name="birthday" placeholder="Birthday"><br>
			 <input type="submit">
		 </form>
	 </section>
 </body>
</html>
