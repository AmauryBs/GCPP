<?php
	include 'bdd.php';

	class Model { // Main model : Simplify CREATE + UPDATE requests
		public static $table='';
		public static $id='';

		public function __construct(int $id=null) { // Get all data that correspound to the id
			if(BDD::query('SELECT \'X\' FROM '.$this::$table.' WHERE '.$this::$id.'='.$id))
				foreach(BDD::removeIntIndexes(BDD::query('SELECT * FROM '.$this::$table.' WHERE '.$this::$id.'='.$id)[0]) as $key=>$value)
					$this->$key=$value;
		}

		public static function insert(array $data) { // Realize an insert in table
			$sql='INSERT INTO '.static::$table.'(';
			foreach($data as $key=>$v)
				$sql.=$key.',';
			$sql=substr($sql,0,-1).') VALUES (';
			foreach($data as $value)
				$sql.='\''.$value.'\',';
			$sql=substr($sql,0,-1).')';
			BDD::query($sql);
		}

		public function update() { // Update data for the instanciated object with id
			$class=get_class($this); $table=$class::$table; $id=$class::$id;
			foreach(get_object_vars($this) as $property=>$v)
				if($property!='table' && $property!='id')
					BDD::query('UPDATE '.$table.' SET '.$property.'=\''.$this->$property.'\' WHERE '.$id.'='.$this->$id);
		}
	}

	// Models in table for this project
	class Activite extends Model {
		public static $table='tr_activite_act';
		public static $id='act_id';
	}

	class Demande extends Model {
		public static $table='tr_demande_dem';
		public static $id='dem_id';
	}

	class Fichier extends Model {
		public static $table='tr_fichier_fic';
		public static $id='fic_id';
	}

	class Personne extends Model {
		public static $table='tr_personne_per';
		public static $id='per_id';
	}

	class Etudiant extends Personne {
		public static $table='tr_etudiant_etu';
		public static $id='etu_id';
	}

	class Professeur extends Personne {
		public static $table='tr_professeur_pro';
		public static $id='pro_id';
	}

	class Service extends Personne {
		public static $table='tr_service_ser';
		public static $id='ser_id';
	}
