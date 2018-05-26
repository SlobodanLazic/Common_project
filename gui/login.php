<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/validate.js">
		
	</script>
	</head>
	<body>
		<div id="centerform">
			<h1>Log In</h1>
			<form method="POST">
					<div>
						<label>Korisničko ime</label>
					</div>
					<div>
						<input type="text" id="username" class="fields">
						<div id="usernameError"></div>
					</div>
					<div>
						<label>Lozinka</label>
					</div>
					<div>
						<input type="password" id="password" class="fields">
						<div id="passwordError"></div>
					</div>
					<div id="register">
						<button type="button" id="register" value="register"><a href="register.php">Registruj se</a>
						</button>
					</div>
					<div id="submit">
						<input type="submit" id="submit" value="Prijavi se"/>
					</div>
			</form>
		</div>
	</body>
</html>