<?php if ($_SESSION['permiso'] == 1): ?>
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Modificar una noticia</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<?php (include('feedback.php')) ?>
					<?php if ($c->noticias() ): ?>						
						<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=elegir-noticia-modificar" method="POST" class="form-inline text-center col-xs-12">
						  <div class="form-group has-success">
						    <label for="piloto" class="control-label">Escoge la noticia</label>
					      <select class="form-control" id="piloto" name="id_noticia">
					      	<?php foreach ($c->tabla as $iFila): ?>
							<option value="<?php echo $iFila['id'] ?>"><?php echo $iFila['titular'] ?></option>	
							<?php endforeach; ?>					
						  </select>
						  </div>
						  <div class="form-group">
						      <button type="submit" class="btn btn-success">¡Modificar!</button>
						    </div>
						    
						</form>	
					<?php else: ?>
						<h2>No hay noticias a modificar</h2>
					<?php endif; ?>

					<?php if ($d->tabla): ?>
						<?php foreach ($d->tabla as $iFila): ?>						

							<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=modificar-noticia" method="POST" class="col-xs-10">	
								<?php if (isset($d->titular)): ?>
									<?php $iFila['titular'] =$d->titular ?>
								<?php endif; ?>	
								<div class="form-group">
									<label for="titular">Titular</label>
									<input type="text" name="titular" id="foto" class="form-control" value="<?php echo $iFila['titular']  ?>">
								</div>

								<?php if (isset($d->entradilla)): ?>
									<?php $iFila['entradilla'] =$d->entradilla ?>
								<?php endif; ?>									
								<div class="form-group">
									<label for="extracto">Entradilla</label>
									<textarea name="entradilla" id="extracto" class="form-control"><?php echo  $iFila['entradilla'] ?></textarea>
								</div>

								<?php if (isset($d->noticia)): ?>
									<?php $iFila['noticia'] =$d->noticia ?>
								<?php endif; ?>									
								<div class="form-group">
									<label for="noticia">Noticia</label>
									<textarea name="noticia" id="noticia" class="form-control"><?php echo $iFila['noticia']   ?></textarea>
								</div>

								<?php if (isset($d->foto)): ?>
									<?php $iFila['foto'] =$d->foto ?>
								<?php endif; ?>									
								<div class="form-group">
									<label for="foto">Nombre Imagen</label>
									<input type="text" name="foto" id="foto" class="form-control" value="<?php echo $iFila['foto'] ?>">
								</div>
								<div class="form-group text-right">
									<button type="submit" class="btn btn-primary btn-lg">Modificar</button>
								</div>
							</form>
						<?php endforeach; ?>
					<?php endif; ?>					

				</div>
			</div>
		</main>
<?php endif; ?>		
