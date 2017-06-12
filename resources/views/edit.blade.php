@extends('layouts.nav')

@section('content')
<br>
  <div class="content-wrapper">
   <section class="content">
     @if(Session::has('flash_message'))
     <div class="col-md-12">
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!} </em></div>
        </div>
      @endif
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary" style="margin-left: 50px;">
            <div class="box-body box-profile" >
            <center>
              <img class="profile-user-img img-responsive img-circle" style="vertical-align: middle;" src="public/images/{{Auth::user()->imagePath}}" alt="User profile picture">
               <center> <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Upload Profile Pic</center>&nbsp </button>



              <h3>{{$user->acctUsername}}</h3>
              </center>
              <!--<p class="text-muted text-center">Software Engineer</p>-->

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Name</b> <a class="pull-right">{{$user->acctName}}</a>
                </li>
                <li class="list-group-item">
                  <b>Contact Number</b> <a class="pull-right">{{$user->acctContact}}</a>
                </li>
                <li class="list-group-item">
                  <b>Email Address</b> <a class="pull-right">{{$user->email}}</a>
                  <br><br>
                </li>
                  <li class="list-group-item">
                  <b>Orders</b> <a class="pull-right" href="{{action('deployController@index',  Auth::user()->id)}}">View Orders</a>
                </li>
              </ul>

             <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div >

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
         <section class="content-header">
        <h1>
          <b>Edit {{$user->acctName}}'s Profile</b></h1>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Change Password</button>
          <br>
          <ol class="breadcrumb">
        <li><a href="{{('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Profile</li>
       <!-- <li class="active">Blank page</li>-->
      </ol>
       <!-- <small>Fill out those boxes completely</small>-->
        </h1>

      </section>

     <section class="content">
       <div class="row">
             <!-- left column -->
<div class="box box-primary">
            <div class="box-body box-profile">
             <div class="col-md-9 col-md-offset-1">
               <!-- general form elements -->



{!! Form::model($user,
  [
  'method' => 'patch',
  'route' => ['userupdate', $user->id],
  'class' => 'form-group',
  ]); !!}

  <div class="form-group">
     <div class="col-md-12">
      {!! Form::label('name', 'Name:') !!}
     {!! Form::text('name', $user->acctName, ['class' => 'form-control']) !!}

   </div>
      </div>


  <div class="form-group">
 <div class="col-md-6">

    {!! Form::label('username', 'Username:') !!}
     {!! Form::text('username', $user->acctUsername, ['class' => 'form-control']) !!}
   </div>
  </div>
  <div class="form-group">
<div class="col-md-6">
  {!! Form::label('contact', 'Contact No:') !!}
     {!! Form::text('contact', $user->acctContact, ['class' => 'form-control']) !!}
   </div>
  </div>

  <div class="form-group">
  <br><br><br><br><br>
<div class="col-md-6">

  {!! Form::label('email', 'E-Mail Address:') !!}
     {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
   </div>
  </div>

  <div class="form-group">

      <div class="col-sm-3">
<br>
        {!! Form::submit('Save', ['class' => 'btn btn-success ']) !!}
        {!! Form::close() !!}
            
        </div>
       
    </div>

  </div>


</div>
</div>

</div>
</section>
<div id="myModal" class="modal fade modal-primary" role="dialog">
  <div class="modal-dialog">

  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Profile Picture</h4>
      </div>
      <div class="modal-body">
              
      {!! Form::open(array('url' => 'addPic', 'files' => 'true')) !!}
                            
           
            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
           {!! Form::file('image') !!}
                @if ($errors->has('image'))
                  <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                  </span>
                @endif
                <small><i>Allowed image files: .jpeg, .jpg, .png</i></small>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="userid" value="{{ Auth::user()->acctUsername }}">
             {!! Form::submit('Submit', ['class' => 'btn btn-success  btn-flat ']) !!}
           {!! Form::close() !!}
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</div>


          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
   
</div>
<br>
<div id="myModal2" class="modal fade modal-primary" role="dialog">
  <div class="modal-dialog">

  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Password</h4>
      </div>
      <div class="modal-body">
          <form action="{{action('UserController@changePass', Auth::user()->id)}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
          <label>Enter Old Password:</label>
          <input type="password" name="old" class="form-control">
          @if ($errors->has('old'))
            <span class="help-block">
                <strong>{{ $errors->first('old') }}</strong>
            </span>
          @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label>Enter New Password:</label>
          <input type="password" name="password" class="form-control">
          @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
          </div>

          <div class="form-group{{ $errors->has('password2') ? ' has-error' : '' }}">
          <label>Confirm Password:</label>
          <input type="password" name="password2" class="form-control">
          @if ($errors->has('password2'))
            <span class="help-block">
                <strong>{{ $errors->first('password2') }}</strong>
            </span>
          @endif
          </div>
          <div class="modal-footer">
          <input type="submit" value="Save" class="btn btn-success">
          </form>              
      
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
</div>
@endsection
