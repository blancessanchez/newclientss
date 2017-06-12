@extends('layouts.app')
@section('content')

<div class="content-wrapper">
  <section class="content">

    <div class="error-page">
      <h2 class="headline text-red">Error</h2>

      <div class="error-content">
        <h3><i class="fa fa-warning text-red"></i>Uh oh!</h3>
          <h4>Login failed</h4>
        <p>
          Try to double check your username and password. <br/>
          Try to login again <a href="{{url('/')}}">return to the main page</a>.
        </p>

      </div>
    </div>
    <!-- /.error-page -->

  </section>
<!-- /.content -->
</div>
@endsection
