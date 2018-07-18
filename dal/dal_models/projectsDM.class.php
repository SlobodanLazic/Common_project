<?php

	class ProjectsDM /* this class is getting data for ProjectsDAL.class.php*/
	{
		private $ID_PRIJAVA;
		private $NAZIV_PRIJAVE;
		private $OD_KOG_DATUMA;
		private $DO_KOG_DATUMA;
		private $ID_SMER;
		private $NAZIV_SMERA;
		
		public function GetID_PRIJAVA()
		{
			return $this->ID_PRIJAVA;
		}
		
		public function GetNAZIV_PRIJAVE()
		{
			return $this->NAZIV_PRIJAVE;
		}
		
		public function GetOD_KOG_DATUMA()
		{
			return $this->OD_KOG_DATUMA;
		}
		
		public function GetDO_KOG_DATUMA()
		{
			return $this->DO_KOG_DATUMA;
		}
		
		public function GetID_SMER()
		{
			return $this->ID_SMER;
		}
		
		public function GetNAZIV_SMERA()
		{
			return $this->NAZIV_SMERA;
		}
		//setting the whole project with all attributes that are private above
		public function SetProjects($ID_PRIJAVA,$NAZIV_PRIJAVE,$OD_KOG_DATUMA,$DO_KOG_DATUMA,$ID_SMER,$NAZIV_SMERA)
		{
			$this->ID_PRIJAVA = $ID_PRIJAVA;
			$this->NAZIV_PRIJAVE = $NAZIV_PRIJAVE;
			$this->OD_KOG_DATUMA = $OD_KOG_DATUMA;
			$this->DO_KOG_DATUMA = $DO_KOG_DATUMA;
			$this->ID_SMER = $ID_SMER;
			$this->NAZIV_SMERA = $NAZIV_SMERA;
		}
	}
?>