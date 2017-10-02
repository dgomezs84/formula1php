<?php $app['feedback'] .= $d->app['feedback']  ?>
				<?php if($app['feedback']): ?>
				      	<div class="row">
				      		<div class="col-xs-12">
				      			<div class="alert alert-warning">
				      			<?php echo $app['feedback'] ?>      				
				      			</div>
				      		</div>
				      	</div>
				<?php endif; ?>		