<?php if (isset($d->tabla)): ?>	
	<?php foreach($d->tabla as $iFila): ?>		
	<?php endforeach; ?>
	<?php $iClaves=array_keys($iFila) ?>  
	<?php $iValores=array_values($iFila) ?>	

	<main>
		<h2><?php echo $iFila['escuderia'] ?></h2>
		<div class="back">
			<a href="" class="icon-back"></a>
		</div>
		<section>
			<article class="team">
				<div class="team-first">
					<div class="team-logo">
						<img src="../img/team/<?php echo $iFila['foto'] ?>1.png" alt="">
					</div>
					<div class="team-bio">
						<ul class="team-table">
							<?php for ($i=0; $i <count($iClaves)-3 ; $i++): ?>
								<?php $iClase = strtolower($iClaves[$i]) ?> 
								<li class=<?php echo "icon-$iClase"?>><?php echo $iClaves[$i] ?>:</li>
							<?php endfor; ?>
							
							
						</ul>
						<ul class="team-datos">
							<?php for ($i=0; $i < count($iValores)-3 ; $i++): ?>
									<li><?php echo $iValores[$i] ?></li>	
							<?php endfor; ?>	
						</ul>
					</div>
				</div>
				<div class="team-car">
					<img src="../img/team/<?php echo $iFila['foto'] ?>2.jpg" alt="">
				</div>
				<?php if ($c->pilotos_by_escuderia($d->id) ): ?>
					<div class="team-driver">
						
						<h4>Pilotos</h4>
						
						<?php $iContador = 1 ?>					
						<?php foreach ($c->tabla as $iFila2): ?>
							<?php if ($iContador==1 ): ?>
								<?php $iClase = "uno"   ?>	
							<?php else: ?>
								<?php $iClase = "dos"   ?>
							<?php  endif; ?>	
							<div class=<?php echo "team-$iClase" ?>>
								<img src="../img/driver/<?php echo $iFila2['foto'] ?>1.jpg" alt="">
								<div class="team-box">
									<h3><?php echo $iFila2['nombre'] ?></h3>
									<p><?php echo $iFila2['minitexto'] ?></p>	
								</div>
							</div>
							<?php $iContador++ ?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<div class="team-text">
					<h4>Un poco de información...</h4>
					<p><?php echo $iFila['descripcion'] ?></p>
				</div>
					
				
			</article>
		</section>
	</main>
<?php else: ?>
	<?php include('error.php') ?>
<?php endif; ?>	