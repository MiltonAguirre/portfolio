@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="subtitle">Contact</h2>
    <p class="epigraph">Web & Mobile developer</p>
  <hr><br/>
  <div class="m-5">
    <h5>
      Hello Friend! Would you like to contact me to develop or collaborate with your project?
    </h5>
    <h5>
      If you’d like to chat about a project please fill in the form below and I’ll get back within 1-2 days.
    </h5>
  </div>
  <div class="card-dark col-10  p-1">
    <form class="col-12" action="index.html" method="post">
      <div class="offset-1 justify-content-center">
        <div class="col-10 m-2">
          <input class="form-control" type="text" name="name" placeholder="Full name">
        </div>
        <div class="col-10 m-2">
          <input class="form-control" type="email" name="email" placeholder="E-mail">
        </div>
        <div class="col-10 m-2">
          <input class="form-control" type="text" name="subject" placeholder="Subject">
        </div>
        <div class="col-10 m-2 justify-content-center">
          <textarea class="form-control" name="message" rows="8" cols="80">Tell me how I can help you, I will answer you shortly...</textarea>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
