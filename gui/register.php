<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/validate.js">
		
	</script>
	</head>
	<body>
		<div id="centerform">
			<h1>Register</h1>
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
					<div>
						<label>Ponovi lozinku</label>
					</div>
					<div>
						<input type="password" id="confirm" class="fields">
						<div id="confirmError"></div>
					</div>
					<div>
						<label>Email adresa</label>
					</div>
					<div>
						<input type="email" id="email" class="fields">
						<div id="emailError"></div>
					</div>
					<div>
						<label>Smer</label>
					</div>
					<div>
						<select id="department" class="fields">
						<div id="departmentError"></select>
					</div>
					<div>
						<label>Godina</label>
					</div>
					<div>
						<select id="year" class="fields">
						<div id="yearError"></select>
					</div>
					<div id="submit">
						<input type="submit" id="submit" value="Registruj me"/>
					</div>
			</form>
		</div>
	</body>
</html>