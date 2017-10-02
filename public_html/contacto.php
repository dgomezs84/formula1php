<?php


require('../templates/header.php') ;



?>

	<main>
	<div class="clearfix"></div>
		<h2>¡Contacta con nosotros!</h2>
		<section class="contact1">
			<article class="contact">
				<form id="form" method="post" action="send.php">
					<fieldset>
						<label for="nombre">Nombre:</label>
						<input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre..." required autofocus />
					</fieldset>
					<fieldset>
						<label for="mail">Mail:</label>
						<input type="email" name="mail" id="mail" placeholder="Déjanos tu e-mail" required />
					</fieldset>
					<fieldset>
						<label for="mensaje">Mensaje:</label>
						<textarea name="mensaje" id="mensaje" >¿Qué deseas comentar...?</textarea>
						<input type="submit" name="enviar" id="enviar" value="Enviar" />
					</fieldset>
				</form>
				<div class="contact-img">
					<img src="../img/f1.png" alt="">
				</div>
			</article>
		</section>
	</main>

<?php


require('../templates/footer.php') ;



?>