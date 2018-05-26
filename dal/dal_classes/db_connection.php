<?php
	class DBConn
	{
		private static $conn;
		
		private static function setConnection()
		{
			self::$conn = new mysqli("localhost", "root", "", "systemdb");
		}
		
		private static function closeConnection()
		{
			self::$conn->close();
		}
		
		public static function Select($query)
		{
			self::setConnection();
			
			$result = self::$conn->query($query);
			
			while($row = $result->fetch_assoc())
			{
				$resultArray[] = $row;
			}
			
			self::closeConnection();
			
			return isset($resultArray) ? $resultArray : null;
		}
		
		public static function Insert($query)
		{
			self::setConnection();
				
			self::$conn->query($query);
			
			if (self::$conn->errno)
			{
				$resultArray["errno"] = self::$conn->errno;
				$resultArray["error"] = self::$conn->error;
			}
			else
			{
				$resultArray["insert_id"] = self::$conn->insert_id;
			}
				
			self::closeConnection();
			
			return isset($resultArray) ? $resultArray : null;
		}
	}
?>