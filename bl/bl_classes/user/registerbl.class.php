<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_models/registerBM.class.php");
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_models/userDM.class.php");
	
	class RegisterBL
	{
		public function RegisterNewUser()
		{
			$firstName = trim($_POST["firstName"]);
			$lastName = trim($_POST["lastName"]);
			$email = trim($_POST["email"]);
			$username = trim($_POST["username"]);
			$password = trim($_POST["password"]);
			
			if($firstName != "" && $lastName != "" && $email != "" && $username != "" && $password != "" )
			{
				$register = new RegisterBM();
				$register->SetNewUser($firstName,$lastName,$email,$username,$password);
				$userDM = $this->MapRegisterBM2userDM($register);
			
				$registerDAL = new UserDAL();
				$id = $registerDAL->Insert($userDM);
				
				if ($id == -1)
				{
					printf("Error, you did not register!");
				}
				else
				{
					header("Location:user_profile.php");
					exit;
				}
			}
		}
		
		private function MapRegisterBM2userDM($register)
		{
			$userDM = new userDM();
			$userDM->SetUser (	$register->GetIME(),
		                        $register->GetPREZIME(),
		                        $register->GetEMAIL(),
		                        $register->GetUSERNAME,
		                        $register->GetPASSWORD()
								);
			return	$userDM;				
		}
	}
?>