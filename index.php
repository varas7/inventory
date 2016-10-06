<!DOCTYPE html>
<html>
	<head>
		<title>Inventory</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  		<script src="js/jquery-3.1.0.min.js"></script>
  		<script src="css/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container" id="logo">
			<a class='logo' href="index.php">Inventory Management System</a>
		</div>
		<h1>Login</h1>
		<form action="login.php" method="POST">
			<input type="text" id="username" placeholder="Enter your username" name="username">
			<input type="password" id="pass" placeholder="Enter your password" name="pwd">
			<input type="submit" id="sub" class="btn btn-primary" name="login">
		</form>
	</body>
</html>