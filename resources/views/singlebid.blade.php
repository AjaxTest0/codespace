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

                    <div class="job_description">
                        {{$job->description}}
                    </div>
                </section>
                <section class="whole_sec">

                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-tag fa-tag-sm clok_icn"> {{$job->budget}} <br> <small class="clok_txt">Fixed price</small></i> <br>
                        </div>
                        <div class="col-sm-4">
                            <i class="far fa-calendar-minus clok_icn"> {{$job->length??NULL}} <br> <small class="clok_txt">Project Length</small></i> <br>
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
                <section class="whole_sec">
                    <label class="main_label" for="example-text-input">Activity on this job</label>
                    <div>
                        <span>
                                <span class="activiity_txt"> Proposals: <i class="fa fa-question-circle job_activity" data-toggle="popover" data-animation="true" data-placement="top" title="" data-content="This range includes relevant proposals, but does not include proposals that are withdrawn, declined, or archived. Please note that all proposals are accessible to clients on their applicants page."></i></span>
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
            <div class="col-sm-3 pt-4 cols">
                <section>
                    <button type="button" class="btn btn-rounded btn-success mb-3 pr-4 pl-4">
                        Send Purposal
                   </button>
                    <button type="button" class="btn btn-outline-success btn-rounded  js-click-ripple-enabled pr-4 pl-4 h_icon">
                        <i class="far fa-heart "></i> Save Post
                   </button>
                </section>
            </div>
        </div>
    </div>

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
