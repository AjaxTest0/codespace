@extends('index')

@section('css')

    <link rel="stylesheet" href="{{asset('css/findwork.css')}}">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    @endsection

    @section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-2 p-xs-top p-0-left">
                <h1>Find Work</h1>
            </div>
            <div class=" col-lg-8 mt-2 input-group input-group-sm">
                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                <div class="input-group-append">
                    <span class="input-group-text bg-body border-0">
                        <i class="si si-magnifier"></i>
                    </span>
                </div>
            </div>
        </div>



        <div class="row">
            
            <!-- Center part -->
            <div class="col-lg-8 ">
               
                <div class="bg-white mt-4 pt-2">
                    <div class="row container">
                        <div class="col-sm-11">
                            <h1>My Feed</h1>
                        </div>
                      
                    </div>
                    <div>
                        @foreach ($jobs as $key => $job)
                        <!-- post 2 -->
                        <form action ="{{route('single_job',$job->id)}}" method="GET">
                            @csrf
                            <div class="pl-3 pr-3 jobs_box">
                                <div class="row ">
                                    <div class="col-sm-8">
                                        <span class="green_color">{{$job->headline}}</span>
                                    </div>
                                    <div class="col-sm-4 mt-1">
                                        <span class="normal">{{$job->budget}} 

                                        </span>
                                        <a href="">  
                                            <i class="fas fa-bookmark ml-5 "></i>
                                        </a> 
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="bold"> Est. Time: </span>
                                    <span class="normal">  {{$job->length}}  </span><br>
                                    <span class="bold">  Posted : </span>
                                    <span class="normal">  {{$job->created_at}}</span>

                                    <p style="margin: 0;" class="text-justify">{{ \Illuminate\Support\Str::limit($job->description, 230, $end='...')}}</p>
                                    
                                    <div class="badges mt-2 mb-3">
                                        <span class="badge badge-pill badge-light border">{{$job->skill}}</span>
                                    </div>

                                    <span class="bold" >Proposals:</span>
                                    <span class="normal">Less than 5</span><br>

                                    <span class="normal"><i class="far fa-check-circle green_color"></i> Payment verified</span>
                                    <i class="fa fa-star rate_ic"></i>
                                    <i class="fa fa-star rate_ic"></i>
                                    <i class="fa fa-star rate_ic"></i>
                                    <i class="fa fa-star rate_ic"></i>
                                    <i class="fa fa-star-half-alt rate_ic" ></i>    
                                    <span class="normal"> $30+ spent</span> <br> 
                                    <span>
                                        <i class="fa fa-map-marker-alt normal "></i> 
                                        <strong>United states</strong></span>
                                </div>
                                    <button class="btn btn-success m-1" type="submit">view job</button>
                            </div>
                        </form>
                        <hr>
                        @endforeach
                        
                    </div>

                </div>
                
            </div>
            <!-- center part -->
            <!-- left side  -->
           
            <!-- left side end -->
        </div>
    </div>

    <!-- modal -->
    <!-- <button type="button " class="btn btn-sm btn-primary push " data-toggle="modal " data-target="#modal-block-slideright ">Launch Modal</button> -->

    <div class="modal fade " id="modal-block-slideright " tabindex="-1 " role="dialog " aria-labelledby="modal-block-slideright " aria-hidden="true ">
        <div class="modal-dialog modal-dialog-slideright " role="document ">
            <div class="modal-content ">
                <div class="block block-themed block-transparent mb-0 ">
                    <div class="block-header bg-primary-dark ">
                        <h3 class="block-title ">Modal Title</h3>
                        <div class="block-options ">
                            <button type="button " class="btn-block-option " data-dismiss="modal " aria-label="Close ">
                                    <i class="fa fa-fw fa-times "></i>
                                </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm ">
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst
                            proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst
                            proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    </div>
                    <div class="block-content block-content-full text-right border-top ">
                        <button type="button " class="btn btn-sm btn-light " data-dismiss="modal ">Close</button>
                        <button type="button " class="btn btn-sm btn-primary " data-dismiss="modal "><i class="fa fa-check mr-1 "></i>Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection



    @section('js')



    <script src="{{asset('js/pages/be_ui_progress.min.js')}}"></script>


    <script>
        jQuery(function() {
            One.helpers('slick');
        });
    </script>
@endsection