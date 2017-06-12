@extends('layouts.nav2')

@section('content')
<br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
     <center>
 <h1><b>Billing Information</b></h1>
      

          <ol class="breadcrumb">

             <li><a href="{{('/')}}"> Home</a></li>
             <li> <a href="{{('/edit')}}">Profile</a></li>
             <li><a href="{{action('deployController@index',  Auth::user()->id  )}}">Orders</a></li>
             <li class="active">Billing Information</li>
          </ol>

      

      </center>
    </section>
<section class="content">
<div  class="box">
           <div class="box-header">

           </div>
           <!-- /.box-header -->
           <div class="box-body" style="margin-left: 100px;">

    @foreach($bill as $b)
        @if($b->paymentStatus=='Not Paid')
        <div class="container">
          <section class="row mb30">
            <div class="col-md-12">
              <div class="row">
              <div class="col-md-2">
              </div>
                <div class="col-md-8">
                  <div class="boxFocus color1">     
                    <label>{{$b->billCategory}}</label>
                    <p><b>Name:</b> {{$b->user}}</p>
                    <p><b>Item Ordered: </b>{{$b->item}}</p>
                    <p><b>Remaining Balance:</b> {{$b->billAmount}}</p>
                    <p><b>Date Ordered:</b> {{$b->billDate}}</p>
                    <p><b>Payment Status:</b> {{$b->paymentStatus}}</p></br><br>
                    <div class="row">
                    <div class="col-md-6">
                    <a target="_blank" href="{{ url('pdfview/'.$b->billId.'/?download=pdf') }}" class="btn btn-primary btn-flat">Download PDF</a>

                    </div>
                    <div class="col-md-6">
                    {!! Form::open(array('route' => 'getCheckout')) !!}
                    {!! Form::hidden('type','advance') !!}
                    {!! Form::hidden('pay',$b->billAmount) !!}
                    <button class="btn btn-primary btn-flat pull-right">Pay via PayPal</button>
                  {!! Form::close() !!}  
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        @endif
         @endforeach
              
                
              
         
        @foreach($bill as $b)
        @if($b->billCategory=='Final Payment')
        	 @if($b->paymentStatus=='Paid')
              <center><label><b>Final Payment has been paid.</b></label></center><br>
              <center><a href="{{action('deployController@reqMain', $b->ssrId)}}" class="btn btn-primary">Request System Maintenance</a></center>
              <br>
           @endif
               <center><label><b>Paid Bills</b></label></center>
              <table style="width: 900px; margin: auto;" class="table table-bordered table-striped">
             
                <!-- Your heading -->
                     <tr>
                        <th><center>Bill no.</center></th>
                        <th><center>Bill Amount</center></th>
                        <th><center>Billing Date</center></th>
                        <th><center>Date Paid</center></th>
                     </tr>
             <tbody>
        @else 
                @if($b->paymentStatus=='Paid')
                <tr>
                <td>{{$b->billId}}</td>
                <td>{{$b->billAmount}}</td>
                <td><?= date('F d, Y',strtotime($b->billDate))?> <?= date('h:i:s a',strtotime($b->billDate))?></td>
                <td><?= date('F d, Y',strtotime($b->paidOn))?> <?= date('h:i:s a',strtotime($b->paidOn))?></td>
                </tr>
                @endif
        @endif    
        @endforeach
     </tbody>
           
            </table>

     </section>
     <!-- /.content -->
   </div>
   <!-- /.container -->
 </div>
 <br>
@endsection