<?php

	class database
	{
		//var $connection;
		public $connection;

		public function __construct()
		{
			$this->connection = pg_connect("host=localhost dbname=aashish user=aashish");
			if(!$this->connection)
			{
				echo "\n"."<br>Error in connection"."\n";
				exit;
			}
			session_start();
		}
	
		public function executeQuery($sqlQuery)
		{
			$resultObject = pg_query($this->connection,$sqlQuery);
			return pg_fetch_array($resultObject);
		}
		
		public function fetchResult($sqlQuery)
		{
			return pg_query($this->connection,$sqlQuery);
		}
	
		public function getNextPrimaryId($strTableName)
		{
			$sqlNextPrimaryKey = 'select (max(id)+1) as nextId from '.$strTableName;
		
			$row = $this->executeQuery($sqlNextPrimaryKey);
			
			return $row['nextid'];
		}
	}
	
?>
	

	<?php
/*
	class database
	{
		//var $connection;
		public $connection;
		public function connect()
		{
			$this->connection = pg_connect("host=localhost dbname=aashish user=aashish");
			if(!$this->connection)
			{
				echo "\n"."<br>Error in connection"."\n";
				exit;
			}
		}
		
		public function executeQuery($sqlQuery)
		{
			$resultObject = pg_query($this->connection,$sqlQuery);
			return pg_fetch_array($resultObject);
		}
		
		public function fetchResult($sqlQuery)
		{
			return pg_query($this->connection,$sqlQuery);
		}
	}
	*/
	
	?>
