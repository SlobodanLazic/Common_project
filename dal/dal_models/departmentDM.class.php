<?php
	class departmentDM
	{
		private $ID_SMER;
		private $NAZIV_SMERA;
		
		public function SetID_SMER($ID_SMER)
		{
			$this->ID_SMER = $ID_SMER;
		}
		
		public function SetNAZIV_SMERA($NAZIV_SMERA)
		{
			$this->NAZIV_SMERA = $NAZIV_SMERA;
		}
		
		public function GetID_SMER()
		{
			return $this->ID_SMER;
		}
		
		public function GetNAZIV_SMERA()
		{
			return $this->NAZIV_SMERA;
		}
		
		public function SetDepartment($ID_SMER,$NAZIV_SMERA)
		{
			$this->ID_SMER = $ID_SMER;
			$this->NAZIV_SMERA = $NAZIV_SMERA;
		}
	}
?>