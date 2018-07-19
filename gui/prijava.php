<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_classes/departments/departmentBL.class.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_classes/projects/projectsBL.class.php");
	
	$DepartmentBL = new DepartmentBL;
	$departments = $DepartmentBL->GetDepartments();
	
	if(ISSET($_POST["projectname"]) && $_POST["departments"] != "-1")
	{	
		$insertProjectBL = new projectBL();
		$insertProjectBL->SetProjects();
	}

?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Prijava</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css"  href="fa/css/all.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	</head>
	<body>
		<div id="centerform">
			<form method="POST" action="#">
			<div>
				<div>
					<label>Naziv projekta</label>
				</div>
				<div>
					<input type="text" name="projectname" class="fields">
				</div>
				<div>
					<label>Smer</label>
				</div>
				<div>
					<select id="department" name="departments" class="fields">
						<option value="-1" selected hidden>---Smer---</option>
						<?php
							foreach ($departments as $department)
							{
								printf(
										"<option value='%s'>%s</option>",$department->GetID_DEPARTMENT(),$department->GetDEPARTMENT_NAME()
									);
							}
						?>
					</select>
				</div>
				<div>
					<label>Od</label>
				</div>
				<div>
					<input type="date" name="fromdate" class="fields"/>
				</div>
				<div>
					<label>Do</label>
				</div>
				<div>
					<input type="date" name="todate" class="fields"/>
				</div>
				<div class="register">
					<button type="button" name="register" value="register">
						<a href="admin.php">&laquo;&laquo;&laquo;Nazad</a>
					</button>
				</div>
				<div id="checkbutton" class="flexbox">
					<div class="submit">
						<button type="submit" name="submit"><i class='fas fa-check'></i></button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</body>
</html>