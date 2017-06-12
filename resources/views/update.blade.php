@extends('layouts.nav2')
@section('content')

<div class="content-wrapper">
<section class="content-header">
<br>
 <center><b><h1>Update System Service Request</b></h1>
      <h3>

         <!--  <ol class="breadcrumb">

              <a href="{{('/')}}"> Home</a>

              <li class="active"> &#10148; Inquire Product</li>
            <!--<li class="active">Blank page</li>-->
          <!-- </ol> --> 

      </h3>
      <hr>
</center>


  </section>

 <section class="content">
  <div class="row">
        <!-- left column -->

        <div class="col-md-10 col-md-offset-1">
          <!-- general form elements -->
          <div class="box box-primary">

            <!-- /.box-header -->
            <!-- form start -->


           

           
            <form action="{{action('ssrController@store', $ssr->ssrId)}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">

                    <label for="name" style="color:black;"><b>Name</b></label>
                       <input type="text" class="form-control" name="ssrName" value = "{{$ssr->ssrName}}">
                       <p style="color:red;">{{$errors->first('ssrName')}}</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">

                    <label for="contact" style="color:black;"><b>Contact</b></label>
                        <input type="text"  class="form-control" name="ssrContact"value = "{{$ssr->ssrContact}}">
                          <p style="color:red;">{{$errors->first('ssrContact')}}</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">

                    <label for="location" style="color:black;"><b>Location</b></label>
                       <input type="text" class="form-control" name="ssrLocation"value = "{{$ssr->ssrLocation}}">
                       <p style="color:red;">{{$errors->first('ssrLocation')}}</p>
                  </div>
                  <div class="form-group">

                    <label for="problem" style="color:black;"><b>Problem</b></label>
                         <textarea rows="8" cols="100" class="form-control" name="ssrProblem">{{$ssr->ssrProblem}}</textarea>
                           <p style="color:red;">{{$errors->first('ssrProblem')}}</p>
                  </div>
                  <div class="form-group">
                    <label for="Service Request" style="color:black;"><b>Service Request</b></label>
                       <textarea rows="8" cols="100" class="form-control" name="ssrServicereq">{{$ssr->ssrServicereq}}</textarea>
                         <p style="color:red;">{{$errors->first('ssrServicereq')}}</p>
                  </div>
          

                     <div class="form-group">
                    <label for="Attachmemt" style="color:black;"><b>Attachment</b></label>
                       {!! Form::file('file') !!}
                        <small><i>Allowed extension files: .zip, .rar, .pdf, .docx, .doc</i></small>
                  </div>
         
                <br/>
                <input type="hidden" name="userid" value="{{ Auth::user()->acctUsername }}">
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="actType" value="Submitted SSR Form">
                        <div class="box-footer">
                <input type="submit" class="btn btn-success" value="Save">
                    </div>
            </form>

          </div>
</div>
</section>
<br><br><br>

@endsection
