<?php if ($_SESSION['permiso'] == 1): ?>
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Elimina los circuitos</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					
				<?php (include('feedback.php')) ?>				
				
  				<?php if ($c->circuitos() ): ?>		
					<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=elegir-circuito-eliminar" method="POST" class="form-inline text-center col-xs-12">
					  <div class="form-group has-success">
					    <label for="piloto" class="control-label">Escoge el circuito</label>
				      <select class="form-control" id="piloto" name="id_circuito">
				    	<option value="0">Elige el circuito a eliminar</option>	      	
				      	<?php foreach ($c->tabla as $iFila): ?>
						<option value="<?php echo $iFila['id'] ?>"><?php echo $iFila['nombre'] ?></option>	
						<?php endforeach; ?>					
					  </select>
					  </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-warning">¡Eliminar!</button>
					    </div>
					</form>
				<?php else: ?>
					<h2>No hay circuitos</h2>
				<?php endif; ?>		
				</div>
			</div>
		</main>
<?php endif; ?>	