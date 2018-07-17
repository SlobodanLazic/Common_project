<?php
	include_once($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/db_connection.php");
	include_once(FILEPATH . "dal/dal_models/userDM.class.php");
	

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
		
		public function SetUser($user)
		{
			$query = sprintf("
							INSERT INTO USER (IME, PREZIME, EMAIL, USERNAME, PASSWORD, USER_STATUS,)
							VALUES ('%s', '%s', '%s', '%s', '%s', 1)",
							$user->GetIME(),$user->GetPREZIME(),$user->GetEMAIL(),$user->GetUSERNAME(),$user->GetPASSWORD()
							);
			$resultArray = DBConn::Insert($query);
			
			$id = -1;
			if (ISSET($resultArray) && $resultArray != null)
			{
				if (count($resultArray) == 1)
				{
					$id = $resultArray["insert_id"];
				}
				else if (count($resultArray) == 2)
				{
					echo $resultArray["error"];
					exit;
					/* da li je (opcija 2) ok za logovanje greshke ili moze i ovako(opcija 1)?
					opcija 1:
					error_log("$resultArray["error"]",3,"../dal/errorlog.txt");
					opcija 2:
					$filename = "../dal/errorlog.txt";
					
					function SetError($errno, $errMessage, $errFile, $errLine, $errContext)
					{
						$handle = fopen($filename, "a+");
						echo $resultArray["error"];
						if ($handle !== false)
						{
							@$written = fwrite($handle, "Error number:$errno, ErrorMessage: $errMessage, ErrorFile: $errFile, ErrorLine:$errLine, ErrorFile:$errContext");
							if(file_exists($filename))
							{
								fclose($handle);
							}
						}						
					}
					set_error_handler("SetError");*/
				}
			}
			
			return $id;
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