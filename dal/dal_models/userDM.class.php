<?php
	class UserDM
	{
		private $ID_USER;
		private $IME;
		private $PREZIME;
		private $EMAIL;
		private $USERNAME;
		private $PASSWORD;
		private $POSLEDNJE_LOGOVANJE_KORISNIKA;
		private $FOTO_NAZIV;
		private $USER_STATUS;
		
		public function SetID_USER($ID_USER)
		{
			$this->ID_USER = $ID_USER;
		}
		
		public function SetIME($IME)
		{
			$this->IME = $IME;
		}
		
		public function SetPREZIME($PREZIME)
		{
			$this->PREZIME = $PREZIME;
		}
		
		public function SetEMAIL($EMAIL)
		{
			$this->EMAIL = $EMAIL;
		}
		
		public function SetUSERNAME($USERNAME)
		{
			$this->USERNAME = $USERNAME;
		}
		
		public function SetPASSWORD($PASSWORD)
		{
			$this->PASSWORD = $PASSWORD;
		}
		
		public function SetPOSLEDNJE_LOGOVANJE_KORISNIKA($POSLEDNJE_LOGOVANJE_KORISNIKA)
		{
			$this->POSLEDNJE_LOGOVANJE_KORISNIKA = $POSLEDNJE_LOGOVANJE_KORISNIKA;
		}
		
		public function SetFOTO_NAZIV($FOTO_NAZIV)
		{
			$this->FOTO_NAZIV = $FOTO_NAZIV;
		}
		
		public function SetUSER_STATUS($USER_STATUS)
		{
			$this->USER_STATUS = $USER_STATUS;
		}
		
		public function GetID_USER()
		{
			return $this->ID_USER;
		}
		
		public function GetIME()
		{
			return $this->IME;
		}
		
		public function GetPREZIME()
		{
			return $this->PREZIME;
		}
		
		public function GetEMAIL()
		{
			return $this->EMAIL;
		}
		
		public function GetUSERNAME()
		{
			return $this->USERNAME;
		}
		
		public function GetPASSWORD()
		{
			return $this->PASSWORD;
		}
		
		public function GetPOSLEDNJE_LOGOVANJE_KORISNIKA()
		{
			return $this->POSLEDNJE_LOGOVANJE_KORISNIKA;
		}
		
		public function GetFOTO_NAZIV()
		{
			return $this->FOTO_NAZIV;
		}
		
		public function GetUSER_STATUS()
		{
			return $this->USER_STATUS;
		}
		
		public function SetUser($IME,
		                        $PREZIME,
		                        $EMAIL,
		                        $USERNAME,
		                        $PASSWORD,
								$FOTO_NAZIV =""
		)
		{
			$this->SetIME($IME);
			$this->SetPREZIME($PREZIME);
			$this->SetEMAIL($EMAIL);
			$this->SetUSERNAME($USERNAME);
			$this->SetPASSWORD($PASSWORD);
			$this->SetFOTO_NAZIV($FOTO_NAZIV);
		}
	}
?>