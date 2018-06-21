<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/db_connection.php");
	include_once(FILEPATH[0] . FILEPATH[1] . "dal/dal_models/yearDM.class.php");
	
	class YearDAL
	{
		public function GetYears()
		{
			$query = sprintf("
						SELECT 
							g.ID_GODINA,
							g.SHKOLSKA_GODINA
						FROM 
							GODINA g
						");
			$yearsResult = DBConn::Select($query);
			
			if($yearsResult != null && is_array($yearsResult) && count($yearsResult) > 0)
			{
				foreach($yearsResult as $yearResult)
				{
					$year = new yearDM();
					$year->SetYear($yearResult["ID_GODINA"],
									$yearResult["SHKOLSKA_GODINA"]
							);
					$years[] = $year;
				}
			}
			
			return isset($years) ? $years : null;
		}
	}
?>