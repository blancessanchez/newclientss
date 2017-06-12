@extends('layouts.nav2')
@section('content')
<link href="../vendor/swatkins/gantt/css/gantt.css" rel="stylesheet" type="text/css">
<div class="content-wrapper">
 <section class="content-header">
 <center>
 <br>
      <h1>
        <b>Current Progress</b>
      </h1>
      <ol class="breadcrumb">
         <li><a href="{{('/')}}"> Home</a></li>
       <li> <a href="{{('/edit')}}">Profile</a></li>
       <li><a href="{{action('deployController@index',  Auth::user()->id  )}}">Orders</a></li>
       <li class="active">View Progress</li>
        <!--<li class="active">Blank page</li>-->
      </ol>
      </center>
    </section>
 
<section class="content">
      <div class="box">
           <div class="box-header">

           </div>
           <!-- /.box-header -->
           <div class="box-body">

           
            <br>
             
            <div class="col-md-12">  
            <center><label>Scheduling</label></center>                   
              {!! $gantt !!}
            </div>
       </div>

      
     </section>
     <!-- /.content -->
   </div>
   <!-- /.container -->
 </div>
 <br>
@endsection