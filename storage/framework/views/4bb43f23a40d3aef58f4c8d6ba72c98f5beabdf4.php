<?php $__env->startSection('content'); ?>

		<!-- ======================================= content ======================================= -->
		<section id="page">
      <header class="page-header">
				<div class="container">
					<div class="row">

						<div class="col-md-12 hidden-xs">
							<ul id="navTrail">
								<li><a href="<?php echo e(url('home')); ?>">Home</a></li>
								<li id="navTrailLast">Contact</li>
							</ul>
						</div>

          </div>
          <h1>Keep in touch with us!</h1>
				</div>
			</header>
			<section id="content" class="mt30">
				<div class="container">

					<div class="row">
						<div class="col-md-6 col-sm-0">

							<address>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2296.9810512116633!2d121.05903895830043!3d14.482032957347108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf7236908b6d%3A0xbd944f6d972f40e3!2sHoly+Family+Village!5e0!3m2!1sfil!2sph!4v1472973764593" width="460" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
							</address>
						</div>

						<form method="post" action="email.php" id="contactfrm" role="form" onsubmit="alert('success');">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter name"  title="Please enter your name (at least 2 characters)" required/>
								</div>
								<div class="form-group">
									<label for="email">Email Address</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="Enter email address" title="Please enter a valid email address" required/>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<input name="subject" class="form-control" type="subject" id="subject"  value="" placeholder="Enter subject" title="Please enter subject" required>
								</div>
                <div class="form-group">
									<label for="comments">Message</label>
									<textarea name="comment" class="form-control" id="comments" cols="20" rows="20" placeholder="Enter your message..." title="Please enter your message (at least 10 characters)" required></textarea>
								</div>
								<!--<fieldset class="clearfix securityCheck">
									<h3>Security</h3>
									<div class="form-group">
										<img src="js-plugin/neko-contact-ajax-plugin/php/image.html" alt="Image verification"/>
										<input class="required form-control"  id="verify" name="verify" type="text" >
									</div>
								</fieldset>-->
                <div class="result"></div>
								<button name="submit" type="submit" class="btn btn-lg" id="submit" > Submit</button>
							</div>

						</form>
					</div>
				</div>
				<br><br>

			</section>
		</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>