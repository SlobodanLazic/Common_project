<?php
	
	require_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_classes/departments/departmentBL.class.php");
	require_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_classes/user/registerbl.class.php");
	
	$DepartmentBL = new DepartmentBL();
	$departments = $DepartmentBL->GetDepartments();
	
	if (ISSET($_POST["submit"],$_POST["username"],$_POST["password"],$_POST["confirm"],$_POST["email"],$_POST["department"]) &&  $_POST["password"] === $_POST["confirm"])
	{
		$RegisterBL = new RegisterBL();
		$RegisterBL->RegisterNewUser();
	}
?>
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
			<form method="POST" action="#" enctype="multipart/form-data">
					<div>
						<label>Ime</label>
					</div>
					<div>
						<input type="text" id="firstName" class="fields">
						<div id="firstNameError"></div>
					</div>
					<div>
						<label>Prezime</label>
					</div>
					<div>
						<input type="text" id="lastName" class="fields">
						<div id="lastNameError"></div>
					</div>
					<div>
						<label>Email adresa</label>
					</div>
					<div>
						<input type="email" id="email" class="fields">
						<div id="emailError"></div>
					</div>
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
						<label>Smer</label>
					</div>
					<div>
						<select id="department" class="fields">
							<option value="-1">Smer</option>
							<?php
								if (isset($departments) && $departments != null)
								{
									foreach($departments as $department)
									{
										printf("<option value='%s'>%s</option>",
										$department->GetID_DEPARTMENT(),$department->GetDEPARTMENT_NAME()
										);
									}
								}
							?>
						</select>
						<div id="departmentError"></div>
					</div>
					<div>
						<label>Godina</label>
					</div>
					<div>
						<select id="year" class="fields">
							<option value="-1" selected>Školska godina</option>
						</select>
						<div id="yearError"></div>
					</div>
					<div id="submit">
						<input type="submit" id="submit" value="Registruj me"/>
					</div>
					<div class="register">
						<button type="button" name="register" value="register">
							<a href="login.php">&laquo;&laquo;&laquo;Nazad</a>
						</button>
					</div>
			</form>
		</div>
	</body>
</html>