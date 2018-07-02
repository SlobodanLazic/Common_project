<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_models/registerBM.class.php");
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_models/userDM.class.php");
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/dal/dal_classes/UserDAL.class.php");
	
	class RegisterBL
	{
		public function RegisterNewUser()
		{
			$firstName = trim($_POST["firstName"]);
			$lastName = trim($_POST["lastName"]);
			$email = trim($_POST["email"]);
			$username = trim($_POST["username"]);
			$password = trim($_POST["password"]);
			$photo = $_FILES["photo"];
			
			if($firstName != "" && $lastName != "" && $email != "" && $username != "" && $password != "" )
			{
				$registerBM = new RegisterBM();
				$registerBM->SetNewUser($firstName,$lastName,$email,$username,$password);
				$userDM = $this->MapRegisterBM2userDM($registerBM);
			
				$userDAL = new UserDAL();
				$id = $userDAL->SetUser($userDM);
				
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
		
		private function MapRegisterBM2userDM($registerBM)
		{
			$userDM = new userDM();
			$userDM->SetUser (	$registerBM->GetfirstName(),
		                        $registerBM->GetlastName(),
		                        $registerBM->Getemail(),
		                        $registerBM->Getusername(),
		                        $registerBM->Getpassword()
								);
			return	$userDM;				
		}
	}
?>