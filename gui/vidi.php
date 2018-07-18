<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_classes/projects/projectsBL.class.php");
	
	$ProjectBL = new ProjectBL();
	$projects = $ProjectBL->GetProjects();
	var_dump($projects);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vidi</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css"  href="fa/css/all.css">
	</head>
	<body>
		<div id="centerform">
			<form>
				<div id="filtration">
				<span>Filtracija</span>
					<span>
						<select name="table">
							<option value="1">Naziv</option>
							<option value="2">Smer</option>
							<option value="3">Rok</option>
							<option value="4">Status</option>
						</select>
					</span>
				</div>
				<div class="clearfix">
					<?php	
						echo "<table>";
						for($i=1;$i<=4;$i++){
							echo "<tr>";
								switch($i)
								{
									case 1:
										echo "	<th>Naziv</th>							
												<th>Smer</th>							
												<th>Rok</th>							
												<th>Status</th>
												<th></th>
											 ";
											break;
									default:
										printf( "<td>%s</td>
											  <td>a</td>
											  <td>a</td>
											  <td>a</td>
											  <td><i class='fas fa-check'></i>
												  <i class='fas fa-times'></i>
											  </td>
											  ",$projects
											  );
										  break;
								}
							
							echo "</tr>";
						}
						echo "</table>";
					?>
				</div>
				<div class="clearfix">
					<div class="register">
						<button type="button" name="register" value="register">
							<a href="admin.php">&laquo;&laquo;&laquo;Nazad</a>
						</button>
					</div>
				</div>
			</form>	
		</div>	
	</body>
</html>