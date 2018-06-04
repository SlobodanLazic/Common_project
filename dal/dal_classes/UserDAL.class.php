<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/db_connection.php");
	include_once(FILEPATH[0] . FILEPATH[1] . "dal/dal_models/userDM.class.php");
	

	class UserDAL
	{	
		public function GetUser($username, $password)
		{
			$query = sprintf( " SELECT 
									u.ID_USER,
									u.IME,
									u.PREZIME,
									u.EMAIL,
									u.USERNAME,
									u.PASSWORD,
									u.POSLEDNJE_LOGOVANJE_KORISNIKA,
									u.FOTO_NAZIV,
									u.USER_STATUS
								FROM 
									USER AS u
								WHERE 
									u.USERNAME ='%s' 
									AND u.PASSWORD ='%s'
						", $username, $password);
			$userResult = DBConn::Select($query);
			
			if ($userResult != null && is_array($userResult) && count($userResult) == 1)
			{
				$user = new UserDM();
				$userArray = $userResult[0];
				$user->SetUser($userArray["ID_USER"],
								$userArray["IME"],
								$userArray["PREZIME"],
								$userArray["EMAIL"],
								$userArray["USERNAME"],
								$userArray["PASSWORD"],
								$userArray["POSLEDNJE_LOGOVANJE_KORISNIKA"],
								$userArray["FOTO_NAZIV"],
								$userArray["USER_STATUS"]
						);
			}
			
			return isset($user) ? $user : null;
		}
		
		public function UpdateLastLoginTime($userID)
		{
			$query = sprintf("
							UPDATE USER u
							SET u.POSLEDNJE_LOGOVANJE_KORISNIKA = CURRENT_TIMESTAMP()
							WHERE ID_USER = %s
			", $userID);
			$userResult = DBConn::Update($query);
		}
	}
?>