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
<iframe style="height:500px; width:700px" src="https://webchat.botframework.com/embed/MarsBotBlance?s=ns3113A_K60.cwA.cqQ.FakxvT1EoDPabw6nA1rzWELOOHMDNfxcZYRXNfuXJdY"></iframe>

<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>


</div>
</div>



    <!-- Main content -->
    <section class="content">





      <!-- Default box --
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  </div>
 


@endsection
