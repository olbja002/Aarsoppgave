<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
</head>
<body>
	<a href="index.php">Homepage</a>
	<a href="register.php">Registration</a>
	<a href="explore.php">Explore</a>
	<a href="admin.php">Admin</a>
	<a href="faq.php">FAQ</a>
	
	<form action="login.php" method="post">
		<h2>Login</h2>
		<label for="nickname">Username:</label>
		<input name="nickname" type="text">
		<br><br>
		<label for="md5_pass">Password:</label>
		<input name="md5_pass" type="password">
		<input type="submit" value="Login">
	</form>
	<script src="script2.js"></script>
</body>
</html>