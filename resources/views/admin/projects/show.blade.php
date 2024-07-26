@extends('layouts.admin')

@section('content')
<div class="container">

<div class="card" style="width: 30rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">{{$project->title}}</h4>
      <h5 class="card-title">{{$project->developer}}</h5>
      <p class="card-text">{{$project->release_date}}</p>
      <p class="card-text">{{$project->description}}</p>
      <a href="{{route('admin.projects.index', $project)}}" class="btn btn-primary">Go back to main page</a>
    </div>
  </div>
</div>
@endsection
