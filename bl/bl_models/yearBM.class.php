<?php
	class YearBM
	{
		private $yearID;
		private $schoolyear;
		
		function GetyearID()
		{
			return $this->yearID;
		}
		
		function Getschoolyear()
		{
			return $this->schoolyear;
		}
		
		function SetyearID($yearID)
		{
			$this->yearID = $yearID;
		}
		
		function Setschoolyear($schoolyear)
		{
			$this->schoolyear = $schoolyear;
		}
		
		function SetYears($yearID,$schoolyear)
		{
			$this->yearID = $yearID;
			$this->schoolyear = $schoolyear;
		}
	}
?>