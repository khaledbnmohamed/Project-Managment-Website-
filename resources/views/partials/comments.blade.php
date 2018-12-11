       {{-- Comments section --}}
        <div class="row">
            <div class="col-md-4  col-sm-6  col-lg-24 ">
                
                    <!-- Fluid width widget -->        
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span class="glyphicon glyphicon-comment"></span> 
                                Recent Comments
                            </h3>
                        </div>
                        <div class="panel-body">
                            <ul class="media-list">

                        @foreach ($project->comments as $comment)
                      
                        <li class="media">
                            <div class="media-left">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Mauris Eu
                                    <br>
                                    <small>
                                        commented on <a href="#">{{$project->name}}</a>
                                    </small>
                                </h4>
                                <p>
                                   {{$comment->body}}
                                  </p>
                                </div>
                                @endforeach
                            </li>
                        </ul>
            
                <!-- End fluid width widget --> 
                
        </div>
      </div>
            </div>
        </div>
    
       