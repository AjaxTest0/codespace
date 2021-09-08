
@extends('index')


@section('css')


    <link rel="stylesheet" href="{{asset('css/buyerrequest.css')}}">




@endsection


@section('content')


    <div class="container-fluid bg-white" >
        <section class="whole_sec">
            <h1 style="margin: 0;">Describe your job post</h1>
        </section>
        <form action="{{ route('create_job') }}" method="post">
            <!-- Describe section -->
            @csrf
            <section class="whole_sec">
                <div class="form-group ">
                    <label for="example-text-input" class="main_label">Headline</label>
                    <p class="main_para">This helps your job post stand out to the right candidates. It’s the first thing they’ll see, so make it count!</p>
                    <input type="text" class="form-control form-control-lg w-75" id="example-text-input" name="headline" required>
                </div>
            </section>
            <!-- Describe section End -->

            <!-- file upload section -->
            <section class="whole_sec">
                <div class="form-group ">
                    <label for="example-text-input" class="main_label">Describe your job</label>
                    <p class="main_para">This is how talent figures out what you need and why you’re great to work with!</p>
                    <textarea class="form-control w-75" id="example-textarea-input" name="description" rows="4" placeholder="Already have a job description. Paste it here!" required></textarea>
                    <div class="mt-3">
                        <label for="example-text-input" class="main_label"><i class="fa fa-paperclip "></i>Attach File</label>
                        <input type="file" name="file">
                    </div>
                </div>
            </section>
            <!-- file upload section End -->

            <!-- skills section -->
            <section class="whole_sec">
                <div class="form-group w-75">
                    <label for="example-text-input" class="main_label">Skills</label>

                    <select class="js-select2 form-control " id="example-select2-multiple" name="skill[]" style="width: 100%;" data-placeholder="Choose Skills" multiple required>
                        <option></option>
                        <option value="HTML">HTML</option>
                        <option value="CSS" >CSS</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="PHP">PHP</option>
                        <option value="Ruby">Ruby</option>
                        <option value="Angular">Angular</option>
                        <option value="React">React</option>
                        <option value="Vue.js">Vue.js</option>
                    </select>


                </div>
            </section>
            <!-- skills section End -->

            <!-- category section -->
            <section class="whole_sec">
                <label for="example-text-input" class="main_label">Category</label>

                <div class="row w-75 mt-3">
                    <div class="col-sm-6 main_col">
                        <div class="form-group">
                            <select class="custom-select" id="main_cat" name="category" required>
                                <option value="" selected disabled>Please select</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Mobile Development">Mobile Development</option>
                                <option value="Software Development">Software Development</option>
                                <option value="IT & Networking">IT & Networking</option>
                            </select>
                        </div>
                    </div>
                </div>

            </section>
            <!-- category section End -->

            <!-- Scope section -->
            <section class="whole_sec">
                <label for="example-text-input" class="main_label">Scope</label>
                <!-- project size -->
                <div class="form-group">

                    <div class="custom-control custom-radio custom-control-primary mb-1">
                        <input type="radio" class="custom-control-input scope_radio large_rad" id="example-radio-custom1" name="scope" value="large">
                        <label class="custom-control-label" for="example-radio-custom1">Large
                            <div>
                                <small>Longer term or complex initiatives (ex. design and build a full website) </small>
                            </div>
                        </label>
                    </div>

                    <div class="custom-control custom-radio custom-control-primary mb-1">
                        <input type="radio" class="custom-control-input scope_radio medium_rad" id="example-radio-custom2" name="scope" value="medium">
                        <label class="custom-control-label" for="example-radio-custom2">Medium
                            <div>
                                <small>Well-defined projects (ex. a landing page) </small>
                            </div>
                        </label> 
                    </div>

                    <div class="custom-control custom-radio custom-control-primary mb-1">
                        <input type="radio" class="custom-control-input scope_radio small_rad" id="example-radio-custom3" name="scope" value="small">
                        <label class="custom-control-label" for="example-radio-custom3">Small
                            <div>
                                <small>Quick and straightforward tasks (ex. update text and images on a webpage) </small>
                            </div>
                        </label>
                    </div>
                </div>
                <!-- project size End -->

                <!-- Project Duration -->
                <div class="form-group project_rad " style="display: none;">
                    <label class="d-block">How long will your work take?</label>
                    <div class="custom-control custom-radio  custom-control-primary proj_large" style="display: none;" id="">
                        <input type="radio" class="custom-control-input project_rad_in project_large " id="example-radio-custom-inline0" name="length">
                        <label class="custom-control-label" for="example-radio-custom-inline0">6 to 9 months</label>
                    </div>
                    <div class="custom-control custom-radio  custom-control-primary proj_large" style="display: none;" id="">
                        <input type="radio" class="custom-control-input project_rad_in project_large " id="example-radio-custom-inline0" name="length">
                        <label class="custom-control-label" for="example-radio-custom-inline0">6 to 9 months</label>
                    </div>
                    <div class="custom-control custom-radio  custom-control-primary proj_large" style="display: none;" id="">
                        <input type="radio" class="custom-control-input project_rad_in project_large " id="example-radio-custom-inline0" name="length">
                        <label class="custom-control-label" for="example-radio-custom-inline0">6 to 9 months</label>
                    </div>

                    <div class="custom-control custom-radio  custom-control-primary">
                        <input type="radio" class="custom-control-input proj_med " id="example-radio-custom-inline1" name="length">
                        <label class="custom-control-label" for="example-radio-custom-inline1">3 to 6 months</label>
                    </div>
                    <div class="custom-control custom-radio  custom-control-primary">
                        <input type="radio" class="custom-control-input proj_med " id="example-radio-custom-inline1" name="length">
                        <label class="custom-control-label" for="example-radio-custom-inline1">3 to 6 months</label>
                    </div>
                    <div class="custom-control custom-radio  custom-control-primary">
                        <input type="radio" class="custom-control-input proj_med " id="example-radio-custom-inline1" name="length">
                        <label class="custom-control-label" for="example-radio-custom-inline1">3 to 6 months</label>
                    </div>
                    <div class="custom-control custom-radio  custom-control-primary">
                        <input type="radio" class="custom-control-input project_rad_in" id="example-radio-custom-inline2" name="length">
                        <label class="custom-control-label" for="example-radio-custom-inline2"> 1 to 3 months</label>
                    </div>
                    <div class="custom-control custom-radio  custom-control-primary">
                        <input type="radio" class="custom-control-input project_rad_in" id="example-radio-custom-inline3" name="length">
                        <label class="custom-control-label" for="example-radio-custom-inline3">Less than 1 month</label>
                    </div>

                </div>
                <!-- Project Duration End -->

            </section>
            <!-- Scope section End -->

            <!-- budget section -->
          




            <!-- project base -->
            <section class="whole_sec" id="project_rate">

                <div class="row">
                    <div class="col-sm-12">
                        <label for="example-text-input" class="main_label">Maximum project budget (USD)</label>
                        <div class="d-flex">
                            <div class="input-group-text">$</div>

                            <input type="number" class="form-control form-control-lg budget_range " id="example-text-input" name="budget" placeholder="0">
                        </div>
                        <small>You will have the option to create milestones which divide your project into manageable phases. </small>
                    </div>

                </div>

            </section>
            <!-- project base End-->

            <section class="whole_sec">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- <button type="button" class="btn btn-link mt-3 link_btn">Save as Draft</button> -->
                    </div>
                    <div class="col-sm-6 ">
                        <button type="submit" class="btn btn-lg btn-rounded btn-success mr-1 float-right mb-5 ">
                            Post Your Job Now
                       </button>
                    </div>
                </div>





            </section>
        </form>
    </div>


@endsection



    @section('js')


    <script>
        $(document).ready(function() {
            $('#main_cat').change(function() {
                var selectedValue = $(this).val();
                if (selectedValue != "") {
                    $("#special_cat").css("display", "block");
                }
            });

            // project scope
            $('.scope_radio').change(function() {
                var project_size = $(this).val();
                if (project_size == "on") {
                    $(".project_rad").css("display", "block");
                }
            });

            // project duration
            $('.project_rad_in').change(function() {
                var project_duration = $(this).val();
                if (project_duration == "on") {
                    $(".experience_level").css("display", "block");
                }
            });
            // large validation
            $('.large_rad').change(function() {

                large_rad = $(this).val();
                if ($(this).is(':checked')) {
                    console.log("yes");
                    $(".proj_large").css("display", "block");
                }
                else{
                    $(".proj_med").css("display", "none");
                }
            });

            // console.log(large_rad);
            $('.medium_rad').change(function() {
                var small_rad = $(this).val();
                if ($(this).is(':checked')) {
                    console.log("yes");
                    $(".proj_large").css("display", "none");
                    $(".proj_med").css("display", "block");
                }

            });
            $('.small_rad').change(function() {
                var small_rad = $(this).val();
                if ($(this).is(':checked')) {
                    console.log("yes");
                    $(".proj_large").css("display", "none");
                    $(".proj_med").css("display", "none");

                }

            });


            $('.hour_btn2').change(function() {

                hour_btn2 = $(this).val();
                if ($(this).is(':checked')) {
                    console.log("yes");
                    $("#hour_rate").css("display", "none");
                    $("#project_rate").css("display", "block");

                }
            });



        });
    </script>
    <script>
        jQuery(function() {
            One.helpers(['select2']);
        });
    </script>
@endsection
