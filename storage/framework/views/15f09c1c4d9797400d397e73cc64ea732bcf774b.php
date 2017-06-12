<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Symbol Solutions | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/square/blue.css')); ?>">
  <link rel="shortcut icon" href="<?php echo e(asset('symbolicon.ico')); ?>">

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <script>
      $(document).ready(function(){
        $('#btnClear').click(function(){        
      
            /*Clear all input type="text" box*/
            $('#login input[type="text"]').val('');
             $('#login input[type="password"]').val('');
                 
        });
      });
    </script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">

<div class="login-box">

  <div class="login-logo">
    <a href="<?php echo e(url('/home')); ?>"><b>Symbol</b>Solutions</a>
  </div>
  <?php if(Session::has('flash_message')): ?>
              <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> <?php echo session('flash_message'); ?> </em></div>
            <?php endif; ?>  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login to start browsing</p>

    <form id="login" action="<?php echo e(action('Auth\AuthController@authenticate')); ?>" method="POST">
      <?php echo e(csrf_field()); ?>

      <input type="hidden" name="actType" value="Logged In">
      <div class="form-group<?php echo e($errors->has('acctUsername') ? ' has-error' : ''); ?>">
              <input placeholder="Username" id="acctUsername" type="text" class="form-control" name="acctUsername" value="<?php echo e(old('acctUsername')); ?>">
              <?php if($errors->has('acctUsername')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('acctUsername')); ?></strong>
                  </span>
              <?php endif; ?>
      </div>
      <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">


              <input placeholder="Password" id="password" type="password" class="form-control" name="password">

              <?php if($errors->has('password')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('password')); ?></strong>
                  </span>
              <?php endif; ?>

      </div>
      <div class="row">
        <!-- /.col -->
        <div class="row">
        <div class="col-md-12">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
          
        </div>
         <div class="col-xs-8">
        <input type="button" id="btnClear" value="Reset" class="btn btn-flat btn-default pull-right" />
        </div>
        </div>
        </div>
    </form>

    <!--<div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="<?php echo e(url('/500')); ?>" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="<?php echo e(url('/500')); ?>" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>-->
    <!-- /.social-auth-links -->
    <br>
    <div class="col-md-12">

    <a href="<?php echo e(url('/password/reset')); ?>">I forgot my password</a><br>
    <a href="<?php echo e(url('/register')); ?>" class="text-center">Register a new account</a>
</div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo e(asset('plugins/jQuery/jQuery-2.2.0.min.js')); ?>"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
