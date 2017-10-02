
<?php 

class Db extends Mysqli {


	// Conexión automática cada vez que se instancie el objeto
	public function __construct(){

		// Llamamos al constructor de MySqli
		parent::__construct(SERVERDB,USERDB,PASSDB,NAMEDB,PORTDB);
		//PORTDB
		if( $this->connect_errno ){
			die('Error en la conexión: ' . $this->connect_error );
		}

		$this->set_charset('utf8');

		return true;
	}


	public function __destruct(){
		$this->close();
	}
}