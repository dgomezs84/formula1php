<?php if ($_SESSION['permiso'] == 1): ?>
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Modifica los circuitos</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					
					<?php (include('feedback.php')) ?>				
				<?php if($c->circuitos()): ?>
					<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=elegir-circuito-modificar" method="POST" class="form-inline text-center col-xs-12">
					  <div class="form-group has-success">
					    <label for="piloto" class="control-label">Escoge el circuito</label>
				      <select class="form-control" id="piloto" name="id_circuito">
				      	<option value="0" >Elige el circuito que quieres modificar</option>		      	
				      	<?php foreach ($c->tabla as $iFila): ?>
						<option value="<?php echo $iFila['id'] ?>"><?php echo $iFila['nombre'] ?></option>	
						<?php endforeach; ?>					
					  </select>
					  </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-success">¡Modificar!</button>
					    </div>
					</form>
				<?php else: ?>
					<h2>No hay circuitos</h2>
				<?php  endif; ?>

				<?php if ($d->tabla): ?>
					<?php foreach ($d->tabla as $iFila): ?>

						<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=modificar-circuito" method="POST" class="col-xs-10">

								<?php if (isset($d->gp_nombre)): ?>
									<?php $iFila['gp_nombre'] =$d->gp_nombre ?>
								<?php endif; ?>	
	
							<div class="form-group">
								<label for="gp_nombre">GP Nombre</label>
								<input type="text" name="gp_nombre" id="gp_nombre" class="form-control" value="<?php echo $iFila['gp_nombre'] ?>">
							</div>
								<?php if (isset($d->nombre)): ?>
									<?php $iFila['nombre'] =$d->nombre ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="nombre">Circuito Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $iFila['nombre'] ?>">
							</div>
								<?php if (isset($d->ciudad)): ?>
									<?php $iFila['ciudad'] =$d->ciudad ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="ciudad">Ciudad</label>
								<input type="text" name="ciudad" id="ciudad" class="form-control" value="<?php echo $iFila['ciudad'] ?>">
							</div>
								<?php if (isset($d->pais)): ?>
									<?php $iFila['pais'] =$d->pais ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="pais">País</label>
								<input type="text" name="pais" id="pais" class="form-control" value="<?php echo $iFila['pais'] ?>">
							</div>
								<?php if (isset($d->fecha)): ?>
									<?php $iFila['fecha'] =$d->fecha ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="fecha">Fecha</label>
								<input type="number" name="fecha" id="fecha" class="form-control" value="<?php echo $iFila['fecha'] ?>">
							</div>
								<?php if (isset($d->vuelta)): ?>
									<?php $iFila['vuelta'] =$d->vuelta ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="vuelta">Nº Vueltas</label>
								<input type="number" name="vuelta" id="vuelta" step="any" class="form-control" value="<?php echo $iFila['vuelta'] ?>">
							</div>
								<?php if (isset($d->longitud_vuelta)): ?>
									<?php $iFila['longitud_vuelta'] =$d->longitud_vuelta ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="longitud_vuelta">Longitud vuelta</label>
								<input type="number" name="longitud_vuelta" id="longitud_vuelta" class="form-control" value="<?php echo $iFila['longitud_vuelta'] ?>">
							</div>
								<?php if (isset($d->ganador)): ?>
									<?php $iFila['ganador'] =$d->ganador ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="ganador">Último Ganador</label>
								<input type="text" name="ganador" id="ganador" class="form-control" value="<?php echo $iFila['ganador'] ?>">
							</div>
								<?php if (isset($d->cir_17)): ?>
									<?php $iFila['cir_17'] =$d->cir_17 ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="cir_17">Fecha 2017</label>
								<input type="text" name="cir_17" id="cir_17" class="form-control" value="<?php echo $iFila['cir_17'] ?>">
							</div>
								<?php if (isset($d->cir_172)): ?>
									<?php $iFila['cir_172'] =$d->cir_172 ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="cir_172">Fecha 2017 corta</label>
								<input type="text" name="cir_172" id="cir_172" class="form-control" value="<?php echo $iFila['cir_172'] ?>">
							</div>
								<?php if (isset($d->p1)): ?>
									<?php $iFila['p1'] =$d->p1 ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="p1">Libres 1</label>
								<input type="text" name="p1" id="p1" class="form-control" value="<?php echo $iFila['p1'] ?>">
							</div>
								<?php if (isset($d->p2)): ?>
									<?php $iFila['p2'] =$d->p2 ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="p2">Libres 2</label>
								<input type="text" name="p2" id="p2" class="form-control" value="<?php echo $iFila['p2'] ?>">
							</div>
								<?php if (isset($d->p3)): ?>
									<?php $iFila['p3'] =$d->p3 ?>
								<?php endif; ?>	

							<div class="form-group">
								<label for="p3">Libres 3</label>
								<input type="text" name="p3" id="p3" class="form-control" value="<?php echo $iFila['p3'] ?>">
							</div>
								<?php if (isset($d->quality)): ?>
									<?php $iFila['quality'] =$d->quality ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="quality">Clasificación</label>
								<input type="text" name="quality" id="quality" class="form-control" value="<?php echo $iFila['quality'] ?>">
							</div>
								<?php if (isset($d->race)): ?>
									<?php $iFila['race'] =$d->race ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="race">Carrera</label>
								<input type="text" name="race" id="race" class="form-control" value="<?php echo $iFila['race'] ?>">
							</div>
								<?php if (isset($d->foto)): ?>
									<?php $iFila['foto'] =$d->foto ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="foto">Nombre foto</label>
								<input type="text" name="foto" id="foto" class="form-control" value="<?php echo $iFila['foto'] ?>">
							</div>
								<?php if (isset($d->longitud_total)): ?>
									<?php $iFila['longitud_total'] =$d->longitud_total ?>
								<?php endif; ?>								
							<div class="form-group">
								<label for="longitud_total">Longitud total</label>
								<input type="number" name="longitud_total" id="longitud_total" class="form-control" value="<?php echo $iFila['longitud_total'] ?>">
							</div>
								<?php if (isset($d->record)): ?>
									<?php $iFila['record'] =$d->record ?>
								<?php endif; ?>								
							<div class="form-group">							
								<label for="record">Record</label>
								<input type="text" name="record" id="record" class="form-control" value="<?php echo $iFila['record'] ?>">
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