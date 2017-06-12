<style>
#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px
}
#login-dp .bottom{
    background-color:rgba(255,255,255,255);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}

</style>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Symbol Solutions | Endless Opportunities from Clever Imaginations</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="shortcut icon" href="images/symbolicon.ico">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER V2 ==========-->
        <header class="navbar-fixed-top s-header-v2 js__header-sticky" style= "background: rgb(31,31,31)">
            <!-- Navbar -->
            <nav class="s-header-v2__navbar">
                <div class="container g-display-table--lg">
                    <!-- Navbar Row -->
                    <div class="s-header-v2__navbar-row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="s-header-v2__navbar-col">
                            <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                            <!-- Logo -->
                            <div class="s-header-v2__logo">
                                <a href="index.html" class="s-header-v2__logo-link">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="img/logo-white.png" alt="Dublin Logo">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="img/logo.png" alt="Dublin Logo">
                                </a>

                            </div>
                            <!-- End Logo -->
                        </div>
                        
                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav"> 
                                <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                    
                                      <a href="#" class="dropdown-toggle s-header-v2__nav-link s-header-v2__nav-link--dark" data-toggle="dropdown"><b>Login Dummy</b> <span class= "g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul id="login-dp" class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li>
                                                 <div class="row" >
                                                        <div class="col-md-12">
                                                            Login via
                                                            <div class="social-buttons">
                                                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                                <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                                            </div>
                                                            or
                                                             <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                                    <div class="form-group">
                                                                         <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                                         <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                         <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                                         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                                         <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                         <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                         <label>
                                                                         <input type="checkbox">Keep me logged-in
                                                                         </label>
                                                                    </div>
                                                             </form>
                                                        </div>
                                                        <div class="bottom text-center">
                                                            New member? <a href="#"><b>Register</b></a>
                                                        </div>
                                                 </div>
                                            </li>
                                        </ul>
                                  
                                    </li>
                                    <li class="s-header-v2__nav-item"><a href="<?php echo e(url('/')); ?>" class="s-header-v2__nav-link">Home</a></li>
                                    <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                        <a href="javascript:void(0);" class="dropdown-toggle s-header-v2__nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="<?php echo e(url('logmaster')); ?>" class="s-header-v2__dropdown-menu-link">LogMaster</a></li>
                                            <li><a href="<?php echo e(url('payrollwizard')); ?>" class="s-header-v2__dropdown-menu-link">PayrollWizard</a></li>
                                            <li><a href="<?php echo e(url('salesguru')); ?>" class="s-header-v2__dropdown-menu-link">SalesGuru</a></li>
                                        </ul>
                                    </li>
                                    <li class="s-header-v2__nav-item"><a href="<?php echo e(url('services')); ?>" class="s-header-v2__nav-link">Services</a></li>
                                    <li class="s-header-v2__nav-item"><a href="<?php echo e(url('about')); ?>" class="s-header-v2__nav-link">About</a></li>
                                    <li class="s-header-v2__nav-item"><a href="<?php echo e(url('contactUs')); ?>" class="s-header-v2__nav-link">Contact</a></li>
                                    <?php if(Auth::guest()): ?>
                                    <li class="s-header-v2__nav-item"><a href="<?php echo e(url('login')); ?>" class="s-header-v2__nav-link s-header-v2__nav-link--dark">Login</a></li>

                                    
                                    <?php else: ?>
                                    <li class="s-header-v2__nav-item"><a href="<?php echo e(url('edit')); ?>" class="s-header-v2__nav-link s-header-v2__nav-link--dark"><?php echo e(Auth::user()->acctName); ?></a></li>
                                    <li class="s-header-v2__nav-item"><a href="<?php echo e(url('logout')); ?>" class="s-header-v2__nav-link s-header-v2__nav-link--dark">Logout</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- End Nav Menu -->
                        </div>
                    </div>
                    <!-- End Navbar Row -->
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
        <?php echo $__env->yieldContent('content'); ?>
         <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Home</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Products</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Services</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://www.twitter.com/SymbolSolutions">Twitter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://www.facebook.com/symbolsolutions">Facebook</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.instagram.com/SymbolSolutions/">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.pinterest.com/symbolsolutions/">Pinterest</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.linkedin.com/company/symbol-solutions">Linkedin</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href=" https://plus.google.com/114844923064600912492">Google+</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href=" https://plus.google.com/114844923064600912492">YouTube</a></li>
                                <!-- <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Privacy Policy</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Terms &amp; Conditions</a></li> -->
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">Symbol Solutions</h3>
                            <p class="g-color--white-opacity">Symbol Solutions is built with a geeky brain on its left and a colorful mind on its right.

We are collected by dreams and will rise by our burning passion to become the best provider of Management Information Systems in the world.

Excellence in leadership, proficiency in software development, clever design imaginations, and endless opportunities will move us forward, just forward!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="img/logo.png" alt="Megakit Logo">
                        </a>
                    </div>
                    <div class="col-xs-6 g-text-right--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light">Powered by &nbsp<a href="http://keenthemes.com/preview/Megakit/">The Synthesis </a>2018</p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>