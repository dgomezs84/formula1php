<main>
		<h2>Las Escuderías</h2>
		<section class="group1">
			<?php 	$c->todos_escuderias() ?>
			<?php 	foreach ($c->tabla as $iFila): ?>	
			<article class="teams">
				<a href="<?php $_SERVER['PHP_SELF'] ?>?accion=single-escuderia&id=<?php echo $iFila['id']?>">
					<div class="teams-left">
						<h3><?php echo $iFila['nombre'] ?></h3>
						<p><span class="icon-titulos"></span>Títulos: <?php 	echo $iFila['titulos'] ?></p>
						<img src="../img/team/<?php echo $iFila['foto'] ?>1.png" alt="">
					</div>
					<div class="teams-right">
						<img src="../img/team/<?php echo $iFila['foto'] ?>3.jpg" alt="">
					</div>
				</a>
			</article>	
			<?php endforeach; ?>		
		</section>
	</main>