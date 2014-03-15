<?php
namespace Database;

use Database\DbResult;

class DbAdapter
{
	protected $db;
	private $config;
	
	public function __construct(array $config)
	{
		$this->config = $config;
		$this->connect($this->config);
	}
	
	public function connect(array $config)
	{
		$this->db = new \mysqli($config['host'], $config['username'], $config['password'], $config['database']);
		if ($this->db->connect_error) {
			die($this->db->connect_errno . ': ' . $this->db->connect_error);
		}
	}
	
	public function query($sql)
	{
		$result = $this->getConnection()->query($sql);
		return new DbResult($result);
	}
	
	public function escape($string)
	{
		return $this->getConnection()->real_escape_string($string);
	}
	
	public function getConnection()
	{
		if ($this->db === null) {
			$this->connect($this->config);
		}
		return $this->db;
	} 
}
