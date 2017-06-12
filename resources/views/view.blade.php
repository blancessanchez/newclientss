@extends('layouts.nav2')

@section('content')
<br>
<div class="content-wrapper">

   <section class="content-header">
   <center>
      <h1>
        <b>System Service Request Information</b>
      </h1>
      <ol class="breadcrumb">
         <li><a href="{{('/')}}"> Home</a></li>
       <li> <a href="{{('/edit')}}">Profile</a></li>
       <li><a href="{{action('deployController@index',  Auth::user()->id  )}}">Orders</a></li>
       <li class="active">View SSR</li>
      </ol>
      </center>
    </section>

      <div class="container">
<section class="content">
              
                <div class="col-md-12">
                  <div class="boxFocus color1">
                    <p><b>Name:</b> &nbsp {{$ssr->ssrName}}</br></p>
                    <p><b>Contact Number:</b> </label> &nbsp {{$ssr->ssrContact}}</br></p>
                    <p><b>Location:</b> </label> &nbsp {{$ssr->ssrLocation}}</br></p>
                    <p><b>Problem:</b> </label>&nbsp {{$ssr->ssrProblem}}</br></p>
                    <p><b>Service Requested:</b> </label>&nbsp{{$ssr->ssrServicereq}}</br></p>
                    <a href="{{action('ssrController@update', $ssr->ssrId)}}" class="btn btn-primary btn-flat">Edit Request<a></a>
                  </div>
                </div>
          

</div>
</div>
</section>
<br> <br> <br>
