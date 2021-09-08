@extends('index')
   
   
@section('css')
   
<link rel="stylesheet" href="{{asset('css/findwork.css')}}">
<link rel="stylesheet" href="{{asset('css/jobfeed.css')}}">
   

    @endsection


    @section('content')

    <div class="container bg-white" style=" padding: 0;">
        <div class="row">
            <div class="col-sm-9 cols">
                <section class="whole_sec">
                    <strong style="margin: 0;">{{$job->headline}}</strong>
                </section>
                
                <!-- Describe section -->
                <section class="whole_sec">

                    <div class="job_description text-justify">
                        {{$job->description}}
                    </div>
                </section>
                <section class="whole_sec">

                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-tag fa-tag-sm clok_icn"> {{$job->budget}} <br> <small class="clok_txt">Fixed price</small></i> <br>
                        </div>
                        <div class="col-sm-4">
                            <i class="fa fa-cubes clok_icn">  {{$job->scope}} <br>  <small class="clok_txt"> looking for a mix of <br><small class="clok_txt">  experience and value</small></small></i>
                        </div>
                       
                    </div>

                </section>
               
                <section class="whole_sec">
                    <label class="main_label" for="example-text-input">Skills and Expertise</label>
                    <div class="badges mt-2 mb-3">
                        <span class="badge badge-pill badge-light border">{{$job->skill}}</span>
                    </div>


                </section>
            </div>
            <div class="col-sm-3 pt-4 cols">
                <section>
                    @if(Auth::user()->profile->profile_type == 'freelancer')
                    <button type="button" class="btn btn-rounded btn-success mb-3 pr-4 pl-4" data-toggle="modal" data-target="#exampleModal">
                        Send Purposal
                    </button>
                    @endif
                    
                    @if(Auth::user()->profile->id == $job->profile_id)
                    <a href=" {{route('get_purposal',$job->id)}}" type="button" class="btn btn-rounded btn-success mb-3 pr-4 pl-4">
                        View all Purposals
                    </a>
                    @endif
                    
                    <!-- <button type="button" class="btn btn-outline-success btn-rounded  js-click-ripple-enabled pr-4 pl-4 h_icon">
                        <i class="far fa-heart "></i> Save Post
                   </button> -->
                    <label class="main_label" for="example-text-input">Activity on this job</label>
                    <div>
                        <span>
                                <span class="activiity_txt"> Proposals: {{$job->jobPurposals->count()}} <i class="fa fa-question-circle job_activity" data-toggle="popover" data-animation="true" data-placement="top" title="" data-content="This range includes relevant proposals, but does not include proposals that are withdrawn, declined, or archived. Please note that all proposals are accessible to clients on their applicants page."></i></span>
                        <small class="activiity_txt"></small>
                        </span>
                    </div>
                    
                    <div>
                        <span>
                            <span  class="activiity_txt">
                                Interviewing:  
                            </span>
                        <small class="activiity_txt">  0</small>
                        </span>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <form action="{{ route('job_request') }}" method="post">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong>  Send Purposal for </strong> {{$job->headline}} </h5>
            <input type="hidden" name="job_id" value="{{$job->id}}">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control w-100" id="example-textarea-input" name="purposal" rows="4" placeholder="Purpose Your Idea and suitable budget" required></textarea>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Send Purposal</button>
          </div>
        </div>
      </div>
        </div>
    </form>
    @endsection


@section('js')

    <script src="{{asset('js/pages/be_ui_progress.min.js')}}"></script>


    <script>
        jQuery(function() {
            One.helpers('slick');
        });
    </script>
@endsection
