<?php
namespace Database;

use Database\DbAdapter;

class DbConnection
{
	private static $instance;
	private $connection;
	
	private function __construct() {}
	
	public static function getInstance($config = null)
	{
		if (self::$instance == null) {
			if (isset($config)) {
				self::$instance = new DbAdapter($config);
			} else {
				return null;
			}
		}
		return self::$instance;
	}
	
	public static function initializeConnection($config)
	{
		$db = self::getInstance($config);
		$db->connection = $db;
	}
	
	public static function getConn()
	{
		$db = self::getInstance();
		return $db->connection;
	}
}
