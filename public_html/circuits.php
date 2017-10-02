<main>
		<h2>Todos los circuitos</h2>
		<section class="group1">
			<?php $c->todos_circuitos() ?>
			<?php foreach ($c->tabla as $iFila): ?>
			<article class="group">
				<a href="<?php $_SERVER['PHP_SELF'] ?>?accion=single-circuito&id=<?php echo $iFila['id']?>">
					<div class="capa"><img src="../img/circuit/<?php echo $iFila['foto'] ?>1.jpg" alt=""></div>
					<div class="group-box">
						<p><?php echo $iFila['ciudad'] ?></p>
						<h3><?php echo $iFila['nombre_pais'] ?></h3>
						<h4><?php echo $iFila['hora2'] ?></h4>
					</div>
				</a>
			</article>
		<?php endforeach; ?>
		</section>
	</main>