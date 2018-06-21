<?php
	class yearDM
	{
		private $ID_GODINA;
		private $SHKOLSKA_GODINA;
		
		public function GetID_GODINA()
		{
			return $this->ID_GODINA;
		}
		
		public function GetSHKOLSKA_GODINA()
		{
			return $this->SHKOLSKA_GODINA;
		}
		
		public function SetID_GODINA($ID_GODINA)
		{
			$this->ID_GODINA = $ID_GODINA;
		}
		
		public function SetSHKOLSKA_GODINA($SHKOLSKA_GODINA)
		{
			$this->SHKOLSKA_GODINA = $SHKOLSKA_GODINA;
		}
		
		public function SetYear($ID_GODINA,$SHKOLSKA_GODINA)
		{
			$this->ID_GODINA = $ID_GODINA;
			$this->SHKOLSKA_GODINA = $SHKOLSKA_GODINA;
		}
	}
?>