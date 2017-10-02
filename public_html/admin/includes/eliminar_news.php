<?php if ($_SESSION['permiso'] == 1): ?>
	
	<main>
			<div class="container-fluid bg-success">
				<div class="page-header text-success text-center">
					<h1>Eliminar una noticia</h1>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<?php (include('feedback.php')) ?>
					<?php if ($c->noticias() ): ?>
						<table class="table">
							  <thead>
							    <tr>
							      <th>id</th>
							      <th>Titular</th>
							      <th>Borrar Noticia</th>
							    </tr>
							  </thead>
							  <tbody>
							  <?php foreach($c->tabla as $iFila): ?>	
							    <tr>
							      <td><?php echo $iFila['id'] ?></td>
							      <td><?php echo $iFila['titular'] ?></td>
							      <td><a href="<?php echo $_SERVER['PHP_SELF'] ?>?accion=elegir-noticia-eliminar&id=<?php echo $iFila['id'] ?>" class="btn-remove"><span class="glyphicon glyphicon-remove-circle"></span></a></td>						      
							    </tr>
							  <?php endforeach; ?>						    
							  </tbody>
						</table>
					<?php else : ?>
							<h3>No hay noticias a eliminar</h3>
					<?php endif; ?>
				</div>
			</div>
		</main>
<?php endif; ?>			
