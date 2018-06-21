<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/YearDAL.class.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_models/yearDM.class.php");
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_models/yearBM.class.php");
	
	class yearBL
	{
		public function GetYears()
		{
			$YearDAL = new YearDAL();
			$yearsDM = $YearDAL->GetYears();
			
			$years = $this->MapYearsDM2BM($yearsDM);
			
			return $years;
		}
		
		private function MapYearsDM2BM($yearsDM)
		{
			if ($yearsDM != null && is_array($yearsDM) && count($yearsDM) > 0)
			{
				foreach ($yearsDM as $yearDM)
				{
					$yearBM = new yearBM();
					$yearBM->SetYears(
										$yearDM->GetID_GODINA(),
										$yearDM->GetSHKOLSKA_GODINA()
								);
					$years[] = $yearBM;			
				}
				
				return ISSET($years) ? $years : null;
			}
		}
	}
?>