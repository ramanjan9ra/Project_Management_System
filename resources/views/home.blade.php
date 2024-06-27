@extends('layouts.app')

@section('content')
<div class="container">

    <div class="text-center mt-5">
        <h1 class="bg-info-subtle text-info-emphasis p-4">Project Management System</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3 mt-5">
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/Project.jpg') }}" class="card-img-top img-size" alt="Project">
      <div class="card-body text-center">
       <a href="{{route('projects.index')}}" class="btn btn-primary">Projects</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/client.jpg') }}" class="card-img-top img-size" alt="Client">
      <div class="card-body text-center">
      <a href="{{route('clients.index')}}" class="btn btn-primary">Client's</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{ asset('img/user.jpg') }}" class="card-img-top  img-size" alt="User">
      <div class="card-body text-center">
      <a href="{{route('users.index')}}" class="btn btn-primary">Users</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

