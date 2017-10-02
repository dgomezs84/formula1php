<?php if (isset($d->tabla)): ?>	
	<?php foreach($d->tabla as $iFila): ?>		

<main>
		<h2>Siempre al día</h2>
		<div class="back">
			<a href="" class="icon-back"></a>
		</div>
		<section>
			<article class="noticia">
				<h3><?php echo $iFila['n_titular'] ?></h3>
				<h4><?php echo $iFila['n_entradilla'] ?></h4>
				<div class="noticia-img">
					<img src="../img/news/<?php echo $iFila['n_foto'] ?>.jpg" alt="">
				</div>
				<p class="date"><?php echo $iFila['n_hora'] ?></p>
				<p><?php echo $iFila['n_noticia'] ?></p>
			</article>
		</section>
	<?php endforeach; ?>	
<?php else: ?>
	<?php include('error.php') ?>
<?php endif; ?>
	</main>