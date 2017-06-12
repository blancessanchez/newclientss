<?php $__env->startSection('content'); ?>
<br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
     <center>
 <h1><b>Requests</b></h1>
      

          <ol class="breadcrumb">

             
            <!--<li class="active">Blank page</li>-->
          </ol>

      

      </center>
    </section>
<section class="content">
<div  class="box">
   <div class="box-header">
   		<form action="<?php echo e(action('deployController@updateReq', $main->id)); ?>" method="POST">
	    <?php echo e(csrf_field()); ?>

   		<div class="form-group<?php echo e($errors->has('maintenance') ? ' has-error' : ''); ?>">
	    <label for="maintenance" class="col-md-4 control-label">Maintenance</label>
	    <div class="col-md-6">
	        <textarea id="maintenance" type="text" class="form-control col-md-6" name="maintenance" row="6"><?php echo e($main->request); ?></textarea>

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
	        <textarea id="address" type="text" class="form-control col-md-6" name="address" row="6"><?php echo e($main->address); ?></textarea>

	        <?php if($errors->has('address')): ?>
	            <span class="help-block">
	                <strong><?php echo e($errors->first('address')); ?></strong>
	            </span>
	        <?php endif; ?>
	    </div>
	    </div>
	    
	    <?php if($main->category=='Repair design and programming errors'): ?>
	    <select name="category" class="form-control">
	      <option value ="Repair design and programming errors" selected="selected">Repair design and programming errors</option>
	      <option value ="Modify system to environmental changes">Modify system to environmental changes</option>
	      <option value ="Add new features or improve system performance">Add new features or improve system performance</option>
	      <option value ="Safeguard system for future problems">Safeguard system for future problems</option>
	      <option value ="Others">Others</option>
	    </select>
	    <?php elseif($main->category=='Modify system to environmental changes'): ?>
	    <select name="category" class="form-control">
	      <option value ="Repair design and programming errors" >Repair design and programming errors</option>
	      <option value ="Modify system to environmental changes" selected="selected">Modify system to environmental changes</option>
	      <option value ="Add new features or improve system performance">Add new features or improve system performance</option>
	      <option value ="Safeguard system for future problems">Safeguard system for future problems</option>
	      <option value ="Others">Others</option>
	    </select>
	    <?php elseif($main->category=='Add new features or improve system performance'): ?>
	    <select name="category" class="form-control">
	      <option value ="Repair design and programming errors" >Repair design and programming errors</option>
	      <option value ="Modify system to environmental changes" >Modify system to environmental changes</option>
	      <option value ="Add new features or improve system performance" selected="selected">Add new features or improve system performance</option>
	      <option value ="Safeguard system for future problems">Safeguard system for future problems</option>
	      <option value ="Others">Others</option>
	    </select>
	    <?php elseif($main->category=='Safeguard system for future problems'): ?>
	    <select name="category" class="form-control">
	      <option value ="Repair design and programming errors" >Repair design and programming errors</option>
	      <option value ="Modify system to environmental changes" >Modify system to environmental changes</option>
	      <option value ="Add new features or improve system performance" >Add new features or improve system performance</option>
	      <option value ="Safeguard system for future problems" selected="selected">Safeguard system for future problems</option>
	      <option value ="Others">Others</option>
	    </select>
	    <?php else: ?>
	    <select name="category" class="form-control">
	      <option value ="Repair design and programming errors" >Repair design and programming errors</option>
	      <option value ="Modify system to environmental changes" >Modify system to environmental changes</option>
	      <option value ="Add new features or improve system performance" >Add new features or improve system performance</option>
	      <option value ="Safeguard system for future problems" >Safeguard system for future problems</option>
	      <option value ="Others" selected="selected">Others</option>
	    </select>
	    <?php endif; ?>
	    <input type="submit" value="Save">
	    </form>
   </div>
</div>
</section>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>