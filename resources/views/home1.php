@extends('layouts.nav')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"><br>
    <center>
      <h1>
        Messages
       
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Messages</a></li>
        <!--<li class="active">Blank page</li>-->
      </ol>
      </center>
    </section>
    <div style="width:320px;margin-left: 5px;  height: 658px; background-color: #f5f8fa; float: left;"><br>
<p align="center" style="font-size: 20px;" >MESSAGING</p>
</div>
     <div style="width:310px; background-color: 
#f5f8fa; border-radius: 5px; padding: 20px 20px 20px 20px; margin-right:  5px;  float: right; height: 658px;">
<img src="../images/logochat.png" height="50px" width="50px" style="border-radius: 20px; vertical-align: middle;" />

<span style="font-size: 25px;">&nbsp Administrator</span>
<br> <br>
<a href="{{url('/about')}}" style="text-decoration: none; font-size: 15px;"><i style="margin-right: 0.5em; color: #000375;" class="icon-info"></i> About the Company </a><br>
<a href="{{url('/about')}}" style="text-decoration: none; font-size: 15px;"><i style="margin-right: 0.5em; color: #000375;" class="icon-lightbulb"></i> Products Offered </a><br>
<a href="{{url('/about')}}" style="text-decoration: none; font-size: 15px;"><i style="margin-right: 0.5em; color: #000375;" class="icon-fire"></i> Services Offered </a>
</div>
<div style="width:700px;margin-left: 330px;  height: 50px; background-color: #0077B5
; "><br>
<p style="color: white; text-align:center; 
  vertical-align: middle; font-size: 20px;  ">ADMINISTRATOR</p>
</div>
<div style="width:700px;margin-left: 330px;  overflow-y: scroll; height: 450px; background-color: #ffffff; margin-bottom: 20px;" id="messages">
<div id="out" >

<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    function getdata(){
      $.post('messaging/get.php',{
      userid:$('#userid').val()
    },function(data){
        $('#out').html(data);
      });      
    }
    setInterval(function(){getdata()},100);
  });


</script>

</div>
</div>

<div style="width:700px; background-color: 
#f5f8fa; border-radius: 5px; padding: 20px 20px 20px 20px; margin: auto;">

    <!-- Main content -->
    <section class="content">
    <?php include('messaging/connection.php');?>
<form action="{{action('messageController@index')}}" name="message">
  <input type="text" name="message" id="message" class="form-control" placeholder="Type a message..."><br>
         <input type="hidden" name="userid" id="userid" value="{{Auth::user()->id}}">
  <input type="submit" value="submit" class="btn btn-primary" onclick="getdata()">
</form>



      <!-- Default box --
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  </div>
 
<script type="text/javascript">
  $("#messages").scrollTop($("#messages")[0].scrollHeight);
</script>
@endsection
