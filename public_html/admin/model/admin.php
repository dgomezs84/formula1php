
<?php 

class admin extends Db{
	
	public function login($email){

		$sql= "SELECT usuarios.u_id as id, usuarios.u_permiso as permiso, usuarios.u_contrasena as contraseña,usuarios.u_email as email
			from usuarios
			where usuarios.u_email='$email' ";

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

	public function pilotos(){

		$sql= "SELECT concat (pilotos.p_nombre,' ', pilotos.p_apellido) as nombre, pilotos.p_id as id
		from pilotos";
			

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

	public function circuitos(){

		$sql= "SELECT circuitos.cir_id as id, circuitos.cir_nombre as nombre
		FROM circuitos";
			

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



	public function escuderias(){

		$sql= "SELECT escuderias.es_nombre as nombre, escuderias.es_id as id
		from escuderias";
			

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

	public function noticias(){

		$sql= "SELECT noticias.n_noticia as noticia, noticias.n_titular as titular,noticias.n_entradilla as entradilla, noticias.n_id as id
		from noticias ";
			

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

	public function datos_piloto($id){

		$sql= "SELECT pilotos.p_nombre as nombre,pilotos.p_apellido as apellido,pilotos.p_nacimiento as nacimiento, pilotos.p_numero as numero,pilotos.p_debut as debut,pilotos.p_pais as pais,pilotos.p_n_titulo as titulos,pilotos.p_n_podium as podiums,pilotos.p_n_punto as puntos,pilotos.p_n_gp as gps,pilotos.p_minitexto as minitexto,pilotos.p_descripcion as descripcion,pilotos.p_nombre_foto as foto,escuderias.es_nombre as nombre_escuderia,escuderias.es_id as id_escuderia
			FROM pilotos
			INNER JOIN escuderias ON escuderias.es_id=pilotos.es_id_fk
			WHERE pilotos.p_id= '$id' ";
			

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

public function datos_escuderia($id){

		$sql= "SELECT escuderias.es_id as id,escuderias.es_nombre as nombre, escuderias.es_ano as año,escuderias.es_sede as sede,escuderias.es_coche as coche,escuderias.es_titulo as titulo,escuderias.es_podium as podium,escuderias.es_pole as pole,escuderias.es_rapido as rapido,escuderias.es_descripcion as descripcion,escuderias.es_nombre_foto as foto
			from escuderias	
			where escuderias.es_id= '$id' ";
			

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

	public function datos_circuito($id){

		$sql= "SELECT circuitos.cir_gp_nombre as gp_nombre,circuitos.cir_nombre as nombre,circuitos.cir_ciudad as ciudad,circuitos.cir_pais as pais,circuitos.cir_fecha as fecha,circuitos.cir_vuelta as vuelta,circuitos.cir_longitud_vuelta as longitud_vuelta,circuitos.cir_ganador as ganador,circuitos.cir_17 as cir_17,circuitos.cir_172 as cir_172,circuitos.cir_p1 as p1, circuitos.cir_p2 as p2,circuitos.cir_p3 as p3,circuitos.cir_quality as quality,circuitos.cir_race as race,circuitos.cir_foto as foto,circuitos.cir_longitud_total as longitud_total,circuitos.cir_record as record
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

	public function datos_noticia($id){

		$sql= "SELECT noticias.n_noticia as noticia, noticias.n_titular as titular,noticias.n_entradilla as entradilla,noticias.n_foto as foto
		from noticias
		WHERE noticias.n_id= '$id' ";
			

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

	public function have_pilot($id){

		$sql= "SELECT pilotos.p_id as id
		FROM pilotos
		WHERE pilotos.p_id= '$id' "	;	
			

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;
			}

		return true;				
	}

	public function have_circuit($id){

		$sql= "SELECT circuitos.cir_id as id
		FROM circuitos
		WHERE circuitos.cir_id= '$id' "	;	
			

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;
			}

		return true;				
	}	



	public function have_team($id){

		$sql= "SELECT escuderias.es_id as id
		FROM escuderias
		WHERE escuderias.es_id= '$id' "	;	
			

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;
			}

		return true;		

		

			
	}

	public function update_piloto($nombre,$apellido,$numero,$nacimiento,$debut,$pais,$titulos,$podiums,$puntos,$gps,$minitexto,$descripcion,$equipo,$id){

		$sql= "UPDATE pilotos 
			SET p_nombre = '$nombre',
			p_apellido='$apellido',
			p_numero=$numero,
			p_nacimiento='$nacimiento',
			p_debut=$debut,
			p_pais='$pais',
			p_n_titulo=$titulos,
			p_n_podium=$podiums,
			p_n_punto=$puntos,
			p_n_gp=$gps,
			p_minitexto='$minitexto',
			p_descripcion='$descripcion',
			es_id_fk=$equipo
			WHERE p_id ='$id' "	;	
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}	

	public function update_circuito($gp_nombre,$nombre,$ciudad,$pais,$fecha,$vuelta,$longitud_vuelta,$ganador,$cir_17,$cir_172,$p1,$p2,$p3,$quality,$race,$foto,$longitud_total,$record,$id){

		$sql= "UPDATE circuitos 
			SET cir_gp_nombre = '$gp_nombre',
			cir_nombre='$nombre',
			cir_ciudad='$ciudad',
			cir_pais='$pais',			
			cir_fecha=$fecha,
			cir_vuelta=$vuelta,
			cir_longitud_vuelta=$longitud_vuelta,
			cir_ganador='$ganador',
			cir_17='$cir_17',
			cir_172='$cir_172',
			cir_p1='$p1',
			cir_p2='$p2',
			cir_p3='$p3',
			cir_quality='$quality',
			cir_race='$race',
			cir_foto='$foto',
			cir_longitud_total=$longitud_total,
			cir_record='$record'
			WHERE cir_id ='$id' "	;	
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}	

	public function update_escuderia($nombre,$fecha,$sede,$coche,$titulo,$podium,$pole,$rapido,$descripcion,$foto,$id){

		$sql= "UPDATE escuderias 
			SET es_nombre='$nombre',
			es_ano='$fecha',
			es_sede='$sede',			
			es_coche='$coche',
			es_titulo=$titulo,
			es_podium=$podium,
			es_pole=$pole,
			es_rapido=$rapido,
			es_descripcion='$descripcion',
			es_nombre_foto='$foto'
			
			WHERE es_id ='$id' "	;	
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}		

	public function update_noticia($noticia,$titular,$entradilla,$foto,$id){

		$sql= "UPDATE noticias 
			SET n_noticia = '$noticia',
			n_titular='$titular',
			n_entradilla='$entradilla',
			n_foto='$foto'		
			WHERE n_id ='$id' "	;	
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}		

	public function delete_piloto($id){

		$sql= "DELETE FROM pilotos
		WHERE pilotos.p_id = '$id'  "	;	
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}

	public function delete_circuito($id){

		$sql= "DELETE FROM circuitos
		WHERE circuitos.cir_id = '$id'  "	;	
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}	

	public function delete_escuderia($id){

		$sql= "DELETE FROM escuderias
		WHERE escuderias.es_id = '$id'  "	;	
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}		

	public function create_noticia($noticia,$titular,$entradilla,$foto){

		// $noticia = $mysqli->real_escape_string($noticia);
		// $titular = $mysqli->real_escape_string($titular);
		// $entradilla = $mysqli->real_escape_string($entradilla);
		// $foto = $mysqli->real_escape_string($foto);
		
		$sql= "INSERT INTO noticias (n_noticia,n_titular,n_entradilla,n_hora,n_foto)
		VALUES ('$noticia','$titular','$entradilla',now(),'$foto');  "	;	
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}

	public function create_piloto($nombre,$apellido,$numero,$nacimiento,$debut,$pais,$titulos,$podiums,$puntos,$gps,$minitexto,$descripcion,$equipo){



		// $noticia = $mysqli->real_escape_string($noticia);
		// $titular = $mysqli->real_escape_string($titular);
		// $entradilla = $mysqli->real_escape_string($entradilla);
		// $foto = $mysqli->real_escape_string($foto);

		$sql= "INSERT INTO pilotos (p_nombre,p_apellido,p_numero,p_nacimiento,p_debut,p_pais,p_n_titulo,p_n_podium,p_n_punto,p_n_gp,p_minitexto,p_descripcion,es_id_fk,p_nombre_foto)
		VALUES ('$nombre','$apellido',$numero,'$p_nacimiento',$debut,'$pais',$titulos,$podiums,$puntos,$gps,'$minitexto','$descripcion',$equipo,'alonso');  "	;
		
		
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}	

	public function have_news($id){

		$sql= "SELECT noticias.n_id as id, noticias.n_titular as titular
		from noticias
		WHERE noticias.n_id='$id' ";
			

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){
		    	return false;
			}

			return true;		

	}

	public function delete_noticia($id){

		$sql= "DELETE FROM noticias
		WHERE noticias.n_id = '$id'  "	;	
			

			$result = $this->query($sql);

			if ($this->affected_rows > 0 ){

				return true;

			}else{

				return false;

			}			
					
	}

	public function piloto_sin_escuderia($id){

		$sql= "SELECT pilotos.es_id_fk as equipo
		from pilotos
		where pilotos.p_id='$id' ";
			

			$result = $this->query($sql);

			if( !$result ||  $result->num_rows < 1 ){

		    	return false;

			}else {

				$this->num_menssages = $result->num_rows;
			}


			while( $row = $result->fetch_assoc() ){
				$this->tabla[] = $row;
			}

			foreach ($this->tabla as $iFila) {
					if ($iFila['equipo'] == NULL){
						unset($this->tabla);
						return true;
						
					}else{
						unset($this->tabla);
						return false;
						
					}
				
			}
	}		

			public function datos_piloto_sin_escuderia($id){

		$sql= "SELECT pilotos.p_nombre as nombre,pilotos.p_apellido as apellido, pilotos.p_numero as numero,pilotos.p_debut as debut,pilotos.p_pais as pais,pilotos.p_n_titulo as titulos,pilotos.p_n_podium as podiums,pilotos.p_n_punto as puntos,pilotos.p_n_gp as gps,pilotos.p_minitexto as minitexto,pilotos.p_descripcion as descripcion,pilotos.p_nombre_foto as foto
			FROM pilotos			
			WHERE pilotos.p_id= '$id' ";
			

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





	