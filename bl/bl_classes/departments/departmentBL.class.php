<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/DepartmentDAL.class.php");
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_models/departmentDM.class.php");
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_models/departmentBM.class.php");
	
	class DepartmentBL
	{
		public function GetDepartments()
		{
			$DepartmentDAL = new DepartmentDAL();
			$departmentDM = $DepartmentDAL->GetDepartments();
			
			$departments = MapDepartmentsDM2BM($departmentsDM);
			
			return $departments;
		}
		
		private function MapDepartmentsDM2BM($departmentsDM)
		{
			if ($departmentsDM != null && is_array($departmentsDM) && count($departmentsDM) > 0)
			{
				foreach($departmentsDM as $departmentDM)
				{
					$departmentBM = new departmentDM();
					$departmentBM->SetDepartment(
													$departmentDM->GetID_SMER(),
													$departmentDM->GetNAZIV_SMERA()
												);
					$departments[] = $departmentBM;
				}
			}
			
			return ISSET($departments) ? $departments : null;
		}
	}
?>