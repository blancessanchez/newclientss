<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Symbol Solutions | Registration</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="{{url('/login')}}"><b>Symbol</b>Solutions</a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">Register a new account</p>

                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                      {{ csrf_field() }}
                      <input type="hidden" name="acctType" value="MEMBER">
                      <input type="hidden" name="actType" value="Registered as a new Member">
                      <div class="form-group{{ $errors->has('acctName') ? ' has-error' : '' }}">

                          <div class="col-md-12">
                              <input placeholder="Name" id="acctName" type="text" class="form-control" name="acctName" value="{{ old('acctName') }}">

                              @if ($errors->has('acctName'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('acctName') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('acctUsername') ? ' has-error' : '' }}">

                          <div class="col-md-12">
                              <input placeholder="Username" id="acctUsername" type="text" class="form-control" name="acctUsername" value="{{ old('acctUsername') }}">

                              @if ($errors->has('acctUsername'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('acctUsername') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                          <div class="col-md-12">
                              <input placeholder="E-mail Address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('acctContact') ? ' has-error' : '' }}">

                          <div class="col-md-12">
                              <input placeholder="Contact Number" id="acctContact" type="text" class="form-control" name="acctContact" value="{{ old('acctContact') }}">

                              @if ($errors->has('acctContact'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('acctContact') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                          <div class="col-md-12">
                              <input placeholder="Password" id="password" type="password" class="form-control" name="password">

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">


                          <div class="col-md-12">
                              <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation">

                              @if ($errors->has('password_confirmation'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6">
                              <button type="submit" class="btn btn-primary btn-block btn-flat">
                                  <i class="fa  fa-user-plus  "></i> Register
                              </button>
                          </div>
                      </div>
                  </form>

                  <div class="social-auth-links text-center">
      <p>- OR -</p>
      <!--<a href="{{url('/500')}}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="{{url('/500')}}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>-->
    </div>

    <a href="{{url('/login')}}" class="text-center">I already have an account</a>
  </div>
      </div>

      <!-- jQuery 2.2.0 -->
<script src="{{asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
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
