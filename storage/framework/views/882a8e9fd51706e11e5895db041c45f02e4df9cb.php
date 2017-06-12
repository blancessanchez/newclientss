<?php $__env->startSection('content'); ?>

<div class="content-wrapper">

 <section class="content-header">
 <br>
 <center><b><h1>System Service Request</b></h1>
      <h3>

          <ol class="breadcrumb">

              <a href="<?php echo e(('/')); ?>"> Inquire Product</a>

               <li class="active"> &#10148; <b style="color:#000AB1;"> System Service Request</b>   &#10148; Downpayment &#10148; Payment Method </li>

              
            
          </ol>

      </h3>
</center>
      
    </section>

 <section class="content">
  <div class="row">
        <!-- left column -->

        <div class="col-md-10 col-md-offset-1">
          <!-- general form elements -->
          
          
            <!--<div class="box-header with-border">
             <center> <h3 class="box-title">Request your system</h3></center>
            </div>-->
            <!-- /.box-header -->
            <!-- form start -->
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Request your system. <b>Fill out the fields completely!</b>  
</div>
 <style>
.textbox {
    padding: 8px;
    border-radius: 3px;
    border: 1px solid #CCC;
    background-image: none;
    width: 100%;
}
 .textbox:focus {
    outline-color: #54B4AD;
}
</style>




             <?php echo Form::open(array('url' => 'ssrform', 'files' => 'true')); ?>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="box-body">
                
                <div class="col-md-12">
                  <div class="form-group">

                    <label for="name" style="color:black;"><b>Name </b></label>
                       <input type="text" class="textbox" name="ssrName" placeholder="Enter your name">
                       <p style="color:red;"><?php echo e($errors->first('ssrName')); ?></p>
                  </div>
                
                
                  <div class="form-group">

                    <label for="contact" style="color:black;"><b>Contact Number</b></label>
                        <input type="text"  class="textbox" name="ssrContact" placeholder="Enter contact number">
                          <p style="color:red;"><?php echo e($errors->first('ssrContact')); ?></p>
                  </div>
               
                  <div class="form-group">

                    <label for="location" style="color:black;"><b>Location</b></label>
                       <input type="text" class="textbox" name="ssrLocation" placeholder="Location">
                       <p style="color:red;"><?php echo e($errors->first('ssrLocation')); ?></p>
                  </div>
                  <div class="form-group">

                    <label for="problem" style="color:black;"><b>Problem</b></label>
                         <textarea rows="8" cols="100" class="textbox" name="ssrProblem" placeholder="Enter problem"></textarea>
                           <p style="color:red;"><?php echo e($errors->first('ssrProblem')); ?></p>
                  </div>
                  <div class="form-group">
                    <label for="Service Request" style="color:black;"><b>Service Request</b></label>
                       <textarea rows="8" cols="100" class="textbox" name="ssrServicereq" placeholder="Enter service request"></textarea>
                         <p style="color:red;"><?php echo e($errors->first('ssrServicereq')); ?></p>
                  </div>
                    <div class="form-group">
                    <label for="Product Type" style="color:black;"><b>Product Type</b></label>
                       <?php echo Form::select('product', $products,$id,  ['disabled' => 'disabled']); ?>


                  </div>

                     <div class="form-group">
                    <label for="Attachmemt" style="color:black;"><b>Attachment</b></label>&nbsp <small style="color:red;">Required</small>
                       <input name="file" class="file" type="file">
                       <small><i>Allowed extension files: .zip, .rar, .pdf, .docx, .doc</i></small>
                  </div>
         
                <br/>
                <input type="hidden" name="userid" value="<?php echo e(Auth::user()->acctUsername); ?>">
                <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                <input type="hidden" name="prod" value="<?php echo e($id); ?>">
                <input type="hidden" name="actType" value="Submitted SSR Form">
                        <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Submit">
                    </div>


           <?php echo Form::close(); ?>

          </div>
</div>
</section>
<br><br><br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>