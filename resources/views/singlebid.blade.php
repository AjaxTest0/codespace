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
                    <strong style="margin: 0;">Lead generation specialist needed for Services company</strong>
                </section>
                <!-- Describe section -->
                <section class="whole_sec">

                    <button type="button" class="btn btn-link mt-3 link_btn">Lead Generation</button>

                    <div class=" ml-3 time_ago">
                        <span class="time_ago1" data-toggle="tooltip" data-animation="true" data-placement="bottom" title="" data-original-title="July 9, 2021">posted 
                                    <span> 1 hour ago</span>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-map-marker-alt zone_icon">  Worldwide </i>
                    </div>
                </section>
                <section class="whole_sec">

                    <div class="job_description">
                        A Startup Software Development Company based in Pakistan. We offer Freelance Software Developers, Designers, and QA Engineers to all sized companies across the world. We help our clients build their offshore tech team, so they can focus on building their
                        product. We offer full-time, part-time, and contractual freelance services to our clients. Our service also includes Website design and development, Mobile application development, Cyber Security, DevOps and Database Management.
                        <br><br> About the Role: <br><br> We are immediately looking for a Digital Marketing Expert to join our fast-growing team to assist in various stages of client handling, creating new business initiatives, generating leads, and
                        handling digital marketing campaigns for small to medium size businesses along with any other startup companies. You will be working directly with the CEO and COO. <br><br> Responsibilities: <br><br> - Research and generate lists
                        of potential Small to Midsize Businesses.. <br> - Create, Coordinate and Manage Digital marketing Campaigns. <br> - Write exceptional marketing email to reach out to new clients <br> - Help develop client relationships and retain
                        existing accounts. <br><br> Requirements: <br><br>- 2+ years of experience as a digital marketing expert <br>- Has a very good understanding of the Software Development Industry. <br> - Possesses skills in writing, presentation,
                        interpersonal relations, and customer management
                    </div>
                </section>
                <section class="whole_sec">

                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-tag fa-tag-sm clok_icn"> $100 <br> <small class="clok_txt">Fixed price</small></i> <br>
                        </div>
                        <div class="col-sm-4">
                            <i class="far fa-calendar-minus clok_icn"> 1 to 3 months <br> <small class="clok_txt">Project Length</small></i> <br>
                        </div>
                        <div class="col-sm-4">
                            <i class="fa fa-cubes clok_icn">  Intermediate <br>  <small class="clok_txt"> looking for a mix of <br><small class="clok_txt">  experience and value</small></small></i>
                        </div>
                       
                    </div>

                </section>
               
                <section class="whole_sec">
                    <label class="main_label" for="example-text-input">Skills and Expertise</label>
                    <div class="badges mt-2 mb-3">
                        <span class="badge badge-pill badge-light border">Web Apllication</span>
                        <span class="badge badge-pill badge-light border">Laravel Apllication</span>
                        <span class="badge badge-pill badge-light border">Web HTML</span>
                    </div>


                </section>
                <section class="whole_sec">
                    <label class="main_label" for="example-text-input">Activity on this job</label>
                    <div>
                        <span>
                                <span class="activiity_txt"> Proposals: <i class="fa fa-question-circle job_activity" data-toggle="popover" data-animation="true" data-placement="top" title="" data-content="This range includes relevant proposals, but does not include proposals that are withdrawn, declined, or archived. Please note that all proposals are accessible to clients on their applicants page."></i></span>
                        <small class="activiity_txt">Less than 5</small>
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
                        Post Your Job Now
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
