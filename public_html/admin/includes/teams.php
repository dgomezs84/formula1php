<?php include('header.php') ?>
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Modifica, crea o elimina las escuderías</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">

					<form class="form-inline text-center col-xs-12">
					  <div class="form-group has-success">
					    <label for="piloto" class="control-label">Escoge la escudería</label>
				      <select class="form-control" id="piloto">
				      	<option>Crear</option>
						<option>Mercedes</option>
						<option>Mercedes</option>
						<option>Mercedesasdfasdfasdf</option>
						<option>Mercedes</option>
						<option>Mercedes</option>
						</select>
					  </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-success">¡Al ataque!</button>
					    </div>
					</form>

					<form action="" method="POST" class="col-xs-10">
						<input type="hidden" name="id" value="<?php echo $equipo['id'] ?>">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $equipo['nombre'] ?>">
						</div>
						<div class="form-group">
							<label for="ano">Año</label>
							<input type="number" name="ano" id="ano" class="form-control" value="<?php echo $equipo['ano'] ?>">
						</div>
						<div class="form-group">
							<label for="sede">Base</label>
							<input type="text" name="sede" id="sede" class="form-control" value="<?php echo $equipo['sede'] ?>">
						</div>
						<div class="form-group">
							<label for="coche">Monoplaza</label>
							<input type="text" name="coche" id="coche" step="any" class="form-control" value="<?php echo $equipo['coche'] ?>">
						</div>
						<div class="form-group">
							<label for="titulo">Títulos</label>
							<input type="number" name="titulo" id="titulo" class="form-control" value="<?php echo $equipo['titulo'] ?>">
						</div>
						<div class="form-group">
							<label for="podium">Podiums</label>
							<input type="number" name="podium" id="podium" class="form-control" value="<?php echo $equipo['podium'] ?>">
						</div>
						<div class="form-group">
							<label for="pole">Poles</label>
							<input type="number" name="pole" id="pole" class="form-control" value="<?php echo $equipo['pole'] ?>">
						</div>
						<div class="form-group">
							<label for="n_podium">Podiums</label>
							<input type="number" name="n_podium" id="n_podium" class="form-control" value="<?php echo $equipo['n_podium'] ?>">
						</div>
						<div class="form-group">
							<label for="rapido">Vueltas rápidas</label>
							<input type="number" name="rapido" id="rapido" class="form-control" value="<?php echo $equipo['rapido'] ?>">
						</div>
						<div class="form-group">
							<label for="descripcion">Descripción</label>
							<textarea name="descripcion" id="descripcion" class="form-control"><?php echo $equipo['descripcion'] ?></textarea>
						</div>
						<div class="form-group">
							<label for="nombre_foto">Nombre Imagen</label>
							<input type="number" name="nombre_foto" id="nombre_foto" class="form-control" value="<?php echo $equipo['nombre_foto'] ?>">
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