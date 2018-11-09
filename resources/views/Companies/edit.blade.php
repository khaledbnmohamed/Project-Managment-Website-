
@extends('layouts.app')

@section('content')
     <div class="row col-md-9 col-lg-9 col-sm-9 pull-left">
        <form method = "post" action = "{{route('companies.update',[$company->id]) }}">
            {{ csrf_field()}}

                  <input type ="hidden" name= "_method" value = "put">
                    <div class="form-group">
                        <label for="comapny-name">Name</label>
                        <input type="string" class="form-control" name='name' id="comapny-name" aria-describedby="emailHelp" placeholder="Enter company name" required value="{{$company->name}}">
                        <small id="helpText" class="form-text text-muted">We'll never share your informations with anyone else but Khalood because he is the website devloper :).</small>
                    </div>
                    <div class="form-group">

                        <label for="company-content">Description</label>
                        <textarea name='description'style = "resize: vertical" class="form-control autosize-target text-left" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description" rows="5" >
                         {{$company->description}}</textarea>
                    
                    </div>    
                    <div class="form-group">
                        
                         <button type="submit" class="btn btn-primary">Submit</button>

                    </div>


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

 


            <div class="sidebar-module">
              <h4>Actions</h4>
              <ol class="list-unstyled">
              <li><a href="/companies/{{$company->id}}">View Companies</a></li>
              <li><a href="/companies/">All Companies</a></li>

                <li><a href="#">Delete</a></li>
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
