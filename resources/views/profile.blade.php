   
@extends('index')
   
   
@section('css')
   
   
   <title>Profile Page</title>


    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('css/singlepost.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  

    @endsection


    @section('content')


    <div class="container">
        <div class="row mt-5">
            <!------------------------- picture info--------->
            <div class="col-lg-4">
                <div class="profile_card pt-3 pb-3">
                    <span class="badge badge-pill badge-success online_success mr-2"><i class="fa fa-circle circle_dot"></i>Online</span>
                    <span class="badge badge-pill badge-warning online_warning mr-2"><i class="fa fa-circle circle_dot"></i>Away</span>
                    <br>
                    <img class="img-avatar main_avatr_img center" src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/27fd5e108186e394fffc7db1fbc86b3b-1616860101387/35c5386a-8e50-47fb-8367-e228b6cfb487.jpg">

                    <b class="seller_name">bilal2807</b>
                    <button type="button" class="btn btn-sm btn btn-link push btn_pencils" data-toggle="modal" data-target="#modal-block-edit_profile"><i class="fa fa-pencil-alt edit_pencil"></i></button>

                    <div class="container">
                        <button type="button" class="btn btn-outline-secondary btn-block mr-1 mb-3 change_mode">Preview Public Mode</button>
                    </div>
                    <hr class="ml-4 mr-4">


                    <div class="d-flex">
                        <div class="part_from bold ml-4"><i class="fa fa-map-marker-alt pr-2"></i>From</div>
                        <div class="from_country">Pakistan</div>
                    </div>
                    <div class="d-flex mt-2">
                        <div class="part_from bold ml-4"><i class="fa fa-user pr-2"></i>Member since</div>
                        <div class="from_year">Jun 2021</div>
                    </div>

                </div>
                <br>


                <!------------------------- picture info end -----------  --------->

                <!------------------------- Description--------->

                <div class="profile_card pt-3 pb-3">
                    <div class="d-flex">
                        <div class="part_from bold ml-4">Description</div>
                        <button type="button" class="btn btn-sm btn-light edit_btn_2" data-toggle="modal" data-target="#modal-block-description"><i class="fa fa-pencil-alt i_color"></i></button>
                    </div>
                    <p class="disc_profile ml-4 mt-3 mr-4">i am dedicated software engineer with expertise inn web development, specially in php, Laravel framework Front end development. I've over 1 year experience in building web application. I'm very passionate with my work and also deliver
                        quality work within time.</p>
                    <hr class="ml-4 mr-4">

                    <div class="d-flex">
                        <div class="part_from bold ml-4">Languages</div>
                        <button type="button" class="btn btn-sm btn-light edit_btn_2" data-toggle="modal" data-target="#modal-block-add_language"><i class="fa fa-plus i_color"></i></button>
                    </div>
                    <div class="ml-4 hoverss">
                        <span class="title_s">English</span>
                        <span class="title_s"> - </span>
                        <span class="title_s">Basic</span>
                    </div>

                    <hr class="ml-4 mr-4">

                    <div class="part_from bold ml-4">Linked Accounts</div><br>
                    <a class="ml-4" href="#">
                        <i class="fab fa-facebook social_icon" style="color: #3f64ab;"></i>
                        <span class="social_name">Facebook</span>
                    </a><br>
                    <a class="ml-4" href="#">
                        <i class="fab fa-google social_icon" style="color: #a12628;"></i>
                        <span class="social_name">Google</span>
                    </a><br>
                    <a class="ml-4" href="#">
                        <i class="fab fa-twitter social_icon" style="color: #3f64ab;"></i>
                        <span class="social_name">Twitter</span>
                    </a><br>
                    <a class="ml-4" href="#">
                        <i class="fab fa-github social_icon" style="color: #0e2535;"></i>
                        <span class="social_name">GitHub </span>
                    </a>


                    <hr class="ml-4 mr-4">
                    <div class="d-flex">
                        <div class="part_from bold ml-4">Skills</div>
                        <button type="button" class="btn btn-sm btn-light edit_btn_3" data-toggle="modal" data-target="#modal-block-skills"><i class="fa fa-plus i_color"></i></button>
                    </div>

                    <div class="ml-4">
                        <span class="btn-group mr-2 mb-2 mt-2" role="group" aria-label="Outline Secondary Second group">
                            <button type="button" class="btn btn-sm btn-outline-secondary btn_title">laravel framework</button>
                        </span>
                        <span class="btn-group mr-2 mb-2 mt-2" role="group" aria-label="Outline Secondary Second group">
                            <button type="button" class="btn btn-sm btn-outline-secondary btn_title">html</button>
                        </span>
                        <span class="btn-group mr-2 mb-2 mt-2" role="group" aria-label="Outline Secondary Second group">
                            <button type="button" class="btn btn-sm btn-outline-secondary btn_title">html</button>
                        </span>
                    </div>

                    <!-- education secton -->
                    <hr class="ml-4 mr-4">
                    <div class="d-flex">
                        <div class="part_from bold ml-4">Education</div>
                        <button type="button" class="btn btn-sm btn-light edit_btn_4" data-toggle="modal" data-target="#modal-block-edu_sec"><i class="fa fa-plus i_color"></i></button>
                    </div>

                    <div class="ml-4 edu">
                        <p style="margin-bottom: 0;">M.Sc. software engineering
                            <br> University of Gujrat (2017 - 2021)</p>
                    </div>

                    <!-- certification secton -->
                    <hr class="ml-4 mr-4">
                    <div class="d-flex">
                        <div class="part_from bold ml-4">Certification</div>
                        <button type="button" class="btn btn-sm btn-light edit_btn_5" data-toggle="modal" data-target="#modal-block-add_certification"><i class="fa fa-plus i_color"></i></button>
                    </div>

                    <div class="ml-4 certify">
                        <p style="margin-bottom: 0;">Web Development
                            <i class="fa fa-pencil-alt certify_edit" data-toggle="modal" data-target="#modal-block-slideright" style="visibility: hidden;"></i>
                            <i class="fa fa-trash-alt certify_edit" data-toggle="modal" data-target="#modal-block-slideright" style="visibility: hidden;"></i>
                            <br> digiskills 2020</p>
                    </div>

                </div>
                <br>
            </div>

            <!-- Card SECTION -->
            <div class="col-lg-8" style="background-color: white;">
                <div class="    ">
                    <h1 class="header_2 mb-4">
                        My GIGS
                    </h1>
                    <div class="row m-0 p-0 text-center">
                        <div class="col-lg-6 col-md-4 col-sm-12  ">


                            <div class="card mr-4 mt-4 content_card" style="width: 18rem; background-color: #fff;">
                                <img class="card-img" src="https://dw3i9sxi97owk.cloudfront.net/uploads/hourliesAttachments/2016/07/6de396061c9e12f27fae8a451667788a.jpg" alt="Card image cap">
                                <div class="card-body  ml-3 mr-1">
                                    <h5 class="card-title mt-3">Design Responsive, SEO friendly & Fast Loading WordPress website</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#"> <span class="badge badge-light">Wordpress</span> </a>
                                    <a href="#"> <span class="badge badge-light ">E-Com</span> </a>
                                    <a href="#"> <span class="badge badge-light">Logo Design</span> </a>
                                </div>

                                <div class="d-flex ml-3 mr-1" id="popover">

                                    <img class="card-img2 mt-3" src="https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/42d72d47da0fdadbaa17af4dbaeea3a3_150x150.png" alt="">
                                    <a class="ml-3" href="#">
                            <div class="mt-2 font-w600"  data-toggle="popover" data-html="true" data-placement="top" 
                            data-content="<div class='text-center'> <div><img class='img-avatar ' src='https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/42d72d47da0fdadbaa17af4dbaeea3a3_150x150.png' alt=''></div> <h3>Ana Rodriguez </h3> 
                                <p>UI/UX Design | ​​Web Design & Development | iPhone App Design | Androi...
                                    ​</p></div">
                                Ana Rodriguez</div>
                            
                            <i class="fa fa-star fa-sm star_icon" > 4.9 </i>
                            <span class="star_num">(549)</span>
                        </a>
                                    <div class="mt-2 ml-5">
                                        <h3>$100</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-12  ">


                            <div class="card mr-4 mt-4 content_card" style="width: 18rem; background-color: #fff;">
                                <img class="card-img" src="https://dw3i9sxi97owk.cloudfront.net/uploads/hourliesAttachments/2016/07/6de396061c9e12f27fae8a451667788a.jpg" alt="Card image cap">
                                <div class="card-body  ml-3 mr-1">
                                    <h5 class="card-title mt-3">Design Responsive, SEO friendly & Fast Loading WordPress website</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#"> <span class="badge badge-light">Wordpress</span> </a>
                                    <a href="#"> <span class="badge badge-light ">E-Com</span> </a>
                                    <a href="#"> <span class="badge badge-light">Logo Design</span> </a>
                                </div>

                                <div class="d-flex ml-3 mr-1" id="popover">

                                    <img class="card-img2 mt-3" src="https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/42d72d47da0fdadbaa17af4dbaeea3a3_150x150.png" alt="">
                                    <a class="ml-3" href="#">
                            <div class="mt-2 font-w600"  data-toggle="popover" data-html="true" data-placement="top" 
                            data-content="<div class='text-center'> <div><img class='img-avatar ' src='https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/42d72d47da0fdadbaa17af4dbaeea3a3_150x150.png' alt=''></div> <h3>Ana Rodriguez </h3> 
                                <p>UI/UX Design | ​​Web Design & Development | iPhone App Design | Androi...
                                    ​</p></div">
                                Ana Rodriguez</div>
                            
                            <i class="fa fa-star fa-sm star_icon" > 4.9 </i>
                            <span class="star_num">(549)</span>
                        </a>
                                    <div class="mt-2 ml-5">
                                        <h3>$100</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card SECTION End -->
        </div>
    </div>

    <!-- modal -->

    <!-- <button type="button" class="btn btn-sm btn-primary push" data-toggle="modal" data-target="#modal-block-slideright">Launch Modal</button> -->
    <!-- EDIT PROFILE -->

    <div class="modal fade" id="modal-block-edit_profile" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideright" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideright" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Edit Profile</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form>
                        <div class="block-content font-size-sm">

                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-avatar main_avatr_img center" src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/27fd5e108186e394fffc7db1fbc86b3b-1616860101387/35c5386a-8e50-47fb-8367-e228b6cfb487.jpg">
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="example-text-input">Name</label>
                                        <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Change Image</label>
                                        <div class="custom-file">
                                            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                            <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
                                            <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal"><i class="fa fa-check mr-1"></i>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- EDIT PROFILE End -->

    <!-- DEscription -->
    <div class="modal fade" id="modal-block-description" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideright" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideright" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Description</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-group mt-1">
                            <label for="example-textarea-input-alt ">Enter Description</label>
                            <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="example-textarea-input-alt" rows="7" placeholder="Textarea content.."></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary mr-2 mb-2" data-dismiss="modal" style="float: right;"><i class="fa fa-check mr-1"></i>Save</button>

                </div>
            </div>
        </div>
    </div>
    <!-- DEscription End-->

    <!-- Language -->
    <div class="modal fade" id="modal-block-add_language" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideright" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideright" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Select Language</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-group">
                            <div>
                                <label for="">Edit Language</label>
                                <div class="lang_edit_area">
                                    <span class="title_s ">English</span>
                                    <span class="title_s"> - </span>
                                    <span class="title_s">Basic</span>
                                    <button type="button" class="btn btn-sm btn-outline-danger lng_edit">
                                        <i class="fa fa-fw fa-trash "></i> 
                                    </button>
                                </div>

                            </div>
                            <hr>
                            <label for="">Add Language </label>
                            <select class="custom-select mt-2" id="example-select-custom" name="example-select-custom">
                            <option value="0">Please select</option>
                            <option value="1">English</option>
                            <option value="2">pashto</option>
                            <option value="3">Urdu</option>
                            <option value="4">Urdu</option>
                            <option value="5">Urdu</option>
                            <option value="6">Urdu</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>language Level</label>
                            <select class="custom-select" id="example-select-custom" name="example-select-custom">
                            <option value="0">Please select</option>
                            <option value="1">Expert</option>
                            <option value="2">inter</option>
                            <option value="3">native</option>
                        </select>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary mr-2 mb-2" data-dismiss="modal" style="float: right;"><i class="fa fa-check mr-1"></i>Save</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Language End -->

    <!-- skills -->
    <div class="modal fade" id="modal-block-skills" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideright" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideright" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Select Skills</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-group">
                            <div>
                                <label for="">Edit Skills</label>
                                <div class="skill_edit_area">
                                    <span class="title_s ">PHP</span>
                                    <button type="button" class="btn btn-sm btn-outline-danger skill_edit">
                                        <i class="fa fa-fw fa-trash "></i> 
                                    </button>
                                </div>

                            </div>
                            <hr>
                            <label for="">Add Skill </label>
                            <select class="custom-select mt-2" id="example-select-custom" name="example-select-custom">
                            <option value="0">Please select</option>
                            <option value="1">Laravell</option>
                            <option value="2">Html</option>
                            <option value="3">JS</option>
                            <option value="4">JAVA</option>
                            <option value="5">React</option>
                            <option value="6">Node JS</option>
                            <option value="7">PHP</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary mr-2 mb-2" data-dismiss="modal" style="float: right;"><i class="fa fa-check mr-1"></i>Save</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Skills End -->

    <!-- Education -->
    <div class="modal fade" id="modal-block-edu_sec" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideright" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideright" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Education Level</h3>

                    </div>
                    <div class="container">
                        <div class="form-group">
                            <label for="">Education </label>
                            <select class="custom-select mt-2" id="example-select-custom" name="example-select-custom">
                            <option value="0">Please select</option>
                            <option value="1">BSSE</option>
                            <option value="2">BSIT</option>
                            <option value="3">BSCS</option>
                            <option value="4">JAVA</option>
                            <option value="5">React</option>
                            <option value="6">Node JS</option>
                            <option value="7">PHP</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>From</label>
                            <select class="custom-select" id="example-select-custom" name="example-select-custom">
                            <option value="0">Please select</option>
                            <option value="1">UET</option>
                            <option value="2">UOL</option>
                            <option value="3">UOG</option>
                        </select>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary mr-2 mb-2" data-dismiss="modal" style="float: right;"><i class="fa fa-check mr-1"></i>Save</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Education End -->

    <!-- Certification -->
    <div class="modal fade" id="modal-block-add_certification" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideright" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideright" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Certification</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-group">
                            <div>
                                <label for="">Edit</label>
                                <div class="lang_edit_area">
                                    <span class="title_s ">Web Development </span>
                                    <button type="button" class="btn btn-sm btn-outline-danger lng_edit">
                                        <i class="fa fa-fw fa-trash "></i> 
                                    </button>
                                </div>

                            </div>
                            <hr>
                            <label for="">Add Language </label>
                            <select class="custom-select mt-2" id="example-select-custom" name="example-select-custom">
                            <option value="0">Please select</option>
                            <option value="1">Web development</option>
                            <option value="2">Digiskills</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                        </div>

                    </div>
                    <button type="button" class="btn btn-sm btn-primary mr-2 mb-2" data-dismiss="modal" style="float: right;"><i class="fa fa-check mr-1"></i>Save</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Certification End -->
    @endsection


    @section('js')


    <script>
        jQuery(function() {
            One.helpers('slick');
        });

        //for hover on language
        $(".lang_edit_area").on({
            mouseenter: function() {
                $(".lng_edit").css("visibility", "visible");
            },
            mouseleave: function() {
                $(".lng_edit").css("visibility", "hidden");
            }
        });



        //for edit edu on skills
        $(".skill_edit_area").on({
            mouseenter: function() {
                $(".skill_edit").css("visibility", "visible");
            },
            mouseleave: function() {
                $(".skill_edit").css("visibility", "hidden");
            }
        });
    </script>
@endsection