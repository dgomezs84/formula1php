<?php if (isset($d->tabla)): ?>	
	<?php foreach($d->tabla as $iFila): ?>		
	<?php endforeach; ?>
	<?php $iClaves=array_keys($iFila) ?>  
	<?php $iValores=array_values($iFila) ?>		


	<main>
		<h2><?php echo $iFila['pais'] ?></h2>
		<div class="back">
			<a href="" class="icon-back"></a>
		</div>
		<section class="group1">
			<article class="circuit">
				<div class="circuit-first">
					<div class="circuit-logo">
						<h3><?php echo $iFila['gp_nombre'] ?></h3>
						<img src="../img/circuit/<?php echo $iFila['foto'] ?>.png" alt="">
					</div>
					<div class="circuit-bio">
						<h3><?php echo $iFila['nombre'] ?></h3>
						<ul class="circuit-table">
							<?php for ($i=0; $i <count($iClaves)-9 ; $i++): ?>
								<?php $iValor = ucfirst(($iClaves[$i])) ?> 
								<li class=<?php echo "icon-$iClaves[$i]"?>><?php echo $iValor ?>:</li>
							<?php endfor; ?>
						</ul>
						<ul class="circuit-datos">
							<?php for ($i=0; $i < count($iValores)-9 ; $i++): ?>
									<li><?php echo $iValores[$i] ?></li>	
							<?php endfor; ?>								
						</ul>
					</div>
				</div>
				<div class="circuit-horarios">
					<h4>Horarios (hora local)</h4>
					<h3><?php echo $iFila['horario'] ?></h3>
					<table>
						<tr>
							<th>Libres 1</th>
							<th><?php echo $iFila['libres1'] ?></th>
						</tr>
						<tr>
							<th>Libres 2</th>
							<th><?php echo $iFila['libres2'] ?></th>
						</tr>
						<tr>
							<th>Libres 3</th>
							<th><?php echo $iFila['libres3'] ?></th>
						</tr>
						<tr>
							<th>Clasificación</th>
							<th><?php echo $iFila['clasificacion'] ?></th>
						</tr>
						<tr>
							<th>Carrera</th>
							<th><?php echo $iFila['carrera'] ?></th>
						</tr>
					</table>
				</div>
				<h4>Imágenes del circuito</h4>
				<div class="rslides_container">
					<ul class="rslides">
						<?php for ($i=1; $i <=5 ; $i++):	?>						
							<li class="slider-item"><img src="../img/circuit/<?php echo $iFila['foto'] . $i?>.jpg" alt=""></li>
						<?php endfor; ?>
						
					</ul>
				</div>
			</article>
		</section>
	</main>
<?php else: ?>
	<?php include('error.php') ?>
<?php endif; ?>		