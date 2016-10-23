<!DOCTYPE html>
<html>
	<head>
		<title>Inventory</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  		<script src="js/jquery-3.1.0.min.js"></script>
  		<script src="css/bootstrap/js/bootstrap.min.js"></script>
			<script src="js/validator.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="container" id="logo">
			<a class='logo' href="index.php">Inventory Management System</a>
		</div>
		<h1>Login</h1>
			<form action="login.php" method="POST" data-toggle="validator" role="form">
				<div class="form-group">
					<label for="username" class="control-label"></label>
				<input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" data-error="Please enter Username" required>
				<div class="help-block with-errors"></div>
			</div>
				<div class="form-group">
					<label for="pass" class="control-label"></label>
				<input type="password" class="form-control" id="pass" placeholder="Enter your password" name="pwd" data-error="Please enter Username" required>
				<div class="help-block with-errors"></div>
			</div>
				<input type="submit" id="sub" class="btn btn-primary" name="login">
			</form>

		</div>


	</body>
</html>
