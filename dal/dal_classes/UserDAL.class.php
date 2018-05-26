<?php
	
	include_once("db_connection.php");

	class UserDAL
	{
		public static function GetUser($username,$password)
		{
			$query = sprintf( " SELECT 
									u.ID_USER,
									u.IME,
									u.PREZIME,
									u.EMAIL,
									u.USERNAME,
									u.PASSWORD,
									u.POSLEDNJE_LOGOVANJE_KORISNIKA,
									u.FOTO_NAZIV
								FROM USER AS u
								WHERE u.USERNAME ='%s' AND u.PASSWORD ='%s' 
								",$username,$password			
							);
			$userResult = DBConn::Select($query);
		}
	}
?>