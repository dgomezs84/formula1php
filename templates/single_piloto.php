
<?php if (isset($d->tabla)): ?>	
	<?php foreach($d->tabla as $iFila): ?>		
	<?php endforeach; ?>
	<?php $iClaves=array_keys($iFila) ?>  
	<?php $iValores=array_values($iFila) ?>
	
		<main>
				<h2><?php echo $iFila['nombre'] ?></h2>
						<div class="back">
					<a href="" class="icon-back"></a>
				</div>
				<section class="group1">
					<article class="driver">
						<div class="driver-bio">
							<ul class="driver-table">
								<?php for ($i=1; $i <count($iClaves)-3 ; $i++): ?>	
									<?php $iClase = strtolower($iClaves[$i]) ?> 
									<li class=<?php echo "icon-$iClase"?>><?php echo $iClaves[$i] ?>:</li>
								<?php endfor; ?>
								
							</ul>
							<ul class="driver-datos">
								<?php for ($i=1; $i < count($iValores)-3 ; $i++): ?>
									<li><?php echo $iValores[$i] ?></li>	
								<?php endfor; ?>						 
														
							</ul>
							<div class="driver-casco">
								<img src="../img/driver/<?php echo $iFila['foto'] ?>3.png" alt="">
							</div>
						</div>
						<div class="driver-photo">
							<img src="../img/driver/<?php echo $iFila['foto'] ?>1.jpg" alt="">
						</div>
						<div class="driver-img">
							<img src="../img/driver/<?php echo $iFila['foto'] ?>2.jpg" alt="">
						</div>
						<div class="driver-text">
							<p>
								<?php echo $iFila['Descripcion'] ?>
							</p>
						</div>
					</article>
				</section>
		</main>
<?php else: ?>
	<?php include('error.php') ?>
<?php endif; ?>
