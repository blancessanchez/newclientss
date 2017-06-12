

<?php $__env->startSection('content'); ?>
<br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
     <center>
 <h1><b>Billing Information</b></h1>
      

          <ol class="breadcrumb">

             <li><a href="<?php echo e(('/')); ?>"> Home</a></li>
             <li> <a href="<?php echo e(('/edit')); ?>">Profile</a></li>
             <li><a href="<?php echo e(action('deployController@index',  Auth::user()->id  )); ?>">Orders</a></li>
             <li class="active">Billing Information</li>
          </ol>

      

      </center>
    </section>
<section class="content">
<div  class="box">
           <div class="box-header">

           </div>
           <!-- /.box-header -->
           <div class="box-body" style="margin-left: 100px;">

    <?php foreach($bill as $b): ?>
        <?php if($b->paymentStatus=='Not Paid'): ?>
        <div class="container">
          <section class="row mb30">
            <div class="col-md-12">
              <div class="row">
              <div class="col-md-2">
              </div>
                <div class="col-md-8">
                  <div class="boxFocus color1">     
                    <label><?php echo e($b->billCategory); ?></label>
                    <p><b>Name:</b> <?php echo e($b->user); ?></p>
                    <p><b>Item Ordered: </b><?php echo e($b->item); ?></p>
                    <p><b>Remaining Balance:</b> <?php echo e($b->billAmount); ?></p>
                    <p><b>Date Ordered:</b> <?php echo e($b->billDate); ?></p>
                    <p><b>Payment Status:</b> <?php echo e($b->paymentStatus); ?></p></br><br>
                    <div class="row">
                    <div class="col-md-6">
                    <a target="_blank" href="<?php echo e(url('pdfview/'.$b->billId.'/?download=pdf')); ?>" class="btn btn-primary btn-flat">Download PDF</a>

                    </div>
                    <div class="col-md-6">
                    <?php echo Form::open(array('route' => 'getCheckout')); ?>

                    <?php echo Form::hidden('type','advance'); ?>

                    <?php echo Form::hidden('pay',$b->billAmount); ?>

                    <button class="btn btn-primary btn-flat pull-right">Pay via PayPal</button>
                  <?php echo Form::close(); ?>  
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <?php endif; ?>
         <?php endforeach; ?>
              
                
              
         
        <?php foreach($bill as $b): ?>
        <?php if($b->billCategory=='Final Payment'): ?>
        	 <?php if($b->paymentStatus=='Paid'): ?>
              <center><label><b>Final Payment has been paid.</b></label></center><br>
              <center><a href="<?php echo e(action('deployController@reqMain', $b->ssrId)); ?>" class="btn btn-primary">Request System Maintenance</a></center>
              <br>
           <?php endif; ?>
               <center><label><b>Paid Bills</b></label></center>
              <table style="width: 900px; margin: auto;" class="table table-bordered table-striped">
             
                <!-- Your heading -->
                     <tr>
                        <th><center>Bill no.</center></th>
                        <th><center>Bill Amount</center></th>
                        <th><center>Billing Date</center></th>
                        <th><center>Date Paid</center></th>
                     </tr>
             <tbody>
        <?php else: ?> 
                <?php if($b->paymentStatus=='Paid'): ?>
                <tr>
                <td><?php echo e($b->billId); ?></td>
                <td><?php echo e($b->billAmount); ?></td>
                <td><?= date('F d, Y',strtotime($b->billDate))?> <?= date('h:i:s a',strtotime($b->billDate))?></td>
                <td><?= date('F d, Y',strtotime($b->paidOn))?> <?= date('h:i:s a',strtotime($b->paidOn))?></td>
                </tr>
                <?php endif; ?>
        <?php endif; ?>    
        <?php endforeach; ?>
     </tbody>
           
            </table>

     </section>
     <!-- /.content -->
   </div>
   <!-- /.container -->
 </div>
 <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>