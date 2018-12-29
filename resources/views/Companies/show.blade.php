
@extends('layouts.app')



  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$company->name}}</title>

  </head>



  <body>
  @section('content')
  <div class="row col-md-9 col-lg-9 col-sm-9 float-left">

    <div class="container">


      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1> {{$company->name}}</h1>
        <p class="lead">{{ $company -> description}}</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>

      <!-- Example row of columns -->
        {{-- //print projects linked to the company --}}
        <li><a href="/projects/create" class ="float-right btn btn-primary btn-small">Add new project</a></li>
        @foreach ($company->project as $project)
        <div class="row" style="background: white; margin :10px;">
                <div class="col-lg-4">
                    <h2>{{$project->name}}</h2>
                    <p>{{$project -> description}} </p>
            <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View Projects &raquo;</a></p>
                </div>
                @endforeach

                </div> 

     </div>
    </div>


    <div class="col-sm-3 col-md-3 col-lg-3 float-right">
         
            <div class="sidebar-module">
              <h4>Actions</h4>
              <ol class="list-unstyled">
              <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
              
              {{-- passing company id   to create project with --}}
              <li><a href="/projects/create/{{ $company ->id}}">Add new project</a></li> 
              
              <li><a href="/companies">Comapnies lists</a></li>

              <li><a href="/companies/create">Create New Company</a></li>


              <br/>

              <li>
                <a href="#" onclick="var result = confirm('Are you sure you wish to delete this Company?');
                    if( result ){event.preventDefault();
                    document.getElementById('delete-form').submit();
                    }">Delete</a>
                <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" 
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




    
