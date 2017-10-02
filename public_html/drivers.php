	<main>
		<h2>Conoce los pilotos</h2>		
			<section class="group1">
				<?php $c->todos_pilotos() ?>
				<?php foreach ($c->tabla as $iFila): ?>
					<article class="group">						
						<a href="<?php $_SERVER['PHP_SELF'] ?>?accion=single-piloto&id=<?php echo $iFila['id']?>">
							<div class="capa"><img src="../img/driver/<?php echo $iFila['foto'] ?>1.jpg" alt=""></div>					
							<div class="group-box">
								<p><?php echo $iFila['numero'] ?></p>
								<h3><?php echo $iFila['nombre_completo'] ?></h3>
								<h4><?php echo $iFila['escuderia'] ?></h4>
							</div>
						</a>
					</article>
				<?php endforeach; ?>	
			</section>			
	</main>		

	
						