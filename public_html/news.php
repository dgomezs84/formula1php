
<?php if($c->have_post() ): ?>
	<?php $c->the_post() ?>	

	<main>
		<h2>Archivo de noticias</h2>
		<section>
			<?php foreach ($c->tabla as $iFila): ?>
			<article class="news">
				<a href="<?php $_SERVER['PHP_SELF'] ?>?accion=single-noticia&id=<?php echo $iFila['n_id']?>" class="news-link">
					<h3><?php echo $iFila['n_titular'] ?></h3>
					<div class="news-box">
						<div class="news-img">
							<img src="../img/news/<?php echo $iFila['n_foto'] ?>.jpg" alt="Imagen de la noticia relacionada">
						</div>
						<div class="news-inbox">
							<p><span class="icon-calendar"></span><?php echo $iFila['n_hora'] ?></p>
							<h4><?php echo $iFila['n_entradilla'] ?></h4>
						</div>
					</div>
				</a>
			</article>
			<div class="clearfix"></div>			
			<?php endforeach; ?>
		</section>
<?php endif; ?>		
	</main>