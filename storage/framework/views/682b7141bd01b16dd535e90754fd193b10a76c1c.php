<?php $__env->startSection('content'); ?>

		<!-- ======================================= content ======================================= -->
		<section id="page">
      <header class="page-header">
				<div class="container">
					<div class="row">

						<div class="col-xs-12 hidden-xs">
							<ul id="navTrail">
								<li><a href="index.html">Home</a></li>
								<li id="navTrailLast">Services</li>
							</ul>
						</div>

          </div>
          <h1>Our services</h1>
				</div>
			</header>
			<section id="content">

				<!-- section 1 -->
				<?php foreach($services as $service): ?>
				<section>

					<div class="container">
						<div class="row">
							<div class="col-md-6 pt40" data-nekoanim="fadeInLeftBig" data-nekodelay="200">
								 <img src="data:image/jpeg;base64,<?php echo base64_encode($service->image); ?>" />
							</div>

							<div class="col-md-5 col-md-offset-1 pt40 mt40">
								<h1><?php echo e($service->prodDesc); ?></h1>

								<p align="justify" style="font-size:19px;">
									<?php echo e($service->prodInfo); ?>

								</p>
								 <h2><a href="<?php echo e(action('productController@showServ', $service->prodId)); ?>" class="moreLink btn btn-info btn-lg">More Info</a></button></h2>
							</div>
						</div>
					</div>

				</section>
				<?php endforeach; ?>
				<!-- section 1 -->

				<!-- section 2 -->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>