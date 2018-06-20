<?php
	class DepartmentBM
	{
		private $ID_DEPARTMENT;
		private $DEPARTMENT_NAME;
		
		public function SetID_DEPARTMENT($ID_DEPARTMENT)
		{
			$this->ID_DEPARTMENT = $ID_DEPARTMENT;
		}
		
		public function SetDEPARTMENT_NAME($DEPARTMENT_NAME)
		{
			$this->DEPARTMENT_NAME = $DEPARTMENT_NAME;
		}
		
		public function GetID_DEPARTMENT()
		{
			return $this->ID_DEPARTMENT;
		}
		
		public function GetDEPARTMENT_NAME()
		{
			return $this->DEPARTMENT_NAME;
		}
		
		public function SetDepartments($ID_DEPARTMENT, $DEPARTMENT_NAME)
		{
			$this->ID_DEPARTMENT = $ID_DEPARTMENT;
			$this->DEPARTMENT_NAME = $DEPARTMENT_NAME;
		}
	}
?>