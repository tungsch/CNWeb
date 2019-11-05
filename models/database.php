<?php
	require_once "libs/config.php";
	
	class DB
	{
		private static $dsn = "mysql:host=127.0.0.1;dbname=bansach";
		private static $options = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
		);
		private static $conn;
		
		public static function KetNoi()
		{
			if(!isset(self::$conn))
			{
				try
				{
					self::$conn = new PDO(self::$dsn, DB_USER, DB_PASS, self::$options);
				}
				catch(PDOException $e)
				{
					$error_message = $e->getMessage();
					include_once "views/layouts/error.php";
					exit();
				}
			}
			return self::$conn;
		}
		
		public static function HuyKetNoi()
		{
			self::$conn = null;
		}
	}
?>