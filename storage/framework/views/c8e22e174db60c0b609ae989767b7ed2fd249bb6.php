
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo e(url('/')); ?>" class="navbar-brand"><b>Symbol</b>Solutions</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
              <?php if(Auth::guest()): ?>
              <li class="primary">
                    <a href="<?php echo e(url('/login')); ?>" class="firstLevel hasSubMenu">LOGIN</a>
              </li>
                    <li class="primary">
                      <a href="<?php echo e(url('/register')); ?>">REGISTER</a>
                    </li>
                <?php else: ?>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image">
                          <span class="hidden-xs"><?php echo e(Auth::user()->acctUsername); ?> </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="user-header">
                        <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">

                        <p>
                          <?php echo e(Auth::user()->acctName); ?>

                          <!--<small>Member since Nov. 2012</small>-->
                        </p>
                        <li class="user-body">
                          <div class="row">
                            <div class="col-xs-4 text-center">
                              <a href="<?php echo e(url('/home')); ?>"class="btn btn-default btn-flat">Home</a>
                            </div>

                            <div class="col-xs-4 text-center">
                              <a href="<?php echo e(url('/edit')); ?>" class="btn btn-default btn-flat"> Profile</a>
                            </div>

                            <div class="col-xs-4 text-center">
                              <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat">Log out</a>
                            </div>
                          </div>
                          <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <!--<li class="user-footer">

                        </li>-->
                      </li>
                    </ul>
              </li>

                  <!-- The user image in the menu -->

                  <!-- Menu Body -->

                <?php endif; ?>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
