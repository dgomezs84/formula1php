	<?php if ($_SESSION['permiso'] == 1): ?>
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Modifica, crea o elimina los pilotos</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					
					<?php (include('feedback.php')) ?>				
				
					<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=elegir-piloto-modificar" method="POST" class="form-inline text-center col-xs-12">
					  <div class="form-group has-success">
					    <label for="piloto" class="control-label">Escoge el piloto</label>
				      <select class="form-control" id="piloto" name="id_piloto">
				      	<option value="45" >Crear</option>
				      	<?php $c->pilotos() ?>
				      	<?php foreach ($c->tabla as $iFila): ?>
						<option value="<?php echo $iFila['id'] ?>"><?php echo $iFila['nombre'] ?></option>	
						<?php endforeach; ?>					
					  </select>
					  </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-success">¡Modificar!</button>
					    </div>
					</form>

					<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=elegir-piloto-eliminar" method="POST" class="form-inline text-center col-xs-12">
					  <div class="form-group has-success">
					    <label for="piloto" class="control-label">Escoge el piloto</label>
				      <select class="form-control" id="piloto" name="id_piloto">				      	
				      	<?php foreach ($c->tabla as $iFila): ?>
						<option value="<?php echo $iFila['id'] ?>"><?php echo $iFila['nombre'] ?></option>	
						<?php endforeach; ?>					
					  </select>
					  </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-warning">¡Eliminar!</button>
					    </div>
					</form>


					<?php if ($d->tabla): ?>
						<?php foreach ($d->tabla as $iFila): ?>

						<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=modificar-piloto" method="POST" class="col-xs-10">
							<input type="hidden" name="id" value="<?php echo $piloto['id'] ?>">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $iFila['nombre'] ?>">
							</div>
							<div class="form-group">
								<label for="apellido">Apellido</label>
								<input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $iFila['apellido'] ?>">
							</div>
							<div class="form-group">
								<label for="numero">Número</label>
								<input type="number" name="numero" id="numero" class="form-control" value="<?php echo $iFila['numero'] ?>">
							</div>
							<!-- <div class="form-group">
								<label for="nacimiento">Nacimiento</label>
								<input type="date" name="nacimiento" id="nacimiento" step="any" class="form-control" value="<?php echo $iFila['nacimiento'] ?>">
							</div> -->
							<div class="form-group">
								<label for="debut">Debut</label>
								<input type="number" name="debut" id="debut" class="form-control" value="<?php echo $iFila['debut'] ?>">
							</div>
							<div class="form-group">
								<label for="pais">Nacionalidad</label>
								<input type="text" name="pais" id="pais" class="form-control" value="<?php echo $iFila['pais'] ?>">
							</div>
							<div class="form-group">
								<label for="n_titulo">Títulos</label>
								<input type="text" name="titulos" id="n_titulo" class="form-control" value="<?php echo $iFila['titulos'] ?>">
							</div>
							<div class="form-group">
								<label for="n_podium">Podiums</label>
								<input type="text" name="podiums" id="n_podium" class="form-control" value="<?php echo $iFila['podiums'] ?>">
							</div>
							<div class="form-group">
								<label for="n_punto">Puntos</label>
								<input type="text" name="puntos" id="n_punto" class="form-control" value="<?php echo $iFila['puntos'] ?>">
							</div>
							<div class="form-group">
								<label for="n_gp">GPs</label>
								<input type="text" name="gps" id="n_gp" class="form-control" value="<?php echo $iFila['gps'] ?>">
							</div>
							<div class="form-group">
								<label for="minitexto">Descripción corta</label>
								<textarea name="minitexto" id="minitexto" class="form-control"> <?php echo $iFila['minitexto'] ?></textarea>
							</div>
							<div class="form-group">
								<label for="descripcion">Descripción</label>
								<textarea name="descripcion" id="descripcion" class="form-control"><?php echo $iFila['descripcion'] ?></textarea>
							</div>
							<div class="form-group">
								<label for="id_fk">Equipo</label>
								<select class="form-control" id="equipo" name="equipo">
						      	<option>Equipo</option>
						      	<?php unset($c->tabla) ?>
						      	<?php $c->escuderias() ?>
						      	<?php foreach ($c->tabla as $iFila2): ?>
							      	<?php if ($iFila2['id'] == $iFila['id_escuderia']): ?>
							      		<?php $iSelected="selected" ?>
							      	<?php endif; ?>	
									<option value="<?php echo $iFila2['id'] ?>" <?php echo $iSelected ?>><?php echo $iFila2['nombre'] ?></option>
									<?php unset($iSelected) ?>	
								<?php endforeach; ?>					
							  </select>
							</div>
							<!-- <div class="form-group">
								<label for="nombre_foto">Nombre Imagen</label>
								<input type="number" name="nombre_foto" id="nombre_foto" class="form-control" value="<?php echo $iFila['foto'] ?>">
							</div> -->
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
