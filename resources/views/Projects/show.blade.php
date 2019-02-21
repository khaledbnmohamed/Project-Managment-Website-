
@extends('layouts.app')

@section('content')
     <div class="row col-md-9 col-lg-9 col-sm-9 float-left">

         


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1> {{$project->name}}</h1>
        <p class="lead">{{ $project -> description}}</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>

      <!-- Example row of columns -->
        {{-- //print projects linked to the project --}}
        <a href="/projects/create" class ="float-right btn btn-primary btn-small">Add new project</a>
       
    <br/>

   
    @include('partials.comments')

    <br/>
    <br/>
  <div class="row col-md-9 col-lg-9 col-sm-9 ">
      <form method = "post" action = "{{route('comments.store') }}">
          {{ csrf_field()}}
          <div class="form-group">

                <input type ="hidden" name= "commentable_type" value = "App\Project"> 
                <input type ="hidden" name= "commentable_id" value = "{{$project->id}}"> 

                <label for="comment-content">Comment</label>
                <textarea name='body'style = "resize: vertical" class="form-control autosize-target text-left" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your comment here" rows="3" >
                </textarea>

                <label for="comment-content">Url</label>
                <textarea name='url'style = "resize: vertical" class="form-control autosize-target text-left" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter url or screenshot" rows="2" >
                </textarea>
  
            
            </div>    
            <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
      </div>
    </div>

       
       
        {{-- @foreach ($project->task as $task)
        <div class="row" style="background: white; margin :10px;">
                <div class="col-lg-4">
                    <h2>{{$task->name}}</h2>
                    <p>{{$task -> description}} </p>
            <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View Projects &raquo;</a></p>
                </div>
              </div>
                @endforeach --}}

              
                

     </div>
  

    <div class="col-sm-3 col-md-3 col-lg-3 float-right">
            <div class="sidebar-module sidebar-module-inset">

            <div class="sidebar-module">
              <h4>Actions</h4>
              <ol class="list-unstyled">
              <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>
              <li><a href="/projects/create">Add new project</a></li>
              <li><a href="/companies">Projects lists</a></li>

              
              
              @if ($project->user_id == Auth::user()->id)
                  <br/>

                  <li>
                    <a href="#" onclick="var result = confirm('Are you sure you wish to delete this Project?');
                      if( result ){
                        event.preventDefault();
                        document.getElementById('delete-form').submit(); 
                        }">Delete</a>
                    <form id="delete-form" action="{{ route('companies.destroy',[$project->id]) }}" 

                      method="POST" style="display: none;">
      
                              <input type="hidden" name="_method" value="delete">
      
                    </form>
                    </li> 
              @endif 

              </ol>
            </div>
          </div><!-- /.blog-sidebar -->
          
          <h4>Add members</h4>
        <br/>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
            
            <form id="add-user" action="{{ route('projects.adduser') }}"  method="POST" >
              {{ csrf_field()}}

            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Add</button>
            
            </form>
            </div>
          </div>


          <h4>Team members</h4>
          <ol class="list-unstyled">

          @foreach ($project->user  as $user)
              
              <li><a href="#">{{$user->email}}</a></li>

          @endforeach
          </ol>

        </div> 
      

@endsection
          
   
</body>  


              


