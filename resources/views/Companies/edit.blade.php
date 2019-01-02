
@extends('layouts.app')

<body>

@section('content')
    <div class="row col-md-9 col-lg-9 col-sm-9 float-left">
        <div class="container">

        <form method = "post" action = "{{route('companies.update',[$company->id]) }}">
            {{csrf_field()}}

            {{-- //work around to post --}}
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

                  </div>

                </div>

                

          <div class="col-sm-3 col-md-3 col-lg-3 float-right">

            <div class="sidebar-module">
              <h4>Actions</h4>
              <ol class="list-unstyled">
              <li><a href="/companies/{{$company->id}}">View Companies</a></li>
              <li><a href="/companies/">All Companies</a></li>

                <li><a href="#">Delete</a></li>
                <li><a href="#">Add new member</a></li>
              </ol>
            </div>
          </div><!-- /.blog-sidebar -->
  



  
@endsection



  </body>