@extends('layouts.app')

@section('content')
<div class="container">
  <div>
    <h2 class="subtitle">My Skills</h2>
    <p class="epigraph">Web & Mobile developer</p>
  </div>
  <hr><br/>
  <div class="p-3 card-dark my-2">
    <h4 id="web">WEB DEVELOPMENT:</h4>
    <div class="mt-3 mx-2">
        <ul class="list-group list-group-horizontal text-center">
          <li class="list-group-item list-group-item-success">FRONTEND</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">HTML</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">CSS / SASS / BOOTSTRAP</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">JS / JQUERY / REACT JS</li>
        </ul>
    </div>
    <div class="mt-3 mx-2">
        <ul class="list-group list-group-horizontal text-center">
          <li class="list-group-item list-group-item-success">BACKEND</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">PHP</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">MYSQL</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">LARAVEL</li>
        </ul>
    </div>
  </div>
  <div class="p-3 card-dark my-2">
      <h4 id="mobile">MOBILE DEVELOPMENT:</h4>
      <div class="mt-3 mx-2">
        <ul class="list-group list-group-horizontal text-center">
          <li class="list-group-item list-group-item-action list-group-item-primary">REACT NATIVE</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">REDUX / HOOKS</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">ANDROID STUDIO / EXPO CLI</li>
        </ul>
      </div>

  </div>
  <div class="p-3 card-dark my-2">
    <h4 id="other">OTHER TECHNOLOGIES:</h4>
    <div class="mt-3 mx-2">
      <ul class="list-group list-group-horizontal text-center">
        <li class="list-group-item list-group-item-action list-group-item-primary">LINUX</li>
        <li class="list-group-item list-group-item-action list-group-item-primary">GIT</li>
      </ul>
    </div>
  </div>
</div>
@endsection
