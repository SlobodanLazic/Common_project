<?php
	class RegisterBM
	{
		private $firstName;
		private $lastName;
		private $email;
		private $username; 
		private $password;
		private $lastlogintime;
		private $photo;
		private $userStatus;
		
		public function GetfirstName()
		{
			return $this->firstName;
		}
		
		public function GetlastName()
		{
			return $this->lastName;
		}
		
		public function Getemail()
		{
			return $this->email;
		}
		
		public function Getusername()
		{
			return $this->username;
		}
		
		public function Getpassword()
		{
			return $this->password;
		}

		public function Getlastlogintime()
		{
			return $this->lastlogintime;
		}
		
		public function Getphoto()
		{
			return $this->photo;
		}
		
		public function GetuserStatus()
		{
			return $this->userStatus;
		}
		
		public function SetfirstName($firstName)
		{
			$this->firstName = $firstName;
		}
		
		public function SetlastName($lastName)
		{
			$this->lastName = $lastName;
		}
		
		public function Setemail($email)
		{
			$this->email = $email;
		}
		
		public function Setusername($username)
		{
			$this->username = $username;
		}
		
		public function Setpassword($password)
		{
			$this->password = $password;
		}
		
		public function Setlastlogintime($lastlogintime)
		{
			$this->lastlogintime = $lastlogintime;
		}
		
		public function Setphoto($photo)
		{
			$this->photo = $photo;
		}
		
		public function SetuserStatus($userStatus)
		{
			$this->userStatus = $userStatus;
		}		
		
		public function SetNewUser($firstName, $lastName, $email, $username, $password, $photo)
		{
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->email = $email;
			$this->username = $username; 
			$this->password = $password;
			/*kako da obradim fotografiju ako nije uneta buduci da je opcionalno unoshenje fotografije?
			Da li je moguce sa presetovanim praznim stringom za promenljivu photo?(buduci da je niz)*/
			count($photo, COUNT_RECURSIVE) != 0 ? $this->photo = $photo : $photo = "";
		}
		
	}
?>