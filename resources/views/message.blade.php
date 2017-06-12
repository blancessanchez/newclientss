@extends('layouts.nav')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Messages
        <small>Under Development</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Messages</a></li>
        <!--<li class="active">Blank page</li>-->
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
    <?php include('messaging/connection.php');?>
 
<form style="margin-left: 25%;
margin-right:25%;
width: 50%;">
  Message<input type="text" name="message" id="message">
  <button  onclick="adddata()">Send</button>
</form>


<div id="out" style="height:50%; overflow-y: auto;">

<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    function getdata(){
      $.get('messaging/get.php',function(data){
        $('#out').html(data);
      });
    }
    setInterval(function(){getdata()},100);
  });

  function adddata(){
    $.post('messaging/add.php',{
      message:$('#message').val()
    },function(data){
    
    });
  }
</script>

</div>

      <!-- Default box --
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>

@endsection
