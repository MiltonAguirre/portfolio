@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="subtitle">Contact</h2>
    <p class="epigraph">Web & Mobile developer</p>
  <hr><br/>

  <div class="card-dark p-3">
    <div class="p-2 col-10 offset-1 my-2 bg-secondary rounded text-center">
      <h5>CONTACT WITH ME</h5>
      <h6>
        Hello Friend! Would you like to contact me to develop or collaborate with your project?
      </h6>
      <h6>
        If you’d like to chat about a project please fill in the form below and I’ll get back within 1-2 days.
      </h6>
    </div>
    <div class="p-2 col-10 offset-1 my-2 opacity border border-light rounded-bottom">
      <form class="form" action="index.html" method="post">
          <div class="col-10 offset-1 my-2">
            <input class="form-control" type="text" name="name" placeholder="Full name">
          </div>
          <div class="col-10 offset-1 my-2">
            <input class="form-control" type="email" name="email" placeholder="E-mail">
          </div>
          <div class="col-10 offset-1 my-2">
            <input class="form-control" type="text" name="subject" placeholder="Subject">
          </div>
          <div class="col-10 offset-1 my-2">
            <textarea class="form-control" name="message" rows="8" cols="80">Tell me how I can help you, I will answer you shortly...</textarea>
          </div>
          <div class="col-3 offset-8 mt-3">
            <input class="btn btn-block btn-success"type="submit" name="submit" value="Enviar!">
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
