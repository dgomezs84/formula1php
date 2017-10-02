<?php 
class controllerAdmin extends admin {


	public function do_login(){

		$this->email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL );
		$this->contrasena = $_POST['password'];


		if (! $this->email || ! $this->contrasena)  {
			$app['feedback'] = "Introduzca datos";
			session_destroy();
			include ('login.php');
			return false;
		}

		if (! $this->login($this->email)) {
			$app['feedback'] = "Contraseña o usuario incorrecta";
			session_destroy();
			include ('login.php');
			return false;

		}

		foreach ($this->tabla as $iFila){

		}
		echo $iFila['contrasena'];
			if (password_verify($this->contrasena,$iFila['contraseña'])) {
				
				$_SESSION['permiso']=$iFila['permiso'];
				$_SESSION['email']=$iFila['email'];			

				include('includes/header.php');
			}else{
				$app['feedback'] = "Usuario o contraseña incorrectas";
				session_destroy();
				include ('login.php');
				return false;
		}




		return true;

	}

	public function do_update_piloto(){ 

		$this->nombre = filter_input(INPUT_POST,'nombre',FILTER_SANITIZE_STRING );
		if (! $this->nombre) {
			$this->app['feedback'] .= "El nombre no es correcto" . "</br>";
		}

		$this->apellido = filter_input(INPUT_POST,'apellido',FILTER_SANITIZE_STRING );
		if (! $this->apellido) {
			$this->app['feedback'] .= "El apellido no es correcto" . "</br>";
		}



		$this->numero = filter_input(INPUT_POST,'numero',FILTER_VALIDATE_INT );		
			if (! $this->numero) {
				$this->app['feedback'] .= "El numero no es correcto" . "</br>";
			}

			
			if ($this->validateDate($_POST['nacimiento'],'d-m-Y')){

				$ifecha=$_POST['nacimiento'];			
				$iFormato = new DateTime($ifecha); 
				$this->nacimiento = $iFormato->format('Y-m-d') ;			
				
				if (! $this->validateDate($this->nacimiento)){
					$this->app['feedback'] .= "La fecha de nacimiento no es correcta" . "</br>";
					$this->nacimiento = $_POST['nacimiento'];				
							
				}
			}else{
				$this->app['feedback'] .= "La fecha de nacimiento no es correcta" . "</br>";
				$this->nacimiento = $_POST['nacimiento'];	
			}		
			
	


			

		$this->debut = filter_input(INPUT_POST,'debut',FILTER_VALIDATE_INT );
		if (! $this->debut) {
			$this->app['feedback'] .= "El debut no es correcto" . "</br>";
		}

		$this->pais = filter_input(INPUT_POST,'pais',FILTER_SANITIZE_STRING );
		if (! $this->pais) {		
			$this->app['feedback'] .= "El pais no es correcto" . "</br>";
		}

	

		if (empty($_POST['titulos'])) {
	
			$this->titulos=0;
		}else{
			if (filter_input(INPUT_POST,'titulos',FILTER_VALIDATE_INT )) {
				$this->titulos = filter_input(INPUT_POST,'titulos',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los titulos no son correctos.Se requiere número" . "</br>";
				$this->titulos =$_POST['titulos'];
			}
		}

		if (empty($_POST['podiums'])) {
		
			$this->podiums=0;
		}else{
			if (filter_input(INPUT_POST,'podiums',FILTER_VALIDATE_INT )) {
				$this->podiums = filter_input(INPUT_POST,'podiums',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los podiums no son correctos.Se requiere número" . "</br>";
				$this->podiums =$_POST['podiums'];
			}
		}	

		if (empty($_POST['puntos'])) {
		
			$this->puntos=0;
		}else{
			if (filter_input(INPUT_POST,'puntos',FILTER_VALIDATE_INT )) {
				$this->puntos = filter_input(INPUT_POST,'puntos',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los puntos no son correctos.Se requiere número" . "</br>";
				$this->puntos =$_POST['puntos'];
			}
		}	
			
		if (empty($_POST['gps'])) {
		
			$this->gps=0;
		}else{
			if (filter_input(INPUT_POST,'gps',FILTER_VALIDATE_INT )) {
				$this->gps = filter_input(INPUT_POST,'gps',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los GPs no son correctos. Se requiere número" . "</br>";
				$this->gps =$_POST['gps'];
			}
		}


		$this->minitexto = filter_input(INPUT_POST,'minitexto',FILTER_SANITIZE_STRING );
		if (! $this->minitexto) {
			$this->app['feedback'] .= "El minitexto no es correcto" . "</br>";
		}

		$this->descripcion = filter_input(INPUT_POST,'descripcion',FILTER_SANITIZE_STRING );
		if (! $this->descripcion) {
			$this->app['feedback'] .= "La descripción no es correcto" . "</br>";
		}

		$this->equipo= filter_input(INPUT_POST,'equipo',FILTER_VALIDATE_INT );
		if ( (! $this->equipo) || (! $this->have_team($this->equipo)) )  {
			$this->app['feedback'] .= "El nombre no es correcto" . "</br>";
		}

		if ( is_null($this->app['feedback'])) {

			if ($this->update_piloto($this->nombre,$this->apellido,$this->numero,$this->nacimiento,$this->debut,$this->pais,$this->titulos,$this->podiums,$this->puntos,$this->gps,$this->minitexto,$this->descripcion,$this->equipo,$_SESSION['id_piloto']))  {

				$this->app['feedback'] .= "Datos actualizados correctamente";
				

			}else{

				$this->app['feedback'] .= "datos correctos pero error al actualizar. Revise el sistema";
				return false;
			}

		}else{	

			$this->datos_piloto($_SESSION['id_piloto']);
			return false;
		}

		return true;

	}




	public function validateDate($date, $format = 'Y-m-d'){

	    $d = DateTime::createFromFormat($format, $date);
	    return $d && $d->format($format) == $date;
	}




	public function do_update_circuito(){ 

		$this->gp_nombre = filter_input(INPUT_POST,'gp_nombre',FILTER_SANITIZE_STRING );
		if (! $this->gp_nombre) {
			$this->app['feedback'] .= "El nombre del GP no es correcto" . "</br>";
		}

		$this->nombre = filter_input(INPUT_POST,'nombre',FILTER_SANITIZE_STRING );
		if (! $this->nombre) {
			$this->app['feedback'] .= "El nombre no es correcto" . "</br>";
		}

		$this->ciudad = filter_input(INPUT_POST,'ciudad',FILTER_SANITIZE_STRING );
		if (! $this->ciudad) {
			$this->app['feedback'] .= "La ciudad no es correcta" . "</br>";
		}	

		$this->pais = filter_input(INPUT_POST,'pais',FILTER_SANITIZE_STRING );
		if (! $this->pais) {
			$this->app['feedback'] .= "El país no es correcto" . "</br>";
		}


		$this->fecha = filter_input(INPUT_POST,'fecha',FILTER_VALIDATE_INT );		
			if (! $this->fecha) {
				$this->app['feedback'] .= "El año no es correcto" . "</br>";
			}
			if ($this->fecha < 1900)  {
				$this->app['feedback'] .= "El año debe estar entre 1900 y " . date('Y')  . "</br>";
			}

			if ($this->fecha > date('Y'))  {
				$this->app['feedback'] .= "El año debe estar entre 1900 y " . date('Y') . "</br>";
			}
			

		$this->vuelta = filter_input(INPUT_POST,'vuelta',FILTER_VALIDATE_INT );
		if (! $this->vuelta) {
			$this->app['feedback'] .= "La vuelta no es correcta" . "</br>";
		}

		$this->longitud_vuelta = filter_input(INPUT_POST,'longitud_vuelta',FILTER_VALIDATE_FLOAT );
		if (! $this->longitud_vuelta) {
			$this->app['feedback'] .= "La longitud de vuelta no es correcta" . "</br>";
		}		

		$this->ganador = filter_input(INPUT_POST,'ganador',FILTER_SANITIZE_STRING );
		if (! $this->ganador) {		
			$this->app['feedback'] .= "El ultimo ganador no es correcto" . "</br>";
		}
		$this->cir_17 = filter_input(INPUT_POST,'cir_17',FILTER_SANITIZE_STRING );
		if (! $this->cir_17) {		
			$this->app['feedback'] .= "El cir_17 no es correcto" . "</br>";
		}	

		$this->cir_172 = filter_input(INPUT_POST,'cir_172',FILTER_SANITIZE_STRING );
		if (! $this->cir_172) {		
			$this->app['feedback'] .= "El cir_172 no es correcto" . "</br>";
		}	

		$this->p1 = filter_input(INPUT_POST,'p1',FILTER_SANITIZE_STRING );
		if (! $this->p1) {		
			$this->app['feedback'] .= "El p1 no es correcto" . "</br>";
		}	

		$this->p2 = filter_input(INPUT_POST,'p2',FILTER_SANITIZE_STRING );
		if (! $this->p2) {		
			$this->app['feedback'] .= "El p2 no es correcto" . "</br>";
		}	

		$this->p3 = filter_input(INPUT_POST,'p3',FILTER_SANITIZE_STRING );
		if (! $this->p3) {		
			$this->app['feedback'] .= "El p3 no es correcto" . "</br>";
		}	

		$this->quality = filter_input(INPUT_POST,'quality',FILTER_SANITIZE_STRING );
		if (! $this->quality) {		
			$this->app['feedback'] .= "La clasificacion no es correcto" . "</br>";
		}

		$this->race = filter_input(INPUT_POST,'race',FILTER_SANITIZE_STRING );
		if (! $this->race) {		
			$this->app['feedback'] .= "La carrera no es correcto" . "</br>";
		}	

		$this->foto = filter_input(INPUT_POST,'foto',FILTER_SANITIZE_STRING );
		if (! $this->foto) {		
			$this->app['feedback'] .= "La foto no es correcto" . "</br>";
		}	

		$this->longitud_total = filter_input(INPUT_POST,'longitud_total',FILTER_VALIDATE_FLOAT );		
			if (! $this->longitud_total) {
				$this->app['feedback'] .= "La longitud total no es correcto" . "</br>";
			}
		$this->record = filter_input(INPUT_POST,'record',FILTER_SANITIZE_STRING );
		if (! $this->record) {		
			$this->app['feedback'] .= "El record no es correcto" . "</br>";
		}	


		if ( is_null($this->app['feedback'])) {

			if ($this->update_circuito($this->gp_nombre,$this->nombre,$this->ciudad,$this->pais,$this->fecha,$this->vuelta,$this->longitud_vuelta,$this->ganador,$this->cir_17,$this->cir_172,$this->p1,$this->p2,$this->p3,$this->quality,$this->race,$this->foto,$this->longitud_total,$this->record,$_SESSION['id_circuito'])) {

				$this->app['feedback'] .= "Datos actualizados correctamente";
				

			}else{

				$this->app['feedback'] .= "datos correctos pero error al actualizar. Revise el sistema";
				return false;
			}

		}else{	

			$this->datos_circuito($_SESSION['id_circuito']);
			return false;
		}

		return true;

	}	

public function do_update_escuderia(){ 

		$this->nombre = filter_input(INPUT_POST,'nombre',FILTER_SANITIZE_STRING );
		if (! $this->nombre) {
			$this->app['feedback'] .= "El nombre de a escuderia no es correcto" . "</br>";
		}

		$this->ano = filter_input(INPUT_POST,'ano',FILTER_VALIDATE_INT );		
			if (! $this->ano) {
				$this->app['feedback'] .= "El año no es correcto" . "</br>";
			}

			if ($this->ano < 1900)  {
				$this->app['feedback'] .= "El año debe estar entre 1900 y " . date('Y')  . "</br>";
			}

			if ($this->ano > date('Y'))  {
				$this->app['feedback'] .= "El año debe estar entre 1900 y " . date('Y') . "</br>";
			}			

		$this->sede = filter_input(INPUT_POST,'sede',FILTER_SANITIZE_STRING );
		if (! $this->sede) {
			$this->app['feedback'] .= "La sede no es correcta" . "</br>";
		}	

		$this->coche = filter_input(INPUT_POST,'coche',FILTER_SANITIZE_STRING );
		if (! $this->coche) {
			$this->app['feedback'] .= "El coche no es correcto" . "</br>";
		}

		if (empty($_POST['titulo'])) {
	
			$this->titulo=0;
		}else{
			if (filter_input(INPUT_POST,'titulo',FILTER_VALIDATE_INT )) {
				$this->titulo = filter_input(INPUT_POST,'titulo',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los titulos no son correctos" . "</br>";
			}
		}		


		if (empty($_POST['podium'])) {
	
			$this->podium=0;
		}else{
			if (filter_input(INPUT_POST,'podium',FILTER_VALIDATE_INT )) {
				$this->podium = filter_input(INPUT_POST,'podium',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los podiums no son correctos" . "</br>";
			}
		}	

		$this->foto = filter_input(INPUT_POST,'foto',FILTER_SANITIZE_STRING );
		if (! $this->foto) {
			$this->app['feedback'] .= "La foto no es correcta" . "</br>";
		}

		if (empty($_POST['pole'])) {
	
			$this->pole=0;
		}else{
			if (filter_input(INPUT_POST,'pole',FILTER_VALIDATE_INT )) {
				$this->pole = filter_input(INPUT_POST,'pole',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los poles no son correctos" . "</br>";
			}
		}	

		if (empty($_POST['rapido'])) {
	
			$this->rapido=0;
		}else{
			if (filter_input(INPUT_POST,'rapido',FILTER_VALIDATE_INT )) {
				$this->rapido = filter_input(INPUT_POST,'rapido',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Las vueltas rapidas no son correctas" . "</br>";
			}
		}


		$this->descripcion = filter_input(INPUT_POST,'descripcion',FILTER_SANITIZE_STRING );
		if (! $this->descripcion) {
			$this->app['feedback'] .= "La descripcion no es correcta" . "</br>";
		}	


		if ( is_null($this->app['feedback'])) {

			if ($this->update_escuderia($this->nombre,$this->ano,$this->sede,$this->coche,$this->titulo,$this->podium,$this->pole,$this->rapido,$this->descripcion,$this->foto,$_SESSION['id_escuderia'])) {

				$this->app['feedback'] .= "Datos actualizados correctamente";
				

			}else{

				$this->app['feedback'] .= "datos correctos pero error al actualizar. Revise el sistema";
				return false;
			}

		}else{	

			$this->datos_escuderia($_SESSION['id_escuderia']);
			return false;
		}

		return true;

	}		

	public function do_update_noticia(){

		$this->titular = filter_input(INPUT_POST,'titular',FILTER_SANITIZE_STRING );		
		$this->entradilla = filter_input(INPUT_POST,'entradilla',FILTER_SANITIZE_STRING );		
		$this->noticia = filter_input(INPUT_POST,'noticia',FILTER_SANITIZE_STRING );		
		$this->foto = filter_input(INPUT_POST,'foto',FILTER_SANITIZE_STRING );		

		if (! $this->titular) {
			$this->app['feedback'] .= "Hay que introducir titular" . "</br>";		
		}
		if (! $this->entradilla ) {
			$this->app['feedback'] .= "Hay que introducir entradilla" . "</br>";		
		}
		if (strlen( $this->entradilla) < 120) {
			$this->app['feedback'] .= "La entrada debe tener 120 caracteres como mínimo" . "</br>";		
		}
		if (! $this->noticia) {
			$this->app['feedback'] .= "Hay que introducir noticia" . "</br>";			
		}
		if (! $this->foto) {
			$this->app['feedback'] .= "Hay que introducir nombre de la foto" . "</br>";		
		}

		if ( is_null($this->app['feedback']) ) {

			if ($this->update_noticia($this->noticia,$this->titular,$this->entradilla,$this->foto,$_SESSION['id_noticia']))  {

				$this->app['feedback'] .= "Datos actualizados correctamente";
				

			}else{

				$this->app['feedback'] .= "datos correctos pero error al actualizar. Revise el sistema";
				return false;
			}

		}else{	

			$this->datos_noticia($_SESSION['id_noticia']);
			return false;
		}

		return true;

	}		





		

	public function do_piloto(){

		$this->id = filter_input(INPUT_POST,'id_piloto',FILTER_VALIDATE_INT );		


		if (! $this->id)  {
			$this->app['feedback'] = "Seleccione al piloto de nuevo";			
			return false;
		}

		if (! $this->have_pilot($this->id) ) {
			$this->app['feedback'] = "Piloto seleccionado no exite o hay error, seleccione de nuevo";
			return false ;	
		}

		if ($this->piloto_sin_escuderia($this->id)){
			$this->datos_piloto_sin_escuderia($this->id);
			$_SESSION['id_piloto'] = $this->id;

		}else{
			$this->datos_piloto($this->id);
			$_SESSION['id_piloto'] = $this->id;

		}


		return true;

	}

	public function do_escuderia(){

		$this->id = filter_input(INPUT_POST,'id_escuderia',FILTER_VALIDATE_INT );		


		if (! $this->id)  {
			$this->app['feedback'] = "Seleccione la escuderia de nuevo";			
			return false;
		}

		if (! $this->have_team($this->id) ) {
			$this->app['feedback'] = "Escuería seleccionada no exite o hay error, seleccione de nuevo";
			return false ;	
		}else{
			$this->datos_escuderia($this->id);
			$_SESSION['id_escuderia'] = $this->id;
		}



		return true;

	}	

	public function do_circuito(){

		$this->id = filter_input(INPUT_POST,'id_circuito',FILTER_VALIDATE_INT );		


		if (! $this->id)  {
			$this->app['feedback'] = "Error,Seleccione el circuito de nuevo";			
			return false;
		}

		if (! $this->have_circuit($this->id) ) {
			$this->app['feedback'] = "Circuito seleccionado no exite o hay error, seleccione de nuevo";
			return false ;	
		}else{
			$this->datos_circuito($this->id);
			$_SESSION['id_circuito'] = $this->id;
		}



		return true;

	}	

	public function do_noticia(){

		$this->id = filter_input(INPUT_POST,'id_noticia',FILTER_VALIDATE_INT );		


		if (! $this->id)  {
			$this->app['feedback'] = "Seleccione la noticia de nuevo";			
			return false;
		}

		if (! $this->have_news($this->id) ) {
			$this->app['feedback'] = "Noticia seleccionada no exite o hay error, seleccione de nuevo";
			return false ;	
		}else{
			$this->datos_noticia($this->id);
			$_SESSION['id_noticia'] = $this->id;
		}



		return true;

	}	

	public function do_delete_piloto(){

		$this->id = filter_input(INPUT_POST,'id_piloto',FILTER_VALIDATE_INT );

		if (! $this->id)  {
			$this->app['feedback'] = "Error, Seleccione a piloto a eliminar de nuevo";			
			return false;
		}

		if (! $this->have_pilot($this->id) ) {
			$this->app['feedback'] = "Piloto seleccionado no exite o hay error, seleccione de nuevo";
			return false ;	
		}else{
			$this->delete_piloto($this->id);
			$this->app['feedback'] = "Piloto eliminado correctamente";
		}			


		

	}

	public function do_delete_escuderia(){

		$this->id = filter_input(INPUT_POST,'id_escuderia',FILTER_VALIDATE_INT );

		if (! $this->id)  {
			$this->app['feedback'] = "Error, Seleccione la escuderia a eliminar de nuevo";			
			return false;
		}

		if (! $this->have_team($this->id) ) {
			$this->app['feedback'] = "Escuderia seleccionada no exite o hay error, seleccione de nuevo";
			return false ;	
		}else{
			$this->delete_escuderia($this->id);
			$this->app['feedback'] = "Escuderia eliminado correctamente";
		}			


		

	}	

	public function do_delete_circuito(){

		$this->id = filter_input(INPUT_POST,'id_circuito',FILTER_VALIDATE_INT );

		if (! $this->id)  {
			$this->app['feedback'] = "Error, Seleccione el circuito a eliminar de nuevo";			
			return false;
		}

		if (! $this->have_circuit($this->id) ) {
			$this->app['feedback'] = "Circuito seleccionado no exite o hay error, seleccione de nuevo";
			return false ;	
		}else{
			$this->delete_circuito($this->id);
			$this->app['feedback'] = "Circuito eliminado correctamente";
		}			


		

	}	

	public function do_create_noticia(){

		$this->titular = filter_input(INPUT_POST,'titular',FILTER_SANITIZE_STRING );		
		$this->entradilla = filter_input(INPUT_POST,'entradilla',FILTER_SANITIZE_STRING );		
		$this->noticia = filter_input(INPUT_POST,'noticia',FILTER_SANITIZE_STRING );		
		$this->foto = filter_input(INPUT_POST,'foto',FILTER_SANITIZE_STRING );	

		if (strlen($this->entradilla) < 120){
			$this->app['feedback'] = "La entrada tiene que tener una longitud mínima de 120 caracteres";
			return false;
		}	

		if (! $this->titular || ! $this->entradilla || ! $this->noticia || ! $this->foto)  {
			$this->app['feedback'] = "Todos los campos son obligatorios.";			
			return false;
		}

		if ($this->create_noticia($this->noticia,$this->titular,$this->entradilla,$this->foto)) {
			$this->app['feedback'] = "Noticia creada correctamente";
			$this->titular = NULL;
			$this->entradilla = NULL;
			$this->noticia = NULL;
			$this->foto = NULL;
		}else{
			$this->app['feedback'] = "La noticia no ha sido creada, por favor revise.";
			return false;
		}

		return true;

	}

	public function do_create_piloto(){

		$this->nombre = filter_input(INPUT_POST,'nombre',FILTER_SANITIZE_STRING );
		if (! $this->nombre) {
			$this->app['feedback'] .= "El nombre no es correcto" . "</br>";
		}

		$this->apellido = filter_input(INPUT_POST,'apellido',FILTER_SANITIZE_STRING );
		if (! $this->apellido) {
			$this->app['feedback'] .= "El apellido no es correcto" . "</br>";
		}



		$this->numero = filter_input(INPUT_POST,'numero',FILTER_VALIDATE_INT );		
			if (! $this->numero) {
				$this->app['feedback'] .= "El numero no es correcto" . "</br>";
			}


			if ($this->validateDate($_POST['nacimiento'],'d-m-Y')){

				$ifecha=$_POST['nacimiento'];			
				$iFormato = new DateTime($ifecha);
				$this->nacimiento1=$_POST['nacimiento']; 
				$this->nacimiento = $iFormato->format('Y-m-d') ;

				if (! $this->validateDate($this->nacimiento)){
						$this->app['feedback'] .= "La fecha de nacimiento no es correcta" . "</br>";					
				}

			}else{

				$this->app['feedback'] .= "La fecha de nacimiento no es correcta" . "</br>";
			}		

			

		$this->debut = filter_input(INPUT_POST,'debut',FILTER_VALIDATE_INT );
		if (! $this->debut) {
			$this->app['feedback'] .= "El debut no es correcto" . "</br>";
		}

		$this->pais = filter_input(INPUT_POST,'pais',FILTER_SANITIZE_STRING );
		if (! $this->pais) {		
			$this->app['feedback'] .= "El pais no es correcto" . "</br>";
		}

	

		if (empty($_POST['titulos'])) {
	
			$this->titulos=0;
		}else{
			if (filter_input(INPUT_POST,'titulos',FILTER_VALIDATE_INT )) {
				$this->titulos = filter_input(INPUT_POST,'titulos',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los titulos no son correctos" . "</br>";
			}
		}

		if (empty($_POST['podiums'])) {
		
			$this->podiums=0;
		}else{
			if (filter_input(INPUT_POST,'podiums',FILTER_VALIDATE_INT )) {
				$this->podiums = filter_input(INPUT_POST,'podiums',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los podiums no son correctos" . "</br>";
			}
		}	

		if (empty($_POST['puntos'])) {
		
			$this->puntos=0;
		}else{
			if (filter_input(INPUT_POST,'puntos',FILTER_VALIDATE_INT )) {
				$this->puntos = filter_input(INPUT_POST,'puntos',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los puntos no son correctos" . "</br>";
			}
		}	
			
		if (empty($_POST['gps'])) {
		
			$this->gps=0;
		}else{
			if (filter_input(INPUT_POST,'gps',FILTER_VALIDATE_INT )) {
				$this->gps = filter_input(INPUT_POST,'gps',FILTER_VALIDATE_INT );
			}else{
				$this->app['feedback'] .= "Los GPs no son correctos" . "</br>";
			}
		}


		$this->minitexto = filter_input(INPUT_POST,'minitexto',FILTER_SANITIZE_STRING );
		if (! $this->minitexto) {
			$this->app['feedback'] .= "El minitexto no es correcto" . "</br>";
		}

		$this->descripcion = filter_input(INPUT_POST,'descripcion',FILTER_SANITIZE_STRING );
		if (! $this->descripcion) {
			$this->app['feedback'] .= "La descripción no es correcto" . "</br>";
		}

		$this->equipo= filter_input(INPUT_POST,'equipo',FILTER_VALIDATE_INT );
		if ( (! $this->equipo) || (! $this->have_team($this->equipo)) )  {
			$this->app['feedback'] .= "El nombre del equipo no es correcto" . "</br>";
		}

		if ( is_null($this->app['feedback'])) {

			if ($this->create_piloto($this->nombre,$this->apellido,$this->numero,$this->nacimiento,$this->debut,$this->pais,$this->titulos,$this->podiums,$this->puntos,$this->gps,$this->minitexto,$this->descripcion,$this->equipo)) { 
				$this->app['feedback'] = "Piloto creado correctamente";
				$this->nombre = NULL;
				$this->apellido = NULL;
				$this->debut = NULL;
				$this->pais = NULL;
				$this->titulos = NULL;
				$this->podiums = NULL;
				$this->puntos = NULL;
				$this->gps = NULL;
				$this->minitexto = NULL;
				$this->descripcion = NULL;
				$this->numero = NULL;
				$this->nacimiento1 = NULL;

			}else{
				$this->app['feedback'] = "El piloto no ha sido creado, por favor revise.";

				return false;
			}	

		}else{
			return false;
		}

		return true;

	}	

	public function do_delete_noticia(){

			$this->id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT );

			if (! $this->id)  {
				$this->app['feedback'] = "Error, Seleccione la noticia a eliminar de nuevo";			
				return false;
			}

			if (! $this->have_news($this->id) ) {
				$this->app['feedback'] = "Noticia seleccionada no exite o hay error, seleccione de nuevo";
				return false ;	
			}else{
				$this->delete_noticia($this->id);
				$this->app['feedback'] = "Noticia eliminada correctamente";
			}

			return true;

			

		}							

}	
