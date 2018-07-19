<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/db_connection.php");
	include_once(FILEPATH . "dal/dal_models/projectsDM.class.php");
	
	class ProjectsDAL /* this class communicates with database sending query to get all projects from database */
	{
		public function GetProjects()
		{
			$query = "	SELECT 
							p.ID_PRIJAVA,
							p.NAZIV_PRIJAVE,
							p.OD_KOG_DATUMA,
							p. DO_KOG_DATUMA,
							s.ID_SMER,
							s.NAZIV_SMERA,
							ps.ID_STATUS,
							ps.NAZIV,
							ps.OPIS
						FROM PRIJAVA AS P
						JOIN PRIJAVA_STATUS AS ps ON ps.ID_STATUS = p.ID_STATUS
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
										 $projectResult["ID_STATUS"],
										 $projectResult["NAZIV"],
										 $projectResult["OPIS"]
										 );
						$projects[]=$project;
				}
				
				return isset($projects) ? $projects : null;
			}
		}
		
		public function SetProjects($ProjectsDM)
		{
			$query = sprintf("	
							BEGIN
								INSERT INTO PRIJAVA(ID_PRIJAVA,NAZIV_PRIJAVE,OD_KOG_DATUMA,DO_KOG_DATUMA,'')
								VALUES ('','%s','%d','%d','');
								INSERT INTO SMER(ID_SMER,NAZIV_SMERA)
								VALUES ('','%s')
								INSERT INTO PRIJAVA_STATUS(ID_PRIJAVA,NAZIV,OPIS)
								VALUES ('','1','');
							COMMIT",
							$ProjectsDM->GetNAZIV_PRIJAVE(),$ProjectsDM->GetOD_KOG_DATUMA(),$ProjectsDM->GetDO_KOG_DATUMA()
							,$ProjectsDM->GetDEPARTMENT_NAME
								);
			$resultArray = DBConn::Insert($query);
			
			if (count($resultArray) == 1)
			{
				$id = $resultArray["insert_id"];
			}
			else if (count($resultArray) == 2)
			{
				$errorMsg = $resultArray["error"];
				$errorLogFilePath = $_SERVER["DOCUMENT_ROOT"] . "Common_project/errorlog.txt";
				error_log($errorMsg,3,$errorLogFilePath);
			}
			
			return $id;
		}
	}
?>