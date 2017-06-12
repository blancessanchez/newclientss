<?php $__env->startSection('content'); ?>
    <?php include('messaging/connection.php');?>
<div class="content-wrapper">
  <div class="container">
    <html>
      <body><br><br><br>
        <center>
                
                
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="color:black;"><b>Screenshots for <?php echo e($product->prodDesc); ?></b></h1>
      <hr>
    </section>
 <section class="tabsDetails"  data-nekoanim="fadeInUp" data-nekodelay="100" >
        <div class="container">
        <div class="col-md-12">
          <?php
          	$query = mysqli_query($DB, "SELECT image FROM tblproducts2 WHERE prodId = $product->prodId");
          	$numrows=mysqli_num_rows($query);
                  if($numrows !=0 ) 
                  {
          
                  	while($row = mysqli_fetch_assoc($query))
                  	{
          ?>     
          		

                      <img class="img-responsive"  class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" height=200 width=200 />
                    	
          <?php
                  	}
                  }
          ?>
          </div>
          </div>
 </section>
<?php $__env->stopSection(); ?>
<script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1493535152956");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>