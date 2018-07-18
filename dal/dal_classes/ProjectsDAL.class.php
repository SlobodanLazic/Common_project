<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/db_connection.php");
	include_once(FILEPATH . "dal/dal_models/projectsDM.class.php");
	
	class ProjectsDAL /* this class communicates with database sending query to get all projects from database */
	{
		function GetProjects()
		{
			$query = "	SELECT 
							p.ID_PRIJAVA,
							p.NAZIV_PRIJAVE,
							p.OD_KOG_DATUMA,
							p. DO_KOG_DATUMA,
							s.ID_SMER,
							s.NAZIV_SMERA
						FROM PRIJAVA AS P
						JOIN SMER_PRIJAVA AS sm ON sm.ID_PRIJAVA = p.ID_PRIJAVA
						JOIN SMER AS s ON sm.ID_SMER = s.ID_SMER
					 ";
			$projectsResult = DBConn::Select($query);
			
			if ($projectsResult != null && is_array($projectsResult) && count($projectsResult > 0))
			{
				foreach($projectsResult as $projectResult)
				{
					$project = new ProjectsDM();
					$project->SetProject($projectResult["ID_PRIJAVA"],
										 $projectResult["NAZIV_PRIJAVE"],
										 $projectResult["OD_KOG_DATUMA"],
										 $projectResult["DO_KOG_DATUMA"],
										 $projectResult["ID_SMER"],
										 $projectResult["NAZIV_SMERA"]
										 );
						$projects[]=$project;
				}
				
				return isset($projects) ? $projects : null;
			}
		}
	}
?>