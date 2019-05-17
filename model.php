<?php
	include 'bdd.php';

	class Model {
		public static $table='';
		public static $id='';

		public function __construct(int $id=null) {
			if(BDD::query('SELECT \'X\' FROM '.$this::$table.' WHERE '.$this::$id.'='.$id))
				foreach(BDD::removeIntIndexes(BDD::query('SELECT * FROM '.$this::$table.' WHERE '.$this::$id.'='.$id)[0]) as $key=>$value)
					$this->$key=$value;
		}

		public static function insert(array $data) {
			$sql='INSERT INTO '.static::$table.'(';
			foreach($data as $key=>$v)
				$sql.=$key.',';
			$sql=substr($sql,0,-1).') VALUES (';
			foreach($data as $value)
				$sql.='\''.$value.'\',';
			$sql=substr($sql,0,-1).')';
			BDD::query($sql);
		}

		public function update() {
			$class=get_class($this); $table=$class::$table; $id=$class::$id;
			foreach(get_object_vars($this) as $property=>$v)
				if($property!='table' && $property!='id')
					BDD::query('UPDATE '.$table.' SET '.$property.'=\''.$this->$property.'\' WHERE '.$id.'='.$this->$id);
		}
	}

	class Personne extends Model {
		public static $table='tr_personne_per';
		public static $id='per_id';
	}
