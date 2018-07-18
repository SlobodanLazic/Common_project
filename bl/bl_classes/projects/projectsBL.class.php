<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/ProjectsDAL.class.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_models/projectsDM.class.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_models/projectsBM.class.php");
	
	class ProjectBL
	{
		public function GetProjects()
		{
			$ProjectsDAL = new ProjectsDAL;
			$projectsBM = $ProjectsDAL->GetProjects();
			
			$projects = $this->MapProjectsDM2BM($projectsBM);
			
			return $projects;//this array is the same as array returned from the MapProjectsDM2BM function
		}
		//this function is mapping $projectsDM to $projectsBM objects
		private function MapProjectsDM2BM($projectsBM)
		{
			if ($projectsBM != null && is_array($projectsBM) && count($projectsBM) > 0)
			{
				foreach ($projectsBM as $projectBM)
				{	//so we are basicly setting an attributes from DM to BM by calling ProjectBM class method
					$ProjectBM = new ProjectsBM();
					$ProjectBM->SetProjects( $ProjectDM->GetID_PRIJAVA(),
											 $ProjectDM->GetNAZIV_PRIJAVE(),
											 $ProjectDM->GetOD_KOG_DATUMA(),
											 $ProjectDM->GetDO_KOG_DATUMA(),
											 $ProjectDM->GetID_SMER(),
											 $ProjectDM->GetNAZIV_SMERA()
											);
							$projects[] = $ProjectBM;//putting those attributes inside an object into array
				}
			}
			
			return isset($projects) ? $projects : null;//then we are returning that array into GetProjects()
		}
	}
?>