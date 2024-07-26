@extends('layouts.admin')

@section('content')
<div class="container">
    <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Developer</th>
            <th scope="col">Release Date</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)


          <tr>
            <td>{{$project->title}}</td>
            <td>{{$project->developer}}</td>
            <td>{{$project->release_date}}</td>
            <td><a class="btn btn-primary btn-sm" href="{{route('admin.projects.show',$project)}}">View</a>

            </td>
          </tr>

          @endforeach
        </tbody>
      </table>
</div>
@endsection
