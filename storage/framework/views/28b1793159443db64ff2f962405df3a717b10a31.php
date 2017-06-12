<?php $__env->startSection('content'); ?>
<br>
<div class="content-wrapper">

   <section class="content-header">
   <center>
      <h1>
        <b>System Service Request Information</b>
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo e(('/')); ?>"> Home</a></li>
       <li> <a href="<?php echo e(('/edit')); ?>">Profile</a></li>
       <li><a href="<?php echo e(action('deployController@index',  Auth::user()->id  )); ?>">Orders</a></li>
       <li class="active">View SSR</li>
      </ol>
      </center>
    </section>

      <div class="container">
<section class="content">
              
                <div class="col-md-12">
                  <div class="boxFocus color1">
                    <p><b>Name:</b> &nbsp <?php echo e($ssr->ssrName); ?></br></p>
                    <p><b>Contact Number:</b> </label> &nbsp <?php echo e($ssr->ssrContact); ?></br></p>
                    <p><b>Location:</b> </label> &nbsp <?php echo e($ssr->ssrLocation); ?></br></p>
                    <p><b>Problem:</b> </label>&nbsp <?php echo e($ssr->ssrProblem); ?></br></p>
                    <p><b>Service Requested:</b> </label>&nbsp<?php echo e($ssr->ssrServicereq); ?></br></p>
                    <a href="<?php echo e(action('ssrController@update', $ssr->ssrId)); ?>" class="btn btn-primary btn-flat">Edit Request<a></a>
                  </div>
                </div>
          

</div>
</div>
</section>
<br> <br> <br>

<?php echo $__env->make('layouts.nav2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>