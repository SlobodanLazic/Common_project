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
											 $ProjectDM->GetNAZIV_SMERA(),
											 $ProjectDM->GetID_STATUS(),
											 $ProjectDM->GetNAZIV(),//statusa prijave
											 $ProjectDM->GetOPIS()//statusa prijave
											);
							$projects[] = $ProjectBM;//putting those attributes inside an object into array
				}
			}
			
			return isset($projects) ? $projects : null;//then we are returning that array into GetProjects()
		}
		
		public function SetProjects()
		{
			$nameoftheProject = trim($_POST["projectname"]);
			$departmentName = $_POST["departments"];
			$startdate = trim($_POST["fromdate"]);
			$enddate = trim($_POST["todate"]);
			$startdate = strtotime($startdate);
			$enddate = strtotime($enddate);
			
			switch($departmentName)	
			{
				case "1":
					$departmentName ="PHP Web Development";
					break;
				case "2":
					$departmentName ="Software Development";
					break;
				case "3":
					$departmentName ="Microsoft Web Development";
					break;
				case "4":
					$departmentName ="Microsoft Windows Development";
					break;
				case "5":
					$departmentName ="Software Engineering";
					break;	
			}
			
			if ($enddate < $startdate && $nameoftheProject != "" && $departmentName != ""
				&& $startdate != null && $enddate != null)
			{
				$ProjectsBM = new ProjectsBM();
				$ProjectsBM->SetProjects($projectId,$nameoftheProject,$startdate,$enddate,$departmentId,$departmentName);
				
				$ProjectsDM = $this->MapProjectsBM2DM($ProjectsBM);
				
				$ProjectsDAL = new ProjectsDAL;
				$id = $ProjectsDAL->SetProjects($ProjectsDM);
				
				if ($id == -1)
				{
					print("Error, you did not submit project.Try again");
				}
				else
				{
					print("Project has been sucesfully submited.");
				}
			}
		}
		
		private function MapProjectsBM2DM($ProjectsBM)
		{
			$ProjectsDM = new ProjectsDM();
			$ProjectsDM->SetProjects( $ProjectsBM->GetID_CHECK_IN,
									  $ProjectsBM->GetNAME_CHECK_IN,									  
									  $ProjectsBM->GetFROM_DATE,									  
									  $ProjectsBM->GetTO_DATE,									  
									  $ProjectsBM->GetID_DEPARTMENT,									  
									  $ProjectsBM->GetDEPARTMENT_NAME,
									  $ProjectsBM->GetID_STATUS,
									  $ProjectsBM->GetSTATUS_NAME,
									  $ProjectsBM->GetSTATUS_DESCRIPTION
									);
			return $ProjectsDM;
		}
	}
?>