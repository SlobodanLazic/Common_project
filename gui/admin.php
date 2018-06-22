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
		<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="centerform">
			<h1>Admin</h1>
			<form method="POST">
				<div class="clearfix">
					<div class="register">
						<button type="add" class="links" id="add" name="add" value="dodaj"><a href="prijava.php">Dodaj</a></button>
					</div>
				</div>
				<div>
					<div class="flexbox">
						<div class="register">
							<button type="view" class="links" id="view" name="view" value="view"><a href="vidi.php">Vidi</a></button>	
						</div>
					</div>
				</div>
				<div class="clearfix">
					<div class="register">
						<button type="logout" class="links" id="logout" name="logout" value="Logout"><a href="logout.php">Logout</a></button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>