@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-2"> 
    <div class="card" style="width: 18rem;">
        <div class="card-header">
        Projects
        <a class ="pull-right btn btn-primary" href="/projects/create">Create New </a></li>
        </div>
        <ul class="list-group list-group-flush">
        @foreach ($projects as $project)
            <li class="list-group-item"><a href="/projects/{{$project->id}}"  >{{$project->name}}</li>

        @endforeach  
        </ul>
    </div>

</div>

  @endsection
