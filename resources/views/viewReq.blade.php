@extends('layouts.nav2')
<?php include('messaging/connection.php');?>

@section('content')
<br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
     <center>
 <h1><b>Maintenance Requests</b></h1>
      

          <ol class="breadcrumb">

             
             <li><a href="{{('/')}}"> Home</a></li>
       <li> <a href="{{('/edit')}}">Profile</a></li>
       <li><a href="{{action('deployController@index',  Auth::user()->id  )}}">Orders</a></li>
       <li class="active">Maintenance Request</li>
          </ol>

      

      </center>
    </section>
<section class="content">
<div  class="box">
   <div class="box-header">
   <?php $id= 0;?>
  
   @foreach($mains as $main)
   
   <?php $id = $main->ordId;?>
   @endforeach
    @if($id!=0)
   	<?php  	
	   $query = mysqli_query($DB, "SELECT * FROM tblbilling WHERE ssrId = $main->ordId AND billCategory = 'Final Payment'");
	   $row = mysqli_fetch_assoc($query);
	   $numrows=mysqli_num_rows($query);
	   if($numrows !=0 ){
	   ?>
	   <center><a href="{{action('deployController@reqMain', $row['ssrId'])}}" class="btn btn-primary">Request Maintenance</a>
	   <br><br>
	   <?php
	   }
	 ?>

   @else
   <center><label>Can only request maintenance after Final Payment has been paid.</label></center>
   @endif
   		<table style="width: 900px; margin: auto;" class="table table-bordered table-striped"> 
	    <!-- Your heading -->
	         <tr>
	            <th><center>Maintenance Category</center></th>
	            <th><center>Request</center></th>
	            <th><center>Address</center></th>
	            <th><center>Status</center></th>
	            <th><center>Start Date</center></th>
	            <th><center>Options</center></th>
	            <th><center>Billing Info</center></th>
	            <th><center>Delete</center></th>

	         </tr>            
                <tbody>   
   		@foreach($mains as $main)
   			<tr>
   				<td>{{$main->category}}</td>
   				<td>{{$main->request}}</td>
   				<td>{{$main->address}}</td>   				
   				<td>{{$main->status}}</td>
   				@if($main->startDate==NULL)
   				<td>Not Approved yet.</td>
   				@else
   				<td><?= date('F d, Y',strtotime($main->startDate))?></td>
   				@endif
   				<td><a href="{{action('deployController@editReq', $main->id)}}" class="btn btn-primary">Edit Request</a> </td>
   				<td><a href="{{action('billController@index2', $main->id)}}" class="btn btn-primary">Billing Info</a> </td>
   				<td><form class="delete" action="{{action('deployController@destroy2', $main->id)}}" onsubmit="return confirm('Are you sure you want to delete?')" >
           <input type="submit" class="btn btn-sm btn-danger btn-flat" value="Delete"></form></td>
   			</tr>
   		@endforeach
   		</tbody>
   		</table>
   		
          </div>
</div>
</section>
<br><br><br>