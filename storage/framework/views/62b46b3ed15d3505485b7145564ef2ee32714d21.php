<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Symbol Solutions | Endless Opportunities. Clever Imaginations</title>
  <meta name="description" content="Symbol Solutions Website">
  <meta name="author" content="BS">
<!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
  <!-- Bootstrap  -->
  <link type="text/css" rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- web font  -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
  <!-- Pop up-->
  <link rel="stylesheet" type="text/css" href="../../js-plugin/magnific-popup/magnific-popup.css" />
  <!-- Revolution Slider -->
  <link rel="stylesheet" type="text/css" href="../../js-plugin/revolution-slider/rs-plugin/css/navstylechange.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../../js-plugin/revolution-slider/rs-plugin/css/settings-hideo.css" media="screen" />
  <!-- Owl carousel-->
  <link rel="stylesheet" href="../../js-plugin/owl.carousel/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="../../js-plugin/owl.carousel/owl-carousel/owl.theme.css">
  <!-- nekoAnim-->
  <link rel="stylesheet" type="text/css" href="../../js-plugin/appear/nekoAnim.css" />
  <!-- isotope -->
  <link type="text/css" rel="stylesheet" href="../../js-plugin/isotope/css/style.css">
  <!-- icon fonts -->
  <link type="text/css" rel="stylesheet" href="../../font-icons/custom-icons/css/custom-icons.css">
  <link type="text/css" rel="stylesheet" href="../../font-icons/custom-icons/css/custom-icons-ie7.css">


  <!-- Custom css -->
  <link type="text/css" rel="stylesheet" href="../../css/layout.css">
  <link type="text/css" id="colors" rel="stylesheet" href="../../css/colors.css">
  <link type="text/css" rel="stylesheet" href="../../css/custom.css">
  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <script src="../../js/modernizr-2.6.1.min.js"></script>
<!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="../../images/symbolicon.ico">
</head>
<body class="activateAppearAnimation">
<!-- Primary Page Layout
  ================================================== -->
  <!-- globalWrapper -->
  <div id="globalWrapper">
    <header class="navbar-fixed-top">
      <!-- header -->
      <div id="mainHeader" role="banner">
        <div class="container">
          <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <!-- responsive navigation -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- Logo -->
              <a class="navbar-brand" href="index.html"><img src="../../images/logo.png" alt="Symbol Solutions, Inc."/></a>
            </div>
            <div class="collapse navbar-collapse" id="mainMenu">
              <!-- Main navigation -->
              <ul class="nav navbar-nav pull-right">

                <li class="primary">
                  <a href="<?php echo e(url('/')); ?>" class="firstLevel active hasSubMenu" >HOME</a>
                </li>

                <!-- <li class="sep"></li>
                <li class="primary">
                  <a href="blog.symbol-solutions.com" class="firstLevel hasSubMenu" >BLOG</a>
                </li> -->

                <li class="sep"></li>
                <?php if(Auth::guest()): ?>
                <?php else: ?>
                 <li class="primary">
                  <a href="<?php echo e(url('home')); ?>" class="firstLevel active hasSubMenu" >MESSAGING</a>
                </li>
                <?php endif; ?>
                <li class="sep"></li>

                <li class="primary">
                  <a href="<?php echo e(url('products')); ?>" class="firstLevel hasSubMenu" >PRODUCTS</a>
                </li>

                <li class="sep"></li>

                <li class="primary nekoMegaMenuTrigger">
                  <a href="<?php echo e(url('services')); ?>" class="firstLevel hasSubMenu">SERVICES</a>
                </li>

                <li class="sep"></li>

                <li class="primary">
                  <a href="<?php echo e(url('about')); ?>" class="firstLevel hasSubMenu">ABOUT</a>
                </li>

                <li class="sep"></li>
                            
                <li class="primary">
                  <a href="<?php echo e(url('contactUs')); ?>" class="firstLevel hasSubMenu">CONTACT</a>
                </li>

                <?php if(Auth::guest()): ?>
                
                <li class="sep"></li>

                <li id="lastMenu" class="last" ><a href="<?php echo e(url('login')); ?>" class="firstLevel last">LOGIN</a></li>

                <?php else: ?>
                <!-- <li class="sep"></li>

                <li class="primary">
                  <a href="<?php echo e(url('home')); ?>" class="firstLevel hasSubMenu">MESSAGES</a>
                </li> -->

                <li class="sep"></li>

                <li class="primary">
                  <a href="<?php echo e(url('edit')); ?>" class="firstLevel hasSubMenu"><?php echo e(Auth::user()->acctName); ?></a>
                </li>

                  <li class="sep"></li>
                <li id="lastMenu" class="last"><a href="<?php echo e(url('logout')); ?>" class="firstLevel last">LOGOUT</a></li>
                <?php endif; ?>
              </ul>

              <!-- End main navigation -->
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- header -->

    <?php echo $__env->yieldContent('content'); ?>


  <!-- footer -->
  <footer id="footerWrapper">
    <section id="mainFooter">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="footerWidget">
              <img src="../../images/logo.png" alt="Symbol Solutions Logo" id="footerLogo">
              <p><a href="#" title="">Symbol Solutions, Inc.</a> is built with a geeky brain on its left and a colorful mind on its right. We are collected by dreams and will rise by our burning passion to become the best provider of Management Information Systems. Excellence in management, proficiency in software development, clever design imaginations, and endless opportunities will move us forward, just forward!</p>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="footerWidget">

              <h3>Contact Us</h3>
              <address>
                <p>
                  <i class="icon-location"></i>&nbsp;123 Holy Family Avenue, Holy Family Village,
                  Bagumbayan, Taguig City <br>
                  <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:hello@symbol-solutions.com">hello@symbol-solutions.com</a>
                </p>
              </address>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="footerWidget">
                <h3>Follow us, we are social</h3>
               <ul class="socialNetwork">
                  <li><a href="https://www.facebook.com/symbolsolutions" class="tips" title="Like us on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/symbol-solutions" class="tips" title=""><i class=" icon-linkedin-1 iconRounded"></i></a></li>
          <li><a href="https://twitter.com/SymbolSolutions" class="tips" title=""><i class=" icon-twitter-bird  iconRounded"></i></a></li>
          <li><a href="https://plus.google.com/114844923064600912492" class="tips" title=""><i class=" icon-gplus-1 iconRounded"></i></a></li>
          <li><a href="https://www.instagram.com/SymbolSolutions/" class="tips" title=""><i class=" icon-instagramm iconRounded"></i></a></li>
          <li><a href="https://www.pinterest.com/symbolsolutions/" class="tips" title=""><i class=" icon-pinterest-circled iconRounded"></i></a></li>
                  
                  
                  

                </ul>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section  id="footerRights">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Copyright &copy 2017 <a href="https://www.facebook.com/TheSynthesisPUPT/" target="blank">The Synthesis</a> / All rights reserved.</p>
            </div>

          </div>
        </div>
      </section>
  <!-- End footer -->
</div>
<!-- global wrapper -->
<!-- End Document
  ================================================== -->
  <script type="text/javascript" src="../../js-plugin/respond/respond.min.js"></script>
  <script type="text/javascript" src="../../js-plugin/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="../../js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>

  <!-- third party plugins  -->
  <script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="../../js-plugin/easing/jquery.easing.1.3.js"></script>

  <!-- carousel -->
  <script type="text/javascript" src="../../js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js"></script>

  <!-- pop up -->
  <script type="text/javascript" src="../../../js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Revolution slider -->
  <script type="text/javascript" src="../../js-plugin/revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
  <script type="text/javascript" src="../../js-plugin/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

  <!-- isotope -->
  <script type="text/javascript" src="../../js-plugin/isotope/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="../../js-plugin/isotope/jquery.isotope.sloppy-masonry.min.js"></script>

  <!-- form -->
  <script type="text/javascript" src="../../js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
  <script type="text/javascript" src="../../js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>

  <!-- Paralax -->
  <script type="text/javascript" src="../../js-plugin/parallax/js/jquery.stellar.min.js"></script>

  <!-- appear -->
  <script type="text/javascript" src="../../js-plugin/appear/jquery.appear.js"></script>

  <!-- Custom  -->
  <script type="text/javascript" src="../../js/custom.js"></script>
</body>
</html>
