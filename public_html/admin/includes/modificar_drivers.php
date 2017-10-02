<?php if ($_SESSION['permiso'] == 1): ?>
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Modifica los pilotos</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					
					<?php (include('feedback.php')) ?>				
				
					<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=elegir-piloto-modificar" method="POST" class="form-inline text-center col-xs-12">
					  <div class="form-group has-success">
					    <label for="piloto" class="control-label">Escoge el piloto</label>
				      <select class="form-control" id="piloto" name="id_piloto">
				      	<option value="0" >Elija piloto a modificar</option>
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

					<?php if ($d->tabla): ?>
						<?php foreach ($d->tabla as $iFila): ?>

						<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=modificar-piloto" method="POST" class="col-xs-10">
							<?php if (isset($d->nombre)): ?>
								<?php $iFila['nombre'] =$d->nombre ?>
							<?php endif; ?>							
							
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $iFila['nombre'] ?>">
							</div>
							<?php if (isset($d->apellido)): ?>
								<?php $iFila['apellido'] =$d->apellido ?>
							<?php endif; ?>								
							<div class="form-group">
								<label for="apellido">Apellido</label>
								<input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $iFila['apellido'] ?>">
							</div>
							<?php if (isset($d->numero)): ?>
								<?php $iFila['numero'] =$d->numero ?>
							<?php endif; ?>									
							<div class="form-group">
								<label for="numero">Número</label>
								<input type="number" name="numero" id="numero" class="form-control" value="<?php echo $iFila['numero'] ?>">
							</div>

								<?php $iFormato = new DateTime($iFila['nacimiento']) ?>
								<?php $iFecha_espanola = $iFormato->format('d-m-Y') ?>
								<?php $iFila['nacimiento'] = $iFecha_espanola ?>

							<?php if (isset($d->nacimiento)): ?>
								<?php $iFila['nacimiento'] =$d->nacimiento ?>
							<?php endif; ?>																	

							<div class="form-group">
								<label for="nacimiento">Nacimiento (dd-mm-yyyy)</label>
								<input type="text" name="nacimiento" id="nacimiento" step="any" class="form-control" value="<?php echo $iFila['nacimiento'] ?>">
							</div>

							<?php if (isset($d->debut)): ?>
								<?php $iFila['debut'] =$d->debut ?>
							<?php endif; ?>									

							<div class="form-group">
								<label for="debut">Debut</label>
								<input type="number" name="debut" id="debut" class="form-control" value="<?php echo $iFila['debut'] ?>">
							</div>

							<?php if (isset($d->pais)): ?>
								<?php $iFila['pais'] =$d->pais ?>
							<?php endif; ?>		

							<div class="form-group">
								<label for="pais">Nacionalidad</label>
								<input type="text" name="pais" id="pais" class="form-control" value="<?php echo $iFila['pais'] ?>">
							</div>
							<?php if (isset($d->titulos)): ?>
								<?php $iFila['titulos'] =$d->titulos ?>
							<?php endif; ?>		

							<div class="form-group">
								<label for="n_titulo">Títulos</label>
								<input type="text" name="titulos" id="n_titulo" class="form-control" value="<?php echo $iFila['titulos'] ?>">
							</div>

							<?php if (isset($d->podiums)): ?>
								<?php $iFila['podiums'] =$d->podiums ?>
							<?php endif; ?>		

							<div class="form-group">
								<label for="n_podium">Podiums</label>
								<input type="text" name="podiums" id="n_podium" class="form-control" value="<?php echo $iFila['podiums'] ?>">
							</div>
							<?php if (isset($d->puntos)): ?>
								<?php $iFila['puntos'] =$d->puntos ?>
							<?php endif; ?>		

							<div class="form-group">
								<label for="n_punto">Puntos</label>
								<input type="text" name="puntos" id="n_punto" class="form-control" value="<?php echo $iFila['puntos'] ?>">
							</div>
							<?php if (isset($d->gps)): ?>
								<?php $iFila['gps'] =$d->gps ?>
							<?php endif; ?>		

							<div class="form-group">
								<label for="n_gp">GPs</label>
								<input type="text" name="gps" id="n_gp" class="form-control" value="<?php echo $iFila['gps'] ?>">
							</div>
							<?php if (isset($d->minitexto)): ?>
								<?php $iFila['minitexto'] =$d->minitexto ?>
							<?php endif; ?>		

							<div class="form-group">
								<label for="minitexto">Descripción corta</label>
								<textarea name="minitexto" id="minitexto" class="form-control"> <?php echo $iFila['minitexto'] ?></textarea>
							</div>
							<?php if (isset($d->descripcion)): ?>
								<?php $iFila['descripcion'] =$d->descripcion ?>
							<?php endif; ?>		

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
