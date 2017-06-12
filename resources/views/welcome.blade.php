@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Our Products
        <!--<small>Example 2.0</small>-->
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Top Navigation</li>
      </ol>-->
    </section>
<section class="content">

  <div class="containe-fluid">
            @foreach($products as $product)
            <article class="col-sm-3">
                <img alt="" src="{{asset('dist/img/prod1.jpg')}}" class="img-responsive">
              <section class="boxContent">
                <h3>{{$product->prodDesc}}</h3>
                <p> {{$product->prodInfo}}<br />
                  <a href="{{url('/500')}}" class="moreLink">&rarr; Demo</a>
                   <a href="{{action('ssrController@index', $product->id)}}" class="moreLink">&rarr; Inquire Now</a>
                </p>
              </section>
            </article>
            @endforeach
           
            <!-- portfolio item -->

            <!-- portfolio item -->
          
              <!-- portfolio item -->
              <!-- portfolio item -->
                <!-- portfolio item -->
              </div>
     </section>
      <section class="content-header">
     <br><br><br><br><br><br><br><br><br><br>
      <h1>
        Our Services
        <!--<small>Example 2.0</small>-->
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Top Navigation</li>
      </ol>-->
    </section>
<section class="content">

  <div class="containe-fluid">
            @foreach($products as $product)
            <article class="col-sm-3">
                <img alt="" src="{{asset('dist/img/prod1.jpg')}}" class="img-responsive">
              <section class="boxContent">
                <h3>{{$product->prodDesc}}</h3>
                <p> {{$product->prodInfo}}<br />
                  <a href="{{url('/500')}}" class="moreLink">&rarr; Demo</a>
                   <a href="{{action('ssrController@index', $product->id)}}" class="moreLink">&rarr; Inquire Now</a>
                </p>
              </section>
            </article>
            @endforeach
           
            <!-- portfolio item -->

            <!-- portfolio item -->
          
              <!-- portfolio item -->
              <!-- portfolio item -->
                <!-- portfolio item -->
              </div>
     </section>
     <!-- /.content -->
   </div>
   <!-- /.container -->
 </div><!--<ul class="nav navbar-nav pull-right">
               <li class="primary">
               @if (Auth::guest())
                   <br><a href="{{ url('/login') }}" class="firstLevel hasSubMenu">LOGIN</a></br>
                   </li>
                   <li class="sep"></li>
                   <li class="primary">
                     <br><a href="{{ url('/register') }}">REGISTER</a></br>
                   </li>
               @else
                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                           <br>{{ Auth::user()->acctUsername }} <span class="caret"></span></br>
                       </a>

                       <ul class="dropdown-menu" role="menu">
                           <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>LOGOUT</a></li>
                           <li><a href="{{ url('/edit') }}"></i>EDIT PROFILE</a></li>
                       </ul>
                   </li>
               @endif-->
@endsection
