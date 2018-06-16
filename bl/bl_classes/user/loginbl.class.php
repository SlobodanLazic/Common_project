<?php
	if (session_id() === "")
	{
		session_start();
	}
	
	include_once($_SERVER["DOCUMENT_ROOT"] .  "/Common_project/dal/dal_classes/UserDAL.class.php");
	
	class LoginBL
	{		
		public function LoginUser()
		{
			$username = ISSET($_POST["username"]) ? trim($_POST["username"]) : "";
			$password = ISSET($_POST["password"]) ? trim($_POST["password"]) : "";
			
			if ($username != "" && $password != "")
			{
				$userDAL = new UserDAL();
				$user = $userDAL->GetUser($username, $password);
				if ($user != null && $username == "admin" && $password = "admin")
				{
					$userDAL->UpdateLastLoginTime($user->GetID_USER());
					$this->SetUserObjectToSession($user);
					header("Location:admin.php");
					exit;
				}
				return $user;
			}
		}
		
		private function SetUserObjectToSession($user)
		{
			$_SESSION["user"] = serialize($user);
			$_SESSION["timeout"] = time();
		}
		
		private function GetUserObjectFromSession()
		{
			return unserialize($_SESSION["user"]);
		}
		
		public function CheckUserSessionData($current_page = "")
		{
			if (ISSET($_SESSION["timeout"], $_SESSION["user"]))
			{
				$inactive = 300;			
				$sessionTTL = time() - $_SESSION["timeout"];
				if ($sessionTTL > $inactive)
				{
					$this->Logout();
				}
				$_SESSION["timeout"] = time();
				
				if ($current_page == "login" && $_SESSION["user"] == "admin")
				{
					header("Location:admin.php");
					exit;
				}
			}
			else if ($current_page != "login")
			{
				$this->RedirectToLoginPage();
			}
		}
		
		public function Logout()
		{
			$this->ClearSessions();
			$this->RedirectToLoginPage();			
		}
		
		private function ClearSessions()
		{
			UNSET($_SESSION["user"], $_SESSION["timeout"]);
		}
		
		private function RedirectToLoginPage()
		{
			header("Location:login.php");
			exit;
		}
	}