<?php  

session_start();



require('../settings.php') ;


require('../templates/header.php') ;
$app = array(
  'feedback' => null);


$c = new coches(); 
$d = new controllerCoches(); 	

$iAccion = filter_input(INPUT_GET, 'accion',FILTER_SANITIZE_STRING);

if (! isset($iAccion)){
	$iAccion = "principal";
}

switch ($iAccion) {

	case 'pilotos':
		include('drivers.php');
	break;

	case 'escuderias':
		include('teams.php');
	break;

	case 'circuitos':
		include('circuits.php');
	break;

	case 'noticias':
		include('news.php');
	break;

	case 'principal':
		include('../templates/main.php');
	break;

	case 'single-piloto':
		$d->do_single_pilotos();
		include('../templates/single_piloto.php');		
	break;

	case 'single-escuderia':
		$d->do_single_escuderias();
		include('../templates/single_escuderias.php');		
	break;

	case 'single-circuito':
		$d->do_single_circuitos();
		include('../templates/single_circuito.php');		
	break;

	case 'single-noticia':
		$d->do_single_noticias();
		include('../templates/single_noticia.php');		
	break;	
	
	default:
	
		include('error.php');		
		break;
}


include('../templates/footer.php');

?>



	
