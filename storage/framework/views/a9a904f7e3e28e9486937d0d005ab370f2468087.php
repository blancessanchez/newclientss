<?php $__env->startSection('content'); ?> 
<style type="text/css">
<?php include('messaging/connection.php');?>
.db-bk-color-one {
    background-color: #f55039;
}
.db-bk-color-two {
    background-color: #46A6F7;
}
.db-bk-color-three {
    background-color: #47887E;
}
.db-bk-color-six {
    background-color: #F59B24;
}
.db-padding-btm {
    padding-bottom: 50px;
}
.db-button-color-square {
    color: #fff;
    background-color: rgba(0, 0, 0, 0.50);
    border: none;
    border-radius: 0px;
}
.db-button-color-square:hover {
    color: #fff;
    border: none;
}
.db-pricing-eleven {
    margin-bottom: 30px;
    margin-top: 50px;
    text-align: center;
    box-shadow: 0 0 5px rgba(0, 0, 0, .5);
    color: #fff;
    line-height: 30px;
}
.db-pricing-eleven ul {
    list-style: none;
    margin: 0;
    text-align: center;
    padding-left: 0px;
}
.db-pricing-eleven ul li {
    padding-top: 10px;
    padding-bottom: 10px;
    cursor: pointer;
}
.db-pricing-eleven ul li i {
    margin-right: 5px;
}
.db-pricing-eleven .price {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 40px 20px 20px 20px;
    font-size: 60px;
    font-weight: 900;
    color: #FFFFFF;
}
.db-pricing-eleven .price small {
    color: #B8B8B8;
    display: block;
    font-size: 12px;
    margin-top: 22px;
}
.db-pricing-eleven .type {
    background-color: #3c67a3;
    padding: 40px 10px;
    font-weight: 900;
    text-transform: uppercase;
    font-size: 30px;
}
.db-pricing-eleven .pricing-footer {
    padding: 10px;
}
.db-pricing-eleven.popular {
    margin-top: 10px;
}
.db-pricing-eleven.popular .price {
    padding-top: 50px;
}

.centere{
    margin: 0 auto;
    width: 1000px;
    padding:0;
}
</style>
<div class="content-wrapper">

 <section class="content-header">
 <br>
 <center><h1><b>Payment Method</b></h1>
      <h3>

          <ol class="breadcrumb">

              <a href="<?php echo e(('/')); ?>">Inquire Product</a>
              <a href="<?php echo e(('/')); ?>">&#10148; System Service Request &nbsp</a>
             <a href="<?php echo e(('/')); ?>">&#10148; Downpayment</a>
               <li class="active"> &#10148; <b style="color:#000AB1;">Payment Method </b> </li>
            <!--<li class="active">Blank page</li>-->
          </ol>

      </h3>
</center>
      
    </section>
<div class="container">
   <div class="row text-center">
        
    </div>
 <div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Choose a payment method. </b>  
</div>
   
      
        <div class="centered">
            <div class="col-md-6" >
            
                <div class="db-wrapper">
                
                    <?php echo Form::open(array('route' => 'getCheckout')); ?>

                        <?php echo Form::hidden('type','advance'); ?>

                        <?php echo Form::hidden('pay', $newBill->billAmount); ?>

                    <div class="db-pricing-eleven db-bk-color-two">
                        <div class="price">
                            <sup>P</sup><?php echo e($newBill->billAmount); ?>

                            
                        </div>
                        <div class="type">
                            <?php echo e($newBill->item); ?>

                        </div>
                        <?php
                        $name = $newBill->item;
                        $query = mysqli_query($DB, "SELECT prodId FROM tblproducts WHERE prodDesc = '$name'");
                         $row = mysqli_fetch_assoc($query);
                         $prodId = $row['prodId'];
                        ?>
                        <div class="pricing-footer">
                            <button class="btn db-button-color-square btn-lg">Pay via PayPal</button>
                            <a target="_blank" href="<?php echo e(url('pdfview/'.$newBill->billId.'/?download=pdf')); ?>" class="btn db-button-color-square btn-lg" >Download PDF</a>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
                <input type="hidden" name="userid" value="<?php echo e($prodId); ?>">
            
            </div>

       
                
                
             
            </div>
          
        </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>