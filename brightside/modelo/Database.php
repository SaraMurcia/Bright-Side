<?php

	class Database {

		private $dbHost = "localhost";
		private $dbUser = "root";
		private $dbPort = "";
		private $dbPass = "";
		private $dbName = "brightside";

		private static $prp;

		public $db;

		private static $pdo = null ;	
		private static $instancia =null;

		private function __construct() {
			$this->conectar();
		}
		/*
		public function __destruct() {
			Database::$db->close();
		}*/
		
		private function __clone() {
		}

		public static function getInstancia() {

			if (is_null(self::$instancia)){
				self::$instancia = new Database();
			}

			return self::$instancia;
		}

		public function conectar() {
		    try{
			self::$pdo = new PDO("mysql:host={$this->dbHost};port={$this->dbPort};dbname={$this->dbName};charset=utf8;",
			$this->dbUser,
			$this->dbPass) ;

		    } catch (Exception $e) { 
		    	die ("**ERROR: es imposible conectar con la base de datos."); 
		    }
	    } 

		public function doQuery($sql, $params=[]) { 
			self::$prp = self::$pdo->prepare($sql);

			$flg = self::$prp->execute($params);

			return($flg) && (self::$prp->rowCount() > 0);

        }
        public function getLastId() {
            	return self::$pdo->LastInsertId();
        }


		public function getRow($class="StdClass") { 
			if (self::$prp) {
			   return self::$prp->fetchObject($class);
			}
		}
	}