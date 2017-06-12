@extends('layouts.nav')
@section('content')
<section id="page">
 <header class="page-header">
				<div class="container">
					<div class="row">

						<div class="col-xs-12 hidden-xs">
							<ul id="navTrail">
								<li><a href="index.html">Home</a></li>
								<li id="navTrailLast">Products</li>
							</ul>
						</div>

          </div>
          <h1>Our products</h1>
				</div>
			</header>
     
			<section id="content">

				<!-- section 1 -->
				<section>

					<div class="container">
          @foreach($products as $product)
						<div class="row">
							<div class="col-md-6 pt40" data-nekoanim="fadeInLeftBig" data-nekodelay="200">
								 <img src="data:image/jpeg;base64,<?php echo base64_encode($product->image); ?>" height=450 width=560/>
								 
							</div>

							<div class="col-md-5 col-md-offset-1 pt40 mt40">
								<h1>{{$product->prodDesc}}</h1>


                <p align="justify" style="font-size:19px;">{{$product->prodInfo}}</p>
                <h2><a href="{{action('productController@showProd', $product->prodId)}}" class="moreLink btn btn-info btn-lg">More Info</a></h2>
            
							</div>
						</div>
          @endforeach
					</div>

				</section>
				<!-- section 1 -->
<br><br><br>

        
@endsection