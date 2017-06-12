<?php $__env->startSection('content'); ?>
<link href="/vendor/swatkins/gantt/css/gantt.css" rel="stylesheet" type="text/css">
<div class="content-wrapper">
 <section class="content-header">
 <center>
 <br>
      <h1>
        <b>Current Progress</b>
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo e(('/')); ?>"> Home</a></li>
       <li> <a href="<?php echo e(('/edit')); ?>">Profile</a></li>
       <li><a href="<?php echo e(action('deployController@index',  Auth::user()->id  )); ?>">Orders</a></li>
       <li class="active">View Progress</li>
        <!--<li class="active">Blank page</li>-->
      </ol>
      </center>
    </section>
 
<section class="content">
      <div class="box">
           <div class="box-header">

           </div>
           <!-- /.box-header -->
           <div class="box-body">

            <table style="width:800px; margin: auto;" id="example1"  class="table table-bordered table-striped">
               <thead>
                <center><label>Project is currently <b> <?php echo e($status); ?></b></label></center>
                     <tr>
                        <th><center>Status</center></th>
                        <th><center>Updated At</center></th>
                     <tr>
               </thead>
               <tbody>
                   <!-- Your data -->
                    <?php foreach($stats as $stat): ?>
                      <tr>
                      <td><center><?php echo e($stat->status); ?></center></td>
                      <td><center><?php echo e($stat->statDate); ?></center></td>                  
                      </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
             
            <div class="col-md-12">  
            <center><label>Scheduling</label></center>                   
              <?php echo $gantt; ?>

            </div>
       </div>

      
     </section>
     <!-- /.content -->
   </div>
   <!-- /.container -->
 </div>
 <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>