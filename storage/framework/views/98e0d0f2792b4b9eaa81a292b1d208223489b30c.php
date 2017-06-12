<?php $__env->startSection('content'); ?>
<br>
  <div class="content-wrapper">
   <section class="content">
     <?php if(Session::has('flash_message')): ?>
     <div class="col-md-12">
              <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> <?php echo session('flash_message'); ?> </em></div>
              </div>
            <?php endif; ?>
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary" style="margin-left: 50px;">
            <div class="box-body box-profile" >
            <center>
              <img class="profile-user-img img-responsive img-circle" style="vertical-align: middle;" src="images/<?php echo e(Auth::user()->imagePath); ?>" alt="User profile picture">
               <center> <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Upload Profile Pic</center>&nbsp </button>



              <h3><?php echo e($user->acctUsername); ?></h3>
              </center>
              <!--<p class="text-muted text-center">Software Engineer</p>-->

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Name</b> <a class="pull-right"><?php echo e($user->acctName); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Contact Number</b> <a class="pull-right"><?php echo e($user->acctContact); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email Address</b> <a class="pull-right"><?php echo e($user->email); ?></a>
                  <br><br>
                </li>
                  <li class="list-group-item">
                  <b>Orders</b> <a class="pull-right" href="<?php echo e(action('deployController@index',  Auth::user()->id)); ?>">View Orders</a>
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
          <b>Edit <?php echo e($user->acctName); ?>'s Profile</b></h1>
          <ol class="breadcrumb">
        <li><a href="<?php echo e(('/')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
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



<?php echo Form::model($user,
  [
  'method' => 'patch',
  'route' => ['userupdate', $user->id],
  'class' => 'form-group',
  ]);; ?>


  <div class="form-group">
     <div class="col-md-12">
      <?php echo Form::label('name', 'Name:'); ?>

     <?php echo Form::text('name', $user->acctName, ['class' => 'form-control']); ?>


   </div>
      </div>


  <div class="form-group">
 <div class="col-md-6">

    <?php echo Form::label('username', 'Username:'); ?>

     <?php echo Form::text('username', $user->acctUsername, ['class' => 'form-control']); ?>

   </div>
  </div>
  <div class="form-group">
<div class="col-md-6">
  <?php echo Form::label('contact', 'Contact No:'); ?>

     <?php echo Form::text('contact', $user->acctContact, ['class' => 'form-control']); ?>

   </div>
  </div>

  <div class="form-group">
  <br><br><br><br><br>
<div class="col-md-6">
  <?php echo Form::label('email', 'E-Mail Address:'); ?>

     <?php echo Form::text('email', $user->email, ['class' => 'form-control']); ?>

   </div>
  </div>

  <div class="form-group">
      <div class="col-sm-3">
<br>
        <?php echo Form::submit('Save', ['class' => 'btn btn-success ']); ?>

        <?php echo Form::close(); ?>

        </div>
    </div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Change Password</center>&nbsp </button>
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
              
      <?php echo Form::open(array('url' => 'addPic', 'files' => 'true')); ?>

                            
           
            <div class="form-group<?php echo e($errors->has('file') ? ' has-error' : ''); ?>">
           <?php echo Form::file('image'); ?>

                <?php if($errors->has('image')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('image')); ?></strong>
                  </span>
                <?php endif; ?>
                <small><i>Allowed image files: .jpeg, .jpg, .png</i></small>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="userid" value="<?php echo e(Auth::user()->acctUsername); ?>">
             <?php echo Form::submit('Submit', ['class' => 'btn btn-success  btn-flat ']); ?>

           <?php echo Form::close(); ?>

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
          <form action="<?php echo e(action('UserController@changePass', Auth::user()->id)); ?>" method="POST">
          <?php echo e(csrf_field()); ?>

          <div class="form-group<?php echo e($errors->has('old') ? ' has-error' : ''); ?>">
          <label>Enter Old Password:</label>
          <input type="password" name="old" class="form-control">
          <?php if($errors->has('old')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('old')); ?></strong>
            </span>
          <?php endif; ?>
          </div>
          <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
          <label>Enter New Password:</label>
          <input type="password" name="password" class="form-control">
          <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
          <?php endif; ?>
          </div>

          <div class="form-group<?php echo e($errors->has('password2') ? ' has-error' : ''); ?>">
          <label>Confirm Password:</label>
          <input type="password" name="password2" class="form-control">
          <?php if($errors->has('password2')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password2')); ?></strong>
            </span>
          <?php endif; ?>
          </div>
          <input type="submit" value="Save" class="form-control">
          </form>              
      
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        
      </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>