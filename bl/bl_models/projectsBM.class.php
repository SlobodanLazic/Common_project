<?php
	class ProjectsBM
	{
		private $ID_CHECK_IN;
		private $NAME_CHECK_IN;
		private $FROM_DATE;
		private $TO_DATE;
		private $ID_DEPARTMENT;
		private $DEPARTMENT_NAME;
		private $ID_STATUS;		
		private $STATUS_NAME;
		private $STATUS_DESCRIPTION;
		
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
		
		public function SetID_STATUS($ID_STATUS)
		{
			$this->ID_STATUS = $ID_STATUS;
		}
		
		public function SetSTATUS_NAME($STATUS_NAME)
		{
			$this->STATUS_NAME = $STATUS_NAME;
		}
		
		public function SetSTATUS_DESCRIPTION($STATUS_DESCRIPTION)
		{
			$this->STATUS_DESCRIPTION = $STATUS_DESCRIPTION;
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
		
		public function GetID_STATUS()
		{
			return $this->ID_STATUS;
		}
		
		public function GetSTATUS_NAME()
		{
			return $this->STATUS_NAME;
		}
		
		public function GetSTATUS_DESCRIPTION()
		{
			return $this->STATUS_DESCRIPTION;
		}
		
		public function SetProjects( $ID_CHECK_IN,
		                             $NAME_CHECK_IN,
		                             $FROM_DATE,
		                             $TO_DATE,
		                             $ID_DEPARTMENT,
		                             $DEPARTMENT_NAME,
									 $ID_STATUS,
									 $STATUS_NAME,
									 $STATUS_DESCRIPTION
								   )
		{
			$this->ID_CHECK_IN = $ID_CHECK_IN;
			$this->NAME_CHECK_IN = $NAME_CHECK_IN;
			$this->FROM_DATE = $FROM_DATE;
			$this->TO_DATE = $TO_DATE;
			$this->ID_DEPARTMENT = $ID_DEPARTMENT;
			$this->DEPARTMENT_NAME = $DEPARTMENT_NAME;
			$this->ID_STATUS = $ID_STATUS;
			$this->STATUS_NAME = $STATUS_NAME;
			$this->STATUS_DESCRIPTION = $STATUS_DESCRIPTION;
		}
	}
?>