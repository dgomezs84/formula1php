<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'dgomezs@gmail.com';
$asunto = 'Contacto desde Daniel Gómez F1 Team';

require('../templates/header.php') ;

?>

	<main>
	<div class="clearfix"></div>
		<h2>¡Muchas gracias!</h2>
		<section class="contact1">
			<article class="contact">
				<?php 
				if(mail($para, $asunto, utf8_decode($mensaje), $header)){
					echo "<p>Tu opinión es importante.</p><p>Gracias por rellenar el formulario.</p><p>Se ha enviado de forma correcta.</p><p>Pulse para <a href=\"index.php\">volver al inicio</a>.</p>";
				}
				else{
					echo "<p>Su mensaje NO fue enviado. Es una pena, seguro que querías decir algo superinteresante.<p>Pulsa para <a href=\"index.php\">volver al inicio</a>.</p>";
				}
				?>
				<div class="contact-img">
					<img src="../img/f1.png" alt="">
				</div>
			</article>
		</section>
	</main>

<?php


require('../templates/footer.php') ;



?>