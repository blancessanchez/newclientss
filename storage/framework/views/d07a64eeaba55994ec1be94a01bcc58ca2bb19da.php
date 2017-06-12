<?php $__env->startSection('content'); ?>
a
<div class="content-wrapper">
<section class="content-header">
<br>
 <center><b><h1>Update System Service Request</b></h1>
      <h3>

         <!--  <ol class="breadcrumb">

              <a href="<?php echo e(('/')); ?>"> Home</a>

              <li class="active"> &#10148; Inquire Product</li>
            <!--<li class="active">Blank page</li>-->
          <!-- </ol> --> 

      </h3>
      <hr>
</center>


  </section>

 <section class="content">
  <div class="row">
        <!-- left column -->

        <div class="col-md-10 col-md-offset-1">
          <!-- general form elements -->
          <div class="box box-primary">

            <!-- /.box-header -->
            <!-- form start -->


           

           
            <form action="<?php echo e(action('ssrController@store', $ssr->ssrId)); ?>" method="post">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">

                    <label for="name" style="color:black;"><b>Name</b></label>
                       <input type="text" class="form-control" name="ssrName" value = "<?php echo e($ssr->ssrName); ?>">
                       <p style="color:red;"><?php echo e($errors->first('ssrName')); ?></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">

                    <label for="contact" style="color:black;"><b>Contact</b></label>
                        <input type="text"  class="form-control" name="ssrContact"value = "<?php echo e($ssr->ssrContact); ?>">
                          <p style="color:red;"><?php echo e($errors->first('ssrContact')); ?></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">

                    <label for="location" style="color:black;"><b>Location</b></label>
                       <input type="text" class="form-control" name="ssrLocation"value = "<?php echo e($ssr->ssrLocation); ?>">
                       <p style="color:red;"><?php echo e($errors->first('ssrLocation')); ?></p>
                  </div>
                  <div class="form-group">

                    <label for="problem" style="color:black;"><b>Problem</b></label>
                         <textarea rows="8" cols="100" class="form-control" name="ssrProblem"><?php echo e($ssr->ssrProblem); ?></textarea>
                           <p style="color:red;"><?php echo e($errors->first('ssrProblem')); ?></p>
                  </div>
                  <div class="form-group">
                    <label for="Service Request" style="color:black;"><b>Service Request</b></label>
                       <textarea rows="8" cols="100" class="form-control" name="ssrServicereq"><?php echo e($ssr->ssrServicereq); ?></textarea>
                         <p style="color:red;"><?php echo e($errors->first('ssrServicereq')); ?></p>
                  </div>
          

                     <div class="form-group">
                    <label for="Attachmemt" style="color:black;"><b>Attachment</b></label>
                       <?php echo Form::file('file'); ?>

                        <small><i>Allowed extension files: .zip, .rar, .pdf, .docx, .doc</i></small>
                  </div>
         
                <br/>
                <input type="hidden" name="userid" value="<?php echo e(Auth::user()->acctUsername); ?>">
                <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                <input type="hidden" name="actType" value="Submitted SSR Form">
                        <div class="box-footer">
                <input type="submit" class="btn btn-success" value="Save">
                    </div>
            </form>

          </div>
</div>
</section>
<br><br><br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>