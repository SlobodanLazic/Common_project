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
			
			if($firstName != "" && $lastName != "" && $email != "" && $username != "" && $password != "")
			{
				$registerBM = new RegisterBM();
				$registerBM->SetNewUser($firstName,$lastName,$email,$username,$password,$photo);
				$userDM = $this->MapRegisterBM2userDM($registerBM);
			
				$userDAL = new UserDAL();
				$id = $userDAL->SetUser($userDM);
				
				if ($id == -1)
				{
					printf("Error, you did not register!");
				}
				else
				{
					
					$this->ValidateNewUsersPicture();
					
				}
			}
		}
		
		private function ValidateNewUsersPicture() //this function deals with validation of user picture
		{
					$photo = $_FILES["photo"];
					$allowedExts = array("jpg", "jpeg", "gif", "png");
					$explodedArray = explode(".", $_FILES["photo"]["name"]);
					$extension = end($explodedArray);
					$allowedTypes = array("image/gif","image/gif","image/jpg","image/jpeg");
					$imageType = $_FILES["photo"]["type"];
					
					if (in_array($extension, $allowedExts) && in_array($imageType,$allowedTypes)
						&& $_FILES["photo"]["size"] <= 1024 * 1024 && $_FILES["photo"]["error"] == 0)
					{
						$imageFolderPath = sprintf($_SERVER["DOCUMENT_ROOT"] . "Common_project/gui/images/user/%d", $id);
						mkdir($imageFolderPath);
						
						$filePath = sprintf("%s/%s", $imageFolderPath, $_FILES["photo"]["name"]);
						move_uploaded_file($_FILES["photo"]["tmp_name"], $filePath);
						
						header("Location:user_profile.php");
						exit;
					}
					else if($_FILES["photo"]["size"] == 0 || empty($_FILES["photo"]["tmp_name"]) || !is_uploaded_file($_FILES["photo"]["tmp_name"]))
					{
						header("Location:user_profile.php");
						exit;
					}
					else
					{
						echo "<h1 class='errorMsgs'>Neispravna datoteka!!!</h1>";
					}
		}
		
		private function MapRegisterBM2userDM($registerBM)
		{
			$userDM = new userDM();
			$userDM->SetUser (	$registerBM->GetfirstName(),
		                        $registerBM->GetlastName(),
		                        $registerBM->Getemail(),
		                        $registerBM->Getusername(),
		                        $registerBM->Getpassword(),
								$registerBM->Getphoto()
								);
			return	$userDM;				
		}
	}
?>