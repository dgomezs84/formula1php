<?php 

session_start();

require('settings.php') ;


$c = new admin(); 
$d = new controllerAdmin();  

$app = array(
  'feedback' => null);

$app_cookie = array(
  'feedback' => null);

$iAccion = filter_input(INPUT_GET, 'accion',FILTER_SANITIZE_STRING);



if (! isset($iAccion)) {
  $iAccion = "login";
  session_destroy();
}else{ 
    
    if ( ! isset($_SESSION['contador'])){
      @$contador=$_COOKIE['usuario'];
      $contador= $contador+1;
      setcookie("usuario",$contador,time() + 3600);
      $_SESSION['contador'] = true;

        if($contador){
          $app_cookie['feedback'].= "Es la " . $contador  . "ª vez que visitas este panel de control";
        }
    }  


  include('includes/header.php');
}  

switch ($iAccion) {

  case 'login':     
    include('login.php');      
  break; 

  case 'pilotos':     
      require('includes/drivers.php');      
  break; 

  case 'home':     
      include('includes/home.php');      
  break; 

  case 'escuderias':     
      include('includes/teams.php');      
  break; 

  case 'circuitos':     
      include('includes/circuits.php');      
  break; 

  case 'noticias':     
      include('includes/news.php');      
  break; 

  case 'pagina-crear-noticias':       
      include('includes/crear_news.php');     
  break; 

  case 'pagina-crear-pilotos':       
      include('includes/crear_pilots.php');     
  break; 

  case 'pagina-modificar-escuderias':       
      include('includes/modificar_teams.php');     
  break; 

  case 'pagina-modificar-noticias':       
      include('includes/modificar_news.php');     
  break; 

  case 'pagina-modificar-circuitos':       
      include('includes/modificar_circuits.php');     
  break; 

  case 'pagina-eliminar-circuitos':       
      include('includes/eliminar_circuits.php');     
  break; 

  case 'pagina-eliminar-escuderias':       
      include('includes/eliminar_teams.php');     
  break; 


  case 'pagina-eliminar-noticias':       
      include('includes/eliminar_news.php');     
  break;   

  case 'crear-noticia':     
      $d->do_create_noticia(); 
      include('includes/crear_news.php');  
  break;

  case 'crear-piloto':     
      $d->do_create_piloto(); 
      include('includes/crear_pilots.php');  
  break; 


   case 'elegir-noticia-eliminar':     
      $d->do_delete_noticia();     
      include('includes/eliminar_news.php');    
  break;  


  case 'pagina-modificar-pilotos': 
     require('includes/modificar_drivers.php');     
  break; 

  case 'modificar-piloto': 
      $d->do_update_piloto();  
      include('includes/modificar_drivers.php');     
  break; 

    case 'modificar-escuderia': 
      $d->do_update_escuderia();  
      include('includes/modificar_teams.php');     
  break; 

  case 'modificar-circuito': 
      $d->do_update_circuito();  
      include('includes/modificar_circuits.php');     
  break; 


  case 'modificar-noticia': 
      $d->do_update_noticia();  
      include('includes/modificar_news.php');     
  break; 

  case 'elegir-piloto-modificar':     
      $d->do_piloto();     
      include('includes/modificar_drivers.php');    
  break;

    case 'elegir-escuderia-modificar':     
      $d->do_escuderia();     
      include('includes/modificar_teams.php');    
  break;  

    case 'elegir-circuito-modificar':     
      $d->do_circuito();     
      include('includes/modificar_circuits.php');    
  break;

  case 'elegir-noticia-modificar':     
      $d->do_noticia();     
      include('includes/modificar_news.php');  
   break;     
  case 'pagina-eliminar-pilotos':       
      include('includes/eliminar_drivers.php');     
  break;
 

  case 'elegir-piloto-eliminar':     
      $d->do_delete_piloto();     
      include('includes/eliminar_drivers.php');    
  break;  

    case 'elegir-escuderia-eliminar':     
      $d->do_delete_escuderia();     
      include('includes/eliminar_teams.php');    
  break;  

  case 'elegir-circuito-eliminar':     
      $d->do_delete_circuito();     
      include('includes/eliminar_circuits.php');    
  break;    


  case 'check-login':
      $d->do_login();
      include('includes/home.php');      
  break;

  default:
    include('error.php');



 }

 include('includes/footer.php')

 ?>