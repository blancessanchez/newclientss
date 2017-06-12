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

.centered {
    margin: 0 auto;
    text-align: left;
    width: 800px;
}
</style>
<div class="content-wrapper">

 <section class="content-header">
 <br>
 <center><h1><b>Checkout</b></h1>
      <h3>

          <ol class="breadcrumb">

              <a href="<?php echo e(('/')); ?>">Inquire Product</a>
              <a href="<?php echo e(url('/editssr/'.$idssr->ssrId.'/'.$prodId)); ?>">&#10148; &nbsp System Service Request &nbsp</a>
               <li class="active"> &#10148; <b style="color:#000AB1;"> Downpayment</b> &#10148; Payment Method </li>
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
 Choose a percentage downpayment of your system. </b>  
</div>
    <?php 
        $query = mysqli_query($DB, "SELECT ordId FROM tblorder WHERE ssrId = $idssr->ssrId");
        $row = mysqli_fetch_assoc($query);
        $ordId = $row['ordId'];
    ?>
        <form action="<?php echo e(action('ssrController@bill', $ordId)); ?>" method="GET">
        <?php foreach($downpayments as $down): ?>
            <div class="col-md-3" >
            <center>
                <div class="db-wrapper">
                
                    <div class="db-pricing-eleven db-bk-color-two">
                        <div class="price">
                        
                            <sup>₱</sup><?php echo e($down->downpayment); ?>

                                    <?php if($down->percent==100): ?>
                                    <small><?php echo e($down->percent); ?>% Full Payment</small>
                                    <?php else: ?>
                                    <small><?php echo e($down->percent); ?>% Downpayment</small>
                                    <?php endif; ?>
                        </div>
                        <div class="type">
                        
                            <?php echo e($down->prodName); ?><br>
                            <?php echo e($down->deliverables); ?>

                        </div>
               <br> <input type="radio" name="check_list" value="<?php echo e($down->id); ?>" class="form-control">
                       
                       <br> <input type="submit" value="Save Option" class="btn btn-primary">
                       <br><br>
                        
                    </div>
                
                </div>
                
                <input type="hidden" name="userid" value="<?php echo e($down->prodId); ?>">
            </center>
            </div>
        <?php endforeach; ?>
        </form>
                
                
             
            
          
        </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>