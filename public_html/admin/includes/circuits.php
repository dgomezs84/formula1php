<?php include('header.php') ?>
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Modifica, crea o elimina los circuitos</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">

					<form class="form-inline text-center col-xs-12">
					  <div class="form-group has-success">
					    <label for="piloto" class="control-label">Escoge el circuito</label>
				      <select class="form-control" id="piloto">
				      	<option>Crear</option>
						<option>Australia</option>
						<option>País</option>
						<option>PaísaPias</option>
						<option>País</option>
						<option>País</option>
					  </select>
					  </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-success">¡Al ataque!</button>
					    </div>
					</form>

					<form action="" method="POST" class="col-xs-10">
						<input type="hidden" name="id" value="<?php echo $circuito['id'] ?>">
						<div class="form-group">
							<label for="gp_nombre">GP Nombre</label>
							<input type="text" name="gp_nombre" id="gp_nombre" class="form-control" value="<?php echo $circuito['gp_nombre'] ?>">
						</div>
						<div class="form-group">
							<label for="nombre">Circuito Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $circuito['nombre'] ?>">
						</div>
						<div class="form-group">
							<label for="ciudad">Ciudad</label>
							<input type="text" name="ciudad" id="ciudad" class="form-control" value="<?php echo $circuito['ciudad'] ?>">
						</div>
						<div class="form-group">
							<label for="pais">País</label>
							<input type="text" name="pais" id="pais" class="form-control" value="<?php echo $circuito['pais'] ?>">
						</div>
						<div class="form-group">
							<label for="fecha">Fecha</label>
							<input type="number" name="fecha" id="fecha" class="form-control" value="<?php echo $circuito['fecha'] ?>">
						</div>
						<div class="form-group">
							<label for="vuelta">Nº Vueltas</label>
							<input type="number" name="vuelta" id="vuelta" step="any" class="form-control" value="<?php echo $circuito['vuelta'] ?>">
						</div>
						<div class="form-group">
							<label for="longitud_vuelta">Longitud vuelta</label>
							<input type="number" name="longitud_vuelta" id="longitud_vuelta" class="form-control" value="<?php echo $circuito['longitud_vuelta'] ?>">
						</div>
						<div class="form-group">
							<label for="ganador">Último Ganador</label>
							<input type="text" name="ganador" id="ganador" class="form-control" value="<?php echo $circuito['ganador'] ?>">
						</div>
						<div class="form-group">
							<label for="cir_17">Fecha 2017</label>
							<input type="text" name="cir_17" id="cir_17" class="form-control" value="<?php echo $circuito['cir_17'] ?>">
						</div>
						<div class="form-group">
							<label for="cir_172">Fecha 2017 corta</label>
							<input type="text" name="cir_172" id="cir_172" class="form-control" value="<?php echo $circuito['cir_172'] ?>">
						</div>
						<div class="form-group">
							<label for="p1">Libres 1</label>
							<input type="text" name="p1" id="p1" class="form-control" value="<?php echo $circuito['p1'] ?>">
						</div>
						<div class="form-group">
							<label for="p2">Libres 2</label>
							<input type="text" name="p2" id="p2" class="form-control" value="<?php echo $circuito['p2'] ?>">
						</div>
						<div class="form-group">
							<label for="p3">Libres 3</label>
							<input type="text" name="p3" id="p3" class="form-control" value="<?php echo $circuito['p3'] ?>">
						</div>
						<div class="form-group">
							<label for="quality">Clasificación</label>
							<input type="text" name="quality" id="quality" class="form-control" value="<?php echo $circuito['quality'] ?>">
						</div>
						<div class="form-group">
							<label for="race">Carrera</label>
							<input type="text" name="race" id="race" class="form-control" value="<?php echo $circuito['race'] ?>">
						</div>
						<div class="form-group">
							<label for="foto">Nombre foto</label>
							<input type="text" name="foto" id="foto" class="form-control" value="<?php echo $circuito['foto'] ?>">
						</div>
						<div class="form-group">
							<label for="longitud_total">Longitud total</label>
							<input type="number" name="longitud_total" id="longitud_total" class="form-control" value="<?php echo $circuito['longitud_total'] ?>">
						</div>
						<div class="form-group">
							<label for="record">Record</label>
							<input type="text" name="record" id="record" class="form-control" value="<?php echo $circuito['record'] ?>">
						</div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary btn-lg">Modificar</button>
						</div>
					</form>
					<form action="" class="col-xs-2 col-md-2">
						<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
					</form>
				</div>
			</div>
		</main>
<?php include('footer.php') ?>