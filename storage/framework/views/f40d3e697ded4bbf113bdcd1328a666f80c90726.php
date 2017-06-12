<?php $__env->startSection('content'); ?>
<br>
<div class="content-wrapper">
 <section class="content-header">
 <center>
      <h1>
       <b> My Orders</b>
       <?php if(Session::has('flash_message')): ?>
              <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('flash_message'); ?> </em></div>
            <?php endif; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(('/')); ?>">Home</a></li>
        <li><a href="<?php echo e(('/edit')); ?>">Profile</a></li>
       <li class="active">Orders</li>
        <!--<li class="active">Blank page</li>-->
      </ol>
      </center>
    </section>
    <div >
      <table style="width: 900px; margin: auto;" class="table table-bordered table-striped">
             
                <!-- Your heading -->
                     <tr>
                        <th><center>Order No.</center></th>
                        <th><center>Ordered Item</center></th>
                        <th><center>Date Ordered</center></th>
                        <th><center>Options</center></th>
                     </tr>
            
             
                   <!-- Your data -->
                    <?php foreach($orders as $order): ?>
                      <tr>
                      <td><center><?php echo e($order->ordId); ?></center></td>
                      <td><center><?php echo e($order->ordProd); ?></center></td>
                      <td><center><?= date('F d, Y',strtotime($order->created_at))?></center></td>
                      <td><center><a href="<?php echo e(action('deployController@show', $order->ssrId)); ?>" class="btn btn-primary"> Progress</a> <a href="<?php echo e(action('ssrController@show', $order->ssrId)); ?>" class="btn btn-primary">SSR</a> <a href="<?php echo e(action('billController@index', $order->ordId)); ?>" class="btn btn-primary">Billing</a> <a target="_blank" href="<?php echo e(url('contract/'.$order->ordId.'/?download=pdf')); ?>" class="btn btn-primary">Contract</a> <a href="<?php echo e(url('viewReq', $order->ordId)); ?>" class="btn btn-primary">Maintenance</a> <form class="delete" action="<?php echo e(action('deployController@destroy', $order->ordId)); ?>" onsubmit="return confirm('Are you sure you want to delete?')" >
           <input type="submit" class="btn btn-sm btn-danger btn-flat" value="Delete"></form></center></td>
                      </tr>
                    <?php endforeach; ?>
           
            </table>
    </div>

<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>