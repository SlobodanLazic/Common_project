<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/db_connection.php");
	include_once(FILEPATH . "dal/dal_models/departmentDM.class.php");
	
	class DepartmentDAL
	{
		public function GetDepartments()
		{
			$query = sprintf("
								SELECT s.ID_SMER,s.NAZIV_SMERA
								FROM SMER s
 							");
			$departmentsResult = DBConn::Select($query);
			
			if ($departmentsResult != null && is_array($departmentsResult) && count($departmentsResult) > 0)
			{
				foreach($departmentsResult as $departmentResult)
				{
					$department = new departmentDM();
					$department->SetDepartment($departmentResult["ID_SMER"],$departmentResult["NAZIV_SMERA"]);
					$departments[] = $department;
				}
			}
			
			return isset($departments) ? $departments : null;
		}
	}
?>