@extends('layouts.app')


<head>

  
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

  </head>


 <body>

    
@section('content')
<!-- Header -->
<header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase">Welcome !</div>
      </div>
    </div>
  </header>
<br/>

{{-- TODO Make List of tasks of the selected company only appera --}}
<div class="col-md-20 col-lg-6 col-md-offset-2"> 
    <div class="card" >
        <div class="card-header">
        Tasks
        <a class ="float-right btn btn-primary" href="/tasks/create">Create New </a></li>
        </div>
          <p>Please Select Company:</p>

          <form action="{{route('tasks.view') }}" method="post" id="projects">
            {{csrf_field()}}
            {{-- //work around to post --}}

            <input type ="hidden" name= "_method" value = "put"> 
            <select name="Project_selection">
                @foreach ($projects as $project)

                    <option value={{$project->name}}>{{$project->name}}</option>

                @endforeach  

            </select>
            <br><br>
            <input type="submit">
          </form>

        <ul class="list-group list-group-flush">
        @foreach ($tasks as $task)
            <li class="list-group-item"><a href="/tasks/{{$task->id}}"  >{{$task->name}}</li>

        @endforeach  
        </ul>
    </div>

</div>

</body>

  @endsection
