<?php
	class ProjectsBM
	{
		private $ID_CHECK_IN;
		private $NAME_CHECK_IN;
		private $FROM_DATE;
		private $TO_DATE;
		private $ID_DEPARTMENT;
		private $DEPARTMENT_NAME;
		
		public function SetID_CHECK_IN($ID_CHECK_IN)
		{
			$this->ID_CHECK_IN = $ID_CHECK_IN;
		}
		
		public function SetNAME_CHECK_IN($NAME_CHECK_IN)
		{
			$this->NAME_CHECK_IN = $NAME_CHECK_IN;
		}
		
		public function SetFROM_DATE($FROM_DATE)
		{
			$this->FROM_DATE = $FROM_DATE;
		}
		
		public function SetTO_DATE($TO_DATE)
		{
			$this->TO_DATE = $TO_DATE;
		}
		
		public function SetID_DEPARTMENT($ID_DEPARTMENT)
		{
			$this->ID_DEPARTMENT = $ID_DEPARTMENT;
		}
		
		public function SetDEPARTMENT_NAME($DEPARTMENT_NAME)
		{
			$this->DEPARTMENT_NAME = $DEPARTMENT_NAME;
		}
		
		public function GetID_CHECK_IN()
		{
			return $this->ID_CHECK_IN;
		}
		
		public function GetNAME_CHECK_IN()
		{
			return $this->NAME_CHECK_IN;
		}
		
		public function GetFROM_DATE()
		{
			return $this->FROM_DATE;
		}
		
		public function GetTO_DATE()
		{
			return $this->TO_DATE;
		}
		
		public function GetID_DEPARTMENT()
		{
			return $this->ID_DEPARTMENT;
		}
		
		public function GetDEPARTMENT_NAME()
		{
			return $this->DEPARTMENT_NAME;
		}
		
		public function SetProjects( $ID_CHECK_IN,
		                             $NAME_CHECK_IN,
		                             $FROM_DATE,
		                             $TO_DATE,
		                             $ID_DEPARTMENT,
		                             $DEPARTMENT_NAME
								   )
		{
			$this->ID_CHECK_IN = $ID_CHECK_IN;
			$this->NAME_CHECK_IN = $NAME_CHECK_IN;
			$this->FROM_DATE = $FROM_DATE;
			$this->TO_DATE = $TO_DATE;
			$this->ID_DEPARTMENT = $ID_DEPARTMENT;
			$this->DEPARTMENT_NAME = $DEPARTMENT_NAME;
		}
	}
?>