<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: Login.html');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<img src=”ima1ges.jpeg” width=”420” height=”500” align=”left”>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Onanhadi Pentecostal Protestant Church</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				<a href="Form.html"><i class="fas fa-user-circle"></i>Add Members</a>
				<a href="register.php"><i class="fas fa-user-circle"></i>Register Users</a>

			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome , <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>