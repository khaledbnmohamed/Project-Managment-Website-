
@extends('layouts.app')

@section('content')
     <div class="row col-md-9 col-lg-9 col-sm-9 pull-left">

         


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
        <h1> {{$company->name}}</h1>
        <p class="lead">{{ $company -> description}}</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>

      <!-- Example row of columns -->
        {{-- //print projects linked to the company --}}
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
  

    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
            <div class="sidebar-module sidebar-module-inset">
         
            <div class="sidebar-module">
              <h4>Archives</h4>
              <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
        
              </ol>
            </div>
            <div class="sidebar-module">
              <h4>Actions</h4>
              <ol class="list-unstyled">
              <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
                <li><a href="/companies/edit/{{$company->id}}">Delete</a></li>
                <li><a href="#">Add mew member</a></li>
              </ol>
            </div>
          </div><!-- /.blog-sidebar -->
  



        <!-- Site footer -->
        <footer class="footer">
                <p>&copy; Company 2017</p>
              </footer>
        
            </div> <!-- /container -->
    @endsection


    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

  
</html>
