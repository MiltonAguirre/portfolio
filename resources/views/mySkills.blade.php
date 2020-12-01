@extends('layouts.app')

@section('content')
<div class="container">
  <div>
    <h2 class="subtitle">My Skills</h2>
    <p class="epigraph">Web & Mobile developer</p>
  </div>
  <hr><br/>
  <div class="card-dark p-3">
    <div class="p-3 my-2">
      <h4 id="web" class="ml-2">WEB DEVELOPMENT:</h4>
      <div class="p-4 card-dark bg-secondary my-2">
          <ul class="list-group list-group-horizontal text-center ">
            <li class="list-group-item list-group-item-success">FRONTEND</li>
            <li class="list-group-item list-group-item-action list-group-item-primary">HTML</li>
            <li class="list-group-item list-group-item-action list-group-item-primary">CSS / SASS / BOOTSTRAP</li>
            <li class="list-group-item list-group-item-action list-group-item-primary">JS / JQUERY / REACT JS</li>
          </ul>
          <ul class="mt-3 list-group list-group-horizontal text-center ">
            <li class="list-group-item list-group-item-success">
              <span class="pr-2">BACKEND</span>
            </li>
            <li class="list-group-item list-group-item-action list-group-item-primary">PHP</li>
            <li class="list-group-item list-group-item-action list-group-item-primary">MYSQL</li>
            <li class="list-group-item list-group-item-action list-group-item-primary">LARAVEL</li>
          </ul>
      </div>
    </div>
    <div class="p-3 my-2">
      <h4 id="mobile">MOBILE DEVELOPMENT:</h4>
      <div class="p-4 card-dark bg-secondary my-2">
        <ul class="list-group list-group-horizontal text-center ">
          <li class="list-group-item list-group-item-action list-group-item-primary">REACT NATIVE</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">REDUX / HOOKS</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">ANDROID STUDIO / EXPO CLI</li>
        </ul>
      </div>
    </div>
    <div class="p-3 my-2">
      <h4 id="other" class="ml-2">OTHER TECHNOLOGIES:</h4>
      <div class="p-4 card-dark bg-secondary my-2">
        <ul class="list-group list-group-horizontal text-center ">
          <li class="list-group-item list-group-item-action list-group-item-primary">LINUX</li>
          <li class="list-group-item list-group-item-action list-group-item-primary">GIT</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
