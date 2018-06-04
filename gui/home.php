<?php
	if (session_id() === "")
	{
		session_start();
	}
	require_once($_SERVER["DOCUMENT_ROOT"] .  "/Common_project/bl/bl_classes/user/loginbl.class.php");
	$loginBL = new LoginBL();
	$loginBL->CheckUserSessionData();
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="centerform">
			<h1>Home</h1>
			<form method="POST">
				<div>
					Ulogovan!!!
				</div>
				<div class="register">
					<button type="logout" class="links" id="logout" name="logout" value="Logout"><a href="logout.php">Logout</a></button>
				</div>
			</form>
		</div>
	</body>
</html>