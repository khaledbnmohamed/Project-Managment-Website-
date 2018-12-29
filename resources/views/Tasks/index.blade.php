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
    <link href="css/custom.css" rel="stylesheet">

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
<div class="col-md-20 col-lg-6 col-md-offset-2"> 
    <div class="card" >
        <div class="card-header">
        Companies
        <a class ="float-right btn btn-primary" href="/companies/create">Create New </a></li>
        </div>
        <ul class="list-group list-group-flush">
        @foreach ($companies as $company)
            <li class="list-group-item"><a href="/companies/{{$company->id}}"  >{{$company->name}}</li>

        @endforeach  
        </ul>
    </div>

</div>

</body>

  @endsection
