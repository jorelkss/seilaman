<?php  

	class Connect{
		public static $instance;

		public function __construct(){

		}

		public static function get_instance(){
			if(!isset(self::$instance)){
				//Diz qual banco de dados vai se conectar
				self::$instance = new PDO('mysql:host=sql112.epizy.com;dbname=epiz_24568409_db_historico;', 'epiz_24568409', 'JKeznsfNkvOWoe', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);		
			}
			return self::$instance;
		}
	}


?>