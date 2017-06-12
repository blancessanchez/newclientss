<?php $__env->startSection('content'); ?>
<br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
     <center>
 <h1><b>Maintenance Request</b></h1>
      

          <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Maintenance</li>
          </ol>

      

      </center>
    </section>

<section class="content">
   <div class="row">
        <!-- left column -->

        <div class="col-md-10 col-md-offset-1">

   <form action="<?php echo e(action('deployController@addReq', $id)); ?>" method="POST">
   <?php echo e(csrf_field()); ?>

    <div class="col-md-12">
    <div class="col-md-6">
     <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
    <label for="address" style="color:black;"><b>Address</b></label>
    
        <input id="address" type="text" class="form-control col-md-6" name="address" placeholder="Enter address"></input>

        <?php if($errors->has('address')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('address')); ?></strong>
            </span>
        <?php endif; ?>

    </div>
    </div>
<div class="col-md-6">
 <label for="address" style="color:black;"><b>Type of Maintenance</b></label>
 <select name="category" class="form-control">
      <option value ="Repair design and programming errors" selected="selected">Repair design and programming errors</option>
      <option value ="Modify system to environmental changes">Modify system to environmental changes</option>
      <option value ="Add new features or improve system performance">Add new features or improve system performance</option>
      <option value ="Safeguard system for future problems">Safeguard system for future problems</option>
      <option value ="Others">Others</option>
    </select>
    </div>
    <br>
    <br> <br>
    <br> <br>
<div class="col-md-12">
   <div class="form-group<?php echo e($errors->has('maintenance') ? ' has-error' : ''); ?>">
    <label for="maintenance" style="color:black;"><b>Problem</b></label>
    
        <textarea id="maintenance" type="text" class="form-control col-md-6" name="maintenance" row="6" placeholder="Enter problem"></textarea>

        <?php if($errors->has('maintenance')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('maintenance')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
     <br>
    <br> <br>
   
    <input type="submit" value="Submit Request" class="btn btn-primary">
    <br>
    <br>
    </form>
   </div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>