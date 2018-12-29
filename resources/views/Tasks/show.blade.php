
@extends('layouts.app')



  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$task->name}}</title>

  </head>



  <body>
  @section('content')
  <div class="row col-md-9 col-lg-9 col-sm-9 float-left">

    <div class="container">


      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1> {{$task->name}}</h1>
      </div>

      <!-- Example row of columns -->
        {{-- //print projects linked to the task --}}
        <a href="/tasks/create" class ="float-right btn btn-primary btn-small">Create new task</a>
        {{-- @foreach ($task->project as $project)
        <div class="row" style="background: white; margin :10px;">
                <div class="col-lg-4">
                    <h2>{{$project->name}}</h2>
                    <p>{{$project -> description}} </p>
            <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View Projects &raquo;</a></p>
                </div>
                @endforeach --}}

                </div> 

     </div>
    </div>


    <div class="col-sm-3 col-md-3 col-lg-3 float-right">
         
            <div class="sidebar-module">
              <h4>Actions</h4>
              <ol class="list-unstyled">
              <li><a href="/tasks/{{$task->id}}/edit">Edit</a></li>
              
              {{-- passing task id   to create project with --}}
              <li><a href="/projects/create/{{ $task ->id}}">Add new project</a></li> 
              
              <li><a href="/tasks">Tasks lists</a></li>

              <li><a href="/tasks/create">Create New Task</a></li>


              <br/>

              <li>
                <a href="#" onclick="var result = confirm('Are you sure you wish to delete this Task?');
                    if( result ){event.preventDefault();
                    document.getElementById('delete-form').submit();
                    }">Delete</a>
                <form id="delete-form" action="{{ route('tasks.destroy',[$task->id]) }}" 
                  method="POST" style="display: none;">
  
                          <input type="hidden" name="_method" value="delete">
  
                          {{ csrf_field() }}
  
                </form>
  

                </li>
              </ol>
          </div><!-- /.blog-sidebar -->
          @endsection


        </div>


      </body>




    
