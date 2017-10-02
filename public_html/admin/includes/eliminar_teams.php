<?php if ($_SESSION['permiso'] == 1): ?>
		<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Elimina las escuderias</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					
					<?php (include('feedback.php')) ?>				
				
				    <?php if ($c->escuderias()) : ?>	
						<form action="<?php $_SERVER['PHP_SELF'] ?>?accion=elegir-escuderia-eliminar" method="POST" class="form-inline text-center col-xs-12">
						  <div class="form-group has-success">
						    <label for="piloto" class="control-label">Escoge la escuderia a eliminar</label>
					      <select class="form-control" id="piloto" name="id_escuderia">
				      		<option value="0">Elige las escudería</option>
					      	<?php foreach ($c->tabla as $iFila): ?>
							<option value="<?php echo $iFila['id'] ?>"><?php echo $iFila['nombre'] ?></option>	
							<?php endforeach; ?>					
						  </select>
						  </div>
						  <div class="form-group">
						      <button type="submit" class="btn btn-warning">¡Eliminar!</button>
						    </div>
						</form>
				<?php endif; ?>
				</div>
			</div>
		</main>
<?php endif; ?>	
