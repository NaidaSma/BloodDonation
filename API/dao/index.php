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
		echo $_SERVER['PHP_SELF'];
		echo "<hr>";
		echo $_SERVER['SERVER_NAME'];
	 ?>
	 <h4>Register</h4>
	 <section id="register-form">
		 <form method="POST"action="register.class.php">
			 <input name="name" placeholder="Name">
			 <input name="surname" placeholder="Surname"><br>
			 <input name="dateofBirth" placeholder="Date of birth"><br>
			 <h3>Gender</h3>
			 <input type="radio" name="gender" value="Female"/>Female
			 <input type="radio" name="gender" value="Male"/>Male
			 <h3>Blood type</h3>
			 <input type="checkbox" name="bloodtype"/>A+<br>
			  <input type="checkbox" name="bloodtype"/>A-<br>
				 <input type="checkbox" name="bloodtype"/>B+<br>
				  <input type="checkbox" name="bloodtype"/>B-<br>
					 <input type="checkbox" name="bloodtype"/>0+<br>
					  <input type="checkbox" name="bloodtype"/>0-<br>
						 <input type="checkbox" name="bloodtype"/>AB+<br>
						  <input type="checkbox" name="bloodtype"/>AB-<br>
			 <input name="address" placeholder="Address">
			 <input name="city" placeholder="City"><br>
				<input name="telephone" placeholder="Telephone number">
				<input name="email" placeholder="E-mail"><br>
				 <input name="password" placeholder="Password"><br>
			 <input type="button" value="Register">

		 </form>
	 </section>
 </body>
</html>
