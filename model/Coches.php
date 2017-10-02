<?php 

class coches extends Db{
	//public 
	public function todos_pilotos(){

		$sql= "SELECT concat (pilotos.p_nombre,' ', pilotos.p_apellido) as nombre_completo,pilotos.p_apellido as apellido, pilotos.p_numero as numero, escuderias.es_nombre as escuderia, pilotos.p_id as id,pilotos.p_nombre_foto as foto
			FROM pilotos
			INNER JOIN escuderias ON escuderias.es_id=pilotos.es_id_fk
			ORDER BY pilotos.es_id_fk ASC ";

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}	

		
		return true;

	}

	public function piloto_by_id($id){

		$sql= "SELECT concat(pilotos.p_nombre, ' ' , pilotos.p_apellido) as nombre ,pilotos.p_numero as Dorsal,pilotos.p_pais as País,pilotos.p_nacimiento as Nacimiento, pilotos.p_debut as Debut, pilotos.p_n_titulo as Titulos, pilotos.p_n_podium as Podiums,pilotos.p_n_punto as Puntos,pilotos.p_n_gp as GPs,pilotos.p_descripcion as Descripcion,pilotos.p_apellido,pilotos.p_nombre_foto as foto
			FROM pilotos
			WHERE pilotos.p_id='$id' ";

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}	

		
		return true;

	}

	public function todos_escuderias(){

		$sql= "SELECT escuderias.es_nombre as nombre, escuderias.es_titulo as titulos, escuderias.es_nombre_foto as foto,escuderias.es_id as id,escuderias.es_nombre as nombre
			FROM escuderias
			ORDER BY escuderias.es_id ASC";

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}	

		
		return true;

	}

	public function escuderia_by_id($id){

		$sql= "SELECT escuderias.es_ano as Nacimiento,escuderias.es_sede as Base, escuderias.es_coche as Monoplaza, escuderias.es_titulo as Titulos, escuderias.es_podium as Podiums,escuderias.es_pole as Poles,escuderias.es_rapido as VueltasRápidas, escuderias.es_nombre as escuderia,escuderias.es_nombre_foto as foto, escuderias.es_descripcion as descripcion
			FROM escuderias
			WHERE escuderias.es_id='$id' ";

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}	

		
		return true;

	}

	public function pilotos_by_escuderia($id_escuderia){

		$sql= "SELECT concat(pilotos.p_nombre, ' ' , pilotos.p_apellido) as nombre ,pilotos.p_nombre_foto as foto,pilotos.p_minitexto as minitexto
			FROM pilotos
			INNER JOIN escuderias ON escuderias.es_id=pilotos.es_id_fk
			WHERE escuderias.es_id='$id_escuderia' ";

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}	

		
		return true;

	}	

	public function todos_circuitos(){

		$sql= "SELECT circuitos.cir_nombre as nombre_ciudad, circuitos.cir_ciudad as ciudad, circuitos.cir_pais as nombre_pais, circuitos.cir_17 as hora, circuitos.cir_172 as hora2, circuitos.cir_foto as foto, circuitos.cir_id as id
			FROM circuitos
			ORDER BY circuitos.cir_id ASC";

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}	

		
		return true;

	}

	public function circuito_by_id($id){

		$sql= "SELECT circuitos.cir_ciudad as ciudad, circuitos.cir_pais as pais, circuitos.cir_fecha as debut,circuitos.cir_vuelta as lap, circuitos.cir_longitud_vuelta as longitud, circuitos.cir_longitud_total as total_km, circuitos.cir_record as vueltas_rapidas, circuitos.cir_ganador as ganador,circuitos.cir_gp_nombre as gp_nombre, circuitos.cir_nombre as nombre, circuitos.cir_17 as horario, circuitos.cir_p1 as libres1, circuitos.cir_p2 as libres2,circuitos.cir_p3 as libres3, circuitos.cir_quality as clasificacion,circuitos.cir_race as carrera,circuitos.cir_foto as foto
			FROM circuitos
			WHERE circuitos.cir_id='$id' ";

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}	

		
		return true;

	}

	public function have_post(){

		$sql= "SELECT * 
		FROM noticias 
		ORDER by noticias.n_hora DESC";

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				return true;
			}

	}

	public function the_post($limite=10000){

		$sql= "SELECT * 
		FROM `noticias` 
		ORDER by noticias.n_hora DESC
		LIMIT $limite ";

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}	

		
		return true;

	}

	public function post_by_id($id){

		$sql= "SELECT * 
		FROM noticias 
		WHERE noticias.n_id='$id' ";
		

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}	

		
		return true;

	}					
	


}

