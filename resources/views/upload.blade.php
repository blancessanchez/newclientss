@extends('layouts.nav')

@section('content')
<div class="content-wrapper">
<section class="content-header">
      <h1>
        Add a Picture
        <!--<small>Example 2.0</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'/'}}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
 
 <section class="content">

<div class="box">
           <div class="box-header">

           </div>
           <!-- /.box-header -->
           <div class="box-body">
     {!! Form::open(array('url' => 'addPic', 'files' => 'true')) !!}
                            
           
            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
            <label >Product Picture  </label> {!! Form::file('image') !!}
                @if ($errors->has('image'))
                  <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                  </span>
                @endif
            </div>
            <input type="hidden" name="userid" value="{{ Auth::user()->acctUsername }}">
             {!! Form::submit('Submit', ['class' => 'btn btn-success  btn-flat ']) !!}
           {!! Form::close() !!}
           </div>


</section>
</div>


@include('footernav')
@endsection
