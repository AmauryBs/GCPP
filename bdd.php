<?php
	class BDD {
		public static $connection=null;
		private static $type='mysql';
		private static $host='localhost';
		private static $database='bonsoir';
		private static $user='root';
		private static $password='root';

		public static function connect($type,$host,$database,$user,$password) {
			try{
				$this->connection = new PDO(BDD::$type.':host='.BDD::$host.';dbname='.BDD::$database.';charset=utf8',BDD::$user,BDD::$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
			} catch (Exception $e){die('Erreur : '.$e->getMessage());}
		}

		public static function query(string $sql,array $parameters=NULL) {
			if($parameters==NULL) {
				if(strtoupper(substr($sql,0,6))=='SELECT')
					return $this->connection->query($sql)->fetchAll();
				return $this->connection->query($sql);
			}
			$sql=$this->connection->prepare($sql)->execute($parameters);
			return $sql->fetchAll();
		}
	}
	BDD::connect();
