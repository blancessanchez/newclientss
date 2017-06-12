<?php $__env->startSection('content'); ?>
<br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
     <center>
 <h1><b>Maintenance</b></h1>
      

          <ol class="breadcrumb">

             
            <!--<li class="active">Blank page</li>-->
          </ol>

      

      </center>
    </section>
<section class="content">
<div  class="box">
   <div class="box-header">
   <form action="<?php echo e(action('deployController@addReq', $id)); ?>" method="POST">
   <?php echo e(csrf_field()); ?>

   <div class="form-group<?php echo e($errors->has('maintenance') ? ' has-error' : ''); ?>">
    <label for="maintenance" class="col-md-4 control-label">Maintenance</label>
    <div class="col-md-6">
        <textarea id="maintenance" type="text" class="form-control col-md-6" name="maintenance" row="6"></textarea>

        <?php if($errors->has('maintenance')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('maintenance')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>
     <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
    <label for="address" class="col-md-4 control-label">Address</label>
    <div class="col-md-6">
        <textarea id="address" type="text" class="form-control col-md-6" name="address" row="6"></textarea>

        <?php if($errors->has('address')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('address')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
    </div>
      <select name="category" class="form-control">
      <option value ="Repair design and programming errors" selected="selected">Repair design and programming errors</option>
      <option value ="Modify system to environmental changes">Modify system to environmental changes</option>
      <option value ="Add new features or improve system performance">Add new features or improve system performance</option>
      <option value ="Safeguard system for future problems">Safeguard system for future problems</option>
      <option value ="Others">Others</option>
    </select>
    <input type="submit" value="Submit Request">
    </form>
   </div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>