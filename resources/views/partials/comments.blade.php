        {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        
        <!-- Container, Row, and Column used for illustration purposes -->
        <div class="container" id="commentsboor">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                
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
                                                {{ $comment->user_id  }}                                                
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
                               
                            </ul>
                        </div>
                    </div>
                    <!-- End fluid width widget --> 
                    
                </div>
            </div>
        </div>

========================== --}}

<div class="container">
        <div class="row">
            <div class="comments col-md-9" id="comments">
                <h3 class="mb-2">Comments</h3>
                <!-- comment -->

                @foreach ($project->comments as $comment)

                <div class="comment mb-2 row">
                    <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                        <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/m103.jpg" alt="avatar"></a>
                    </div>
                    <div class="comment-content col-md-11 col-sm-10">
                        <h6 class="small comment-meta"><a href="#">admin</a> commented on {{$project->name}}</h6>
                        <div class="comment-body">
                            <p>
                                    {{$comment->body}}
                                    <br>
                                <a href="" class="text-right small"><i class="ion-reply"></i> Reply</a>
                            </p>
                        </div>
                    </div>
                    
                    {{-- <!-- reply is indented -->
                    <div class="comment-reply col-md-11 offset-md-1 col-sm-10 offset-sm-2">
                        <div class="row">
                            <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                                <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/m101.jpg" alt="avatar"></a>
                            </div>
                            <div class="comment-content col-md-11 col-sm-10 col-12">
                                <h6 class="small comment-meta"><a href="#">phildownney</a> Today, 12:31</h6>
                                <div class="comment-body">
                                    <p>Really?? Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                        <br>
                                        <a href="" class="text-right small"><i class="ion-reply"></i> Reply</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                   </div>
                   <!-- /reply is indented --> --}}
                </div>
                @endforeach

                <!-- /comment -->
            
                <div class="row pt-2">
                    <div class="col-12">
                        
                        <a href="" class="btn btn-sm btn-primary">Comment</a>
                    </div>
                </div>
    
            </div>
        </div>
    </div>