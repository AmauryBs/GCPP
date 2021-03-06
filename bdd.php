<?php
	class BDD {
		// Contains the PDO
		public static $connection=null;

		// Instanciate the PDO
		public static function connect($type,$host,$port,$database,$user,$password) {
			try{
				BDD::$connection = new PDO($type.':host='.$host.';port='.$port.';dbname='.$database,$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
			} catch (Exception $e){die('Erreur : '.$e->getMessage());}
		}

		// Realize a query in the instanciated PDO
		public static function query(string $sql,array $parameters=NULL) {
			if($parameters==NULL) {
				if(strtoupper(substr($sql,0,6))=='SELECT')
					return BDD::$connection->query($sql)->fetchAll();
				return BDD::$connection->query($sql);
			}
			$sql=BDD::$connection->prepare($sql)->execute($parameters);
			return $sql->fetchAll();
		}

		// Return a array result only with litteral keys
		public static function removeIntIndexes(array $data) {
			$new=[];
			foreach($data as $key=>$value)
				if(!preg_match('/^\d+$/',$key))
					$new[$key]=$value;
			return $new;
		}
	}
	BDD::connect('pgsql','localhost',5432,'gcpp','postgres','postgres');
