@extends('layouts.nav2')
@section('content')
<br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
     <center>
 <h1><b>Maintenance Request</b></h1>
      

          <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Maintenance</li>
          </ol>

      

      </center>
    </section>

<section class="content">
   <div class="row">
        <!-- left column -->

        <div class="col-md-10 col-md-offset-1">

   <form action="{{action('deployController@addReq', $id)}}" method="POST">
   {{ csrf_field() }}
    <div class="col-md-12">
    <div class="col-md-6">
     <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" style="color:black;"><b>Address</b></label>
    
        <input id="address" type="text" class="form-control col-md-6" name="address" placeholder="Enter address"></input>

        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif

    </div>
    </div>
<div class="col-md-6">
 <label for="address" style="color:black;"><b>Type of Maintenance</b></label>
 <select name="category" class="form-control">
      <option value ="Repair design and programming errors" selected="selected">Repair design and programming errors</option>
      <option value ="Modify system to environmental changes">Modify system to environmental changes</option>
      <option value ="Add new features or improve system performance">Add new features or improve system performance</option>
      <option value ="Safeguard system for future problems">Safeguard system for future problems</option>
      <option value ="Others">Others</option>
    </select>
    </div>
    <br>
    <br> <br>
    <br> <br>
<div class="col-md-12">
   <div class="form-group{{ $errors->has('maintenance') ? ' has-error' : '' }}">
    <label for="maintenance" style="color:black;"><b>Problem</b></label>
    
        <textarea id="maintenance" type="text" class="form-control col-md-6" name="maintenance" row="6" placeholder="Enter problem"></textarea>

        @if ($errors->has('maintenance'))
            <span class="help-block">
                <strong>{{ $errors->first('maintenance') }}</strong>
            </span>
        @endif
    </div>
     <br>
    <br> <br>
   
    <input type="submit" value="Submit Request" class="btn btn-primary">
    <br>
    <br>
    </form>
   </div>
</div>
</section>
@endsection