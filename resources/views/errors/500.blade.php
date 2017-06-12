@extends('layouts.app')
@section('content')

<div class="content-wrapper">
  <section class="content">

    <div class="error-page">
      <h2 class="headline text-red">500</h2>

      <div class="error-content">
        <h3><i class="fa fa-warning text-red"></i>Uh oh!</h3>
          <h4>Something went wrong.</h4>
        <p>
          This page is not yet working <br/>
          Meanwhile, you may <a href="{{url('/')}}">return to the main page</a>.
        </p>

      </div>
    </div>
    <!-- /.error-page -->

  </section>
<!-- /.content -->
</div>
@endsection
