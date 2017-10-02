
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Crea una noticia</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<?php (include('feedback.php')) ?>

					<?php if ($app['feedback'] ==  "Noticia creada correctamente"): ?>
						<?php unset($d->titular) ?>	
						<?php unset($d->entradilla) ?>	
						<?php unset($d->noticia) ?>	
						<?php unset($d->foto) ?>	
					<?php endif; ?>	
					<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=crear-noticia" method="POST" class="col-xs-10">		
						<div class="form-group">
							<label for="titular">Titular</label>
							<input type="text" name="titular" id="foto" class="form-control" value="<?php echo $d->titular ?>">
						</div>
						<div class="form-group">
							<label for="extracto">Entradilla</label>
							<textarea name="entradilla" id="extracto" class="form-control"><?php echo $d->entradilla  ?></textarea>
						</div>
						<div class="form-group">
							<label for="noticia">Noticia</label>
							<textarea name="noticia" id="noticia" class="form-control"><?php echo $d->noticia  ?></textarea>
						</div>
						<div class="form-group">
							<label for="foto">Nombre Imagen</label>
							<input type="text" name="foto" id="foto" class="form-control" value="<?php echo $d->foto ?>">
						</div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary btn-lg">Creala</button>
						</div>
					</form>

				</div>
			</div>
		</main>
