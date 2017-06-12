@extends('layouts.nav2')
@section('content')
<br>
<div class="content-wrapper">
 <section class="content-header">
 <center>
      <h1>
       <b> My Orders</b>
       @if(Session::has('flash_message'))
              <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!} </em></div>
            @endif
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{('/')}}">Home</a></li>
        <li><a href="{{('/edit')}}">Profile</a></li>
       <li class="active">Orders</li>
        <!--<li class="active">Blank page</li>-->
      </ol>
      </center>
    </section>
    <div >
      <table style="width: 900px; margin: auto;" class="table table-bordered table-striped">
             
                <!-- Your heading -->
                     <tr>
                        <th><center>Order No.</center></th>
                        <th><center>Ordered Item</center></th>
                        <th><center>Date Ordered</center></th>
                        <th><center>Options</center></th>
                        <th><center>Delete</center></th>
                     </tr>
            
             
                   <!-- Your data -->
                    @foreach ($orders as $order)
                      <tr>
                      <td><center>{{$order->ordId}}</center></td>
                      <td><center>{{$order->ordProd}}</center></td>
                      <td><center><?= date('F d, Y',strtotime($order->created_at))?></center></td>
                      <td><center><a href="{{action('deployController@show', $order->ssrId)}}" class="btn btn-primary"> Progress</a> <a href="{{action('ssrController@show', $order->ssrId)}}" class="btn btn-primary">SSR</a> <a href="{{action('billController@index', $order->ordId)}}" class="btn btn-primary">Billing</a> <a target="_blank" href="{{ url('contract/'.$order->ordId.'/?download=pdf') }}" class="btn btn-primary">Contract</a> <a href="{{url('viewReq', $order->ordId)}}" class="btn btn-primary">Maintenance</a> </td>
          <td><form class="delete" action="{{action('deployController@destroy', $order->ordId)}}" onsubmit="return confirm('Are you sure you want to delete?')" >
          <input type="submit" class="btn btn-danger btn-flat" value="Delete"></center> </form></td>
                      </tr>
                    @endforeach
           
            </table>
    </div>

<br>
@endsection
