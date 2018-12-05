@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-2"> 
    <div class="card" style="width: 18rem;">
        <div class="card-header">
        Companies
        <a class ="pull-right btn btn-primary" href="/companies/create">Create New </a></li>
        </div>
        <ul class="list-group list-group-flush">
        @foreach ($companies as $company)
            <li class="list-group-item"><a href="/companies/{{$company->id}}"  >{{$company->name}}</li>

        @endforeach  
        </ul>
    </div>

</div>

  @endsection
