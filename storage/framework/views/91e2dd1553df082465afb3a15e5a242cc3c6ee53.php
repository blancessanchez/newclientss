<?php $__env->startSection('content'); ?>
<br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
     <center>
 <h1><b>Billing Information</b></h1>
      

          <ol class="breadcrumb">

              <li><a href="<?php echo e(('/')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
              <li> <a href="<?php echo e(action('deployController@index',  Auth::user()->id  )); ?>">Orders</a></li>
              <li class="active"><span > Billing Information</li>
            <!--<li class="active">Blank page</li>-->
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
        <?php if($b->billCategory=='Maintenance Fee'): ?>
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