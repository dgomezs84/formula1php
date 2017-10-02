<?php if ($_SESSION['permiso'] == 1): ?>
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Modifica las escuderías</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					
				<?php (include('feedback.php')) ?>				
				<?php if($c->escuderias()): ?>
					<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=elegir-escuderia-modificar" method="POST" class="form-inline text-center col-xs-12">
					  <div class="form-group has-success">
					    <label for="piloto" class="control-label">Escoge la escudería</label>
				      <select class="form-control" id="piloto" name="id_escuderia">
				      	<option value="0" >Elija escudería a modificar</option>
				      	
				      	<?php foreach ($c->tabla as $iFila): ?>
						<option value="<?php echo $iFila['id'] ?>"><?php echo $iFila['nombre'] ?></option>	
						<?php endforeach; ?>					
					  </select>
					  </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-success">¡Modificar!</button>
					    </div>
					</form>
				<?php endif; ?>

					<?php if ($d->tabla): ?>
						<?php foreach ($d->tabla as $iFila): ?>	

					

						<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=modificar-escuderia" method="POST" class="col-xs-10">
						<input type="hidden" name="id" value="<?php echo $equipo['id'] ?>">
						<div class="form-group">
						<?php if (isset($d->nombre)): ?>
							<?php $iFila['nombre'] =$d->nombre ?>
						<?php endif; ?>							
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $iFila['nombre'] ?>">
						</div>
						<?php if (isset($d->ano)): ?>
							<?php $iFila['año'] =$d->ano ?>
						<?php endif; ?>	

						<div class="form-group">
							<label for="ano">Año</label>
							<input type="number" name="ano" id="ano" class="form-control" value="<?php echo $iFila['año'] ?>">
						</div>
						<?php if (isset($d->sede)): ?>
							<?php $iFila['sede'] =$d->sede ?>
						<?php endif; ?>	

						<div class="form-group">
							<label for="sede">Base</label>
							<input type="text" name="sede" id="sede" class="form-control" value="<?php echo $iFila['sede'] ?>">
						</div>
						<?php if (isset($d->coche)): ?>
							<?php $iFila['coche'] =$d->coche ?>
						<?php endif; ?>	

						<div class="form-group">
							<label for="coche">Monoplaza</label>
							<input type="text" name="coche" id="coche" step="any" class="form-control" value="<?php echo $iFila['coche'] ?>">
						</div>
						<?php if (isset($d->titulo)): ?>
							<?php $iFila['titulo'] =$d->titulo ?>
						<?php endif; ?>	

						<div class="form-group">
							<label for="titulo">Títulos</label>
							<input type="number" name="titulo" id="titulo" class="form-control" value="<?php echo $iFila['titulo'] ?>">
						</div>
						<?php if (isset($d->podium)): ?>
							<?php $iFila['podium'] =$d->podium ?>
						<?php endif; ?>	

						<div class="form-group">
							<label for="podium">Podiums</label>
							<input type="number" name="podium" id="podium" class="form-control" value="<?php echo $iFila['podium'] ?>">
						</div>
						<?php if (isset($d->foto)): ?>
							<?php $iFila['foto'] =$d->foto ?>
						<?php endif; ?>	

						<div class="form-group">
							<label for="nombre_foto">Nombre Imagen</label>
							<input type="text" name="foto" id="nombre_foto" class="form-control" value="<?php echo $iFila['foto'] ?>">
						</div>
						<?php if (isset($d->pole)): ?>
							<?php $iFila['pole'] =$d->pole ?>
						<?php endif; ?>							
						

						<div class="form-group">
							<label for="pole">Poles</label>
							<input type="number" name="pole" id="pole" class="form-control" value="<?php echo $iFila['pole'] ?>">
						</div>
						<?php if (isset($d->rapido)): ?>
							<?php $iFila['rapido'] =$d->rapido ?>
						<?php endif; ?>							
						<div class="form-group">
							<label for="rapido">Vueltas rápidas</label>
							<input type="number" name="rapido" id="rapido" class="form-control" value="<?php echo $iFila['rapido'] ?>">
						</div>
						<?php if (isset($d->descripcion)): ?>
							<?php $iFila['descripcion'] =$d->descripcion ?>
						<?php endif; ?>							
						<div class="form-group">
							<label for="descripcion">Descripción</label>
							<textarea name="descripcion" id="descripcion" class="form-control"><?php echo $iFila['descripcion'] ?></textarea>
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
