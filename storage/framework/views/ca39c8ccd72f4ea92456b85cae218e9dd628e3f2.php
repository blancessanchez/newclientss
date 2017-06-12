<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <div class="container">
    <html>
      <body><br><br><br>
        <center>
           <?php if(Auth::guest()): ?>
                  
                  
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>
 <section class="tabsDetails"  data-nekoanim="fadeInUp" data-nekodelay="100" >
        <div class="container">
          
          <!-- <div class="row">
            <div class="span12 text-center mb40">
              <h1>Products and Services Information</h1>
            </div>
          </div> -->


          <!-- tabs -->
          <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-3">
              <ul class="nav nav-pills nav-stacked">
                <li class="active">
                  <a href="#responsive" data-toggle="tab"><i class="icon-star"></i>About</a>
                </li>
                <li>
                  <a href="<?php echo e(action('ssrController@index', $product->prodId)); ?>" ><i class="icon-star"></i>Inquire Now</a>
                </li>
                <li>
                  <a href="<?php echo e(url('/')); ?>" ><i class="icon-star"></i>Back</a>
                </li>
              </ul>
            </div>
            <!-- Navigation Buttons -->

            <!-- Content -->
            <div class="col-md-9">
              <div class="tab-content">

                <div class="tab-pane fade in active" id="responsive">
                  <div class="row">
                    <div class="col-md-6">

                      <img class="img-responsive"  class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode($product->image); ?>" />
                    </div>

                    <div class="col-md-6">
                      <h2><b><?php echo e($product->prodDesc); ?></b></h2><br>
                      <p><?php echo e($product->prodInfo); ?></p>
                      <a target="_blank" href="http://www.<?php echo e($product->demoLink); ?>" class="moreLink">&rarr; Demo</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        <!-- tabs -->
      </section>
     <!-- /.content -->
   </div>
   <!-- /.container -->
 </div>

            <?php else: ?>

        <section class="tabsDetails"  data-nekoanim="fadeInUp" data-nekodelay="100" >
        <div class="container">
           <center><b><h1>Product/Service Information</b></h1>
      <h3>

          <ol class="breadcrumb">

              

              <li class="active"> <b style="color:#000AB1;">Inquire Product</b> &#10148; System Service Request &#10148; Downpayment &#10148; Payment Method</li>

              
            
          </ol>

      </h3>
</center>
          <div class="row">
            <div class="span12 text-center mb40">
             
            </div>
          </div>

<hr>
          <!-- tabs -->
          <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-3">
              <ul class="nav nav-pills nav-stacked">
                <li class="active">
                  <a href="#responsive" data-toggle="tab" style="font-size:19px;"><!-- <i class="icon-star"></i> -->About</a>
                </li>
                <li>
                  <a href="<?php echo e(action('ssrController@index', $product->prodId)); ?>" style="font-size:19px;"><!-- <i class="icon-star"></i> -->Inquire Now</a>
                </li>
                <li>
                  <a href="<?php echo e(url('/')); ?>" style="font-size:19px;"><!-- <i class="icon-star"></i> -->Back</a>
                </li>
              </ul>
            </div>
            <!-- Navigation Buttons -->

            <!-- Content -->
            <div class="col-md-9">
              <div class="tab-content">

                <div class="tab-pane fade in active" id="responsive">
                  <div class="row">
                    <div class="col-md-6">

                      <img class="img-responsive"  class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode($product->image); ?>" />
                    </div>

                    <div class="col-md-6">
                      <h2 style="font-size:25px;"><b><?php echo e($product->prodDesc); ?></b></h2><br>
                      <p style="font-size:19px;"><?php echo e($product->prodInfo); ?></p>
                      <a href="<?php echo e(url('/500')); ?>" class="moreLink" style="font-size:19px;">&rarr; Demo</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        <!-- tabs -->
      </section>
                  
            <?php endif; ?>

              </body>
  </html>
  <!-- begin htmlcommentbox.com -->
  <br>
<?php if(Auth::guest()): ?>
<div class="col-md-12"><a href="<?php echo e(url('login')); ?>" class="btn btn-flat btn-primary">Login to see comments</a></div>
<br>
<?php else: ?>
<div class="col-md-12">
  <div id="HCB_comment_box">
    HTML Comment Box is loading comments...
  </div>
   <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0"/>
</div>
<!-- end www.htmlcommentbox.com -->

<!-- end htmlcommentbox.com -->
<?php endif; ?>
     <!-- /.content -->
   </div>
   <!-- /.container -->
 </div><!--<ul class="nav navbar-nav pull-right">
               <li class="primary">
               <?php if(Auth::guest()): ?>
                   <br><a href="<?php echo e(url('/login')); ?>" class="firstLevel hasSubMenu">LOGIN</a></br>
                   </li>
                   <li class="sep"></li>
                   <li class="primary">
                     <br><a href="<?php echo e(url('/register')); ?>">REGISTER</a></br>
                   </li>
               <?php else: ?>
                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           <br><?php echo e(Auth::user()->acctUsername); ?> <span class="caret"></span></br>
                       </a>

                       <ul class="dropdown-menu" role="menu">
                           <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>LOGOUT</a></li>
                           <li><a href="<?php echo e(url('/edit')); ?>"></i>EDIT PROFILE</a></li>
                       </ul>
                   </li>
               <?php endif; ?>-->
<?php $__env->stopSection(); ?>
<script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1493535152956");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>