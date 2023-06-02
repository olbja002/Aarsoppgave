<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<title>Registration</title>
</head>


<body>

	<a href="index.php">Homepage</a>
	<a href="register.php">Registration</a>
	<a href="explore.php">Explore</a>
	<a href="admin.php">Admin</a>
	<a href="faq.php">FAQ</a>

	<h2>Create user:</h2>

	<label for="firstname">First name:</label>
	<input type="text" id="firstname" name="firstname"><br><br>


	<label for="lastnamename">Last name:</label>
	<input type="text" id="lastname" name="lastname"><br><br>


	<label for="nickname">Nickname:</label>
	<input type="text" id="nickname" name="nickname"><br><br>

	<label for="email">Email:</label>
	<input type="email" id="email" name="email"><br><br>

	<label for="passw">Password:</label>
	<input type="password" id="passw" name="passw"><br><br>

	<button id=submit_new_user onclick="submit_new_user()">Submit</button>

	<br><br>


	<script src="js/script2.js"></script>

</body>
</html>