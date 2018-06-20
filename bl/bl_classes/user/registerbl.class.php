<?php
	include_once ($_SERVER["DOCUMENT_ROOT"] . "/Common_project/bl/bl_models/registerBM.class.php");
	
	class RegisterBL
	{
		public function RegisterNewUser()
		{
			$firstName = trim($_POST["firstName"]);
			$lastName = trim($_POST["lastName"]);
			$email = trim($_POST["email"]);
			$username = trim($_POST["username"]);
			$password = trim($_POST["password"]);
			
			if($firstName != "" && $lastName != "" && $email != "" && $username != "" && $password != "" && )
			{
				$register = new RegisterBM();
				$register->SetNewUser($firstName,$lastName,$email,$username,$password);
			}
		}
	}
?>