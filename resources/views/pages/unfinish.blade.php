@extends('layouts.success')
@section('title', 'Checkout Unfinished')

@section('content')
<main>
  <div class="section-success d-flex align-items-center">
    <div class="col text-center">
      <h1>Please Wait!</h1>
      <p>
        Your transaction is still processing.
        <br />
        Please wait while your transaction is processed by our system
      </p>
      <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
        Home Page
      </a>
    </div>
  </div>
</main>
@endsection
