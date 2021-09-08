@extends('index')
  
  
@section('css')
  
  
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    @endsection

    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="heading">
                    Make bright ideas happen
                </h1>
                <p class="paragraph_header">Find the best freelancers to deliver your&nbsp;projects</p>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="block">
                    <!-- <div class="block-header">
                    <h3 class="block-title">Dots</h3>
                </div> -->
                    <div class="js-slider" data-dots="true">
                        <div>
                            <img class="img-fluid" src="https://dw3i9sxi97owk.cloudfront.net/homepageRevampA3/HeroImage/instance-2/hero-instance-2--desktop.webp" alt="">
                        </div>
                        <div>
                            <img class="img-fluid" src="https://dw3i9sxi97owk.cloudfront.net/homepageRevampA3/HeroImage/instance-2/hero-instance-2--desktop.webp" alt="">
                        </div>
                        <div>
                            <img class="img-fluid" src="https://dw3i9sxi97owk.cloudfront.net/homepageRevampA3/HeroImage/instance-2/hero-instance-2--desktop.webp" alt="">
                        </div>
                    </div>
                    <!-- END Slider with dots -->
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <!-- Slider with Multiple Slides/Avatars -->
                <div class="block">
                    <div class="block-header">
                        <h4 class=" slider_title">
                            Most popular categories
                        </h4>
                    </div>
                    <div class="block-content">
                        <div class="js-slider text-center" data-autoplay="true" data-dots="true" data-arrows="true" data-slides-to-show="3">
                            <div class="py-3">
                                <img class="img-avatar" src="https://dw3i9sxi97owk.cloudfront.net/homepage/categories/design/logo-design@1x.jpg" alt="">
                                <div class="mt-2 font-w600">Content Writing</div>
                                <div class="font-size-sm text-muted">enage your community</div>
                            </div>
                            <div class="py-3">
                                <img class="img-avatar" src="https://dw3i9sxi97owk.cloudfront.net/homepage/categories/digitalMarketing/seo@1x.jpg" alt="">
                                <div class="mt-2 font-w600">SEO</div>
                                <div class="font-size-sm text-muted">Boost your traffic</div>
                            </div>
                            <div class="py-3">
                                <img class="img-avatar" src="https://dw3i9sxi97owk.cloudfront.net/homepage/categories/technologyProgramming/website-development@1x.jpg" alt="">
                                <div class="mt-2 font-w600">Web development</div>
                                <div class="font-size-sm text-muted">Build your site</div>
                            </div>
                            <div class="py-3">
                                <img class="img-avatar" src="https://dw3i9sxi97owk.cloudfront.net/homepage/categories/writingTranslation/content-writing@1x.jpg" alt="">
                                <div class="mt-2 font-w600">Logo design</div>
                                <div class="font-size-sm text-muted">Elevate your brand</div>
                            </div>
                            <div class="py-3">
                                <img class="img-avatar" src="https://dw3i9sxi97owk.cloudfront.net/homepage/categories/musicAudio/voice-over@1x.jpg" alt="">
                                <div class="mt-2 font-w600">voice over</div>
                                <div class="font-size-sm text-muted">Tell your story</div>
                            </div>
                            <div class="py-3">
                                <img class="img-avatar" src="https://dw3i9sxi97owk.cloudfront.net/homepage/categories/design/illustration-drawing@1x.jpg" alt="">
                                <div class="mt-2 font-w600">illustration and design</div>
                                <div class="font-size-sm text-muted">picture your idea</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Slider with Multiple Slides/Avatars -->

                <button type="button" class="btn btn-sm btn-light mr-1 mb-3 cat_btn">
                All Categories<i class="fa fa-long-arrow-alt-right  ml-1"></i>
            </button>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="starting_header mb-4">
                    Getting work done has never been easier
                </h1>
                <div class="d-flex">
                    <i class="fa fa-check  check_btn mr-4 mt-1"> </i>
                    <p>Get matched with expert freelancers in minutes</p>
                </div>
                <div class="d-flex">
                    <i class="fa fa-check  check_btn mr-4 mt-1"> </i>
                    <p>Dedicated 24/7 customer service team</p>
                </div>
                <div class="d-flex">
                    <i class="fa fa-check  check_btn mr-4 mt-1"> </i>
                    <p>Money back guarantee and anti-fraud protection</p>
                </div>
                <a href="{{route('register')}}" type="button" class="btn btn-lg btn-danger mr-1 mb-3">
                         Start Now For Free
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/collage-work--desktop.jpg" class="img_big" alt="get-started" loading="lazy" width="648" height="330">
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-header">
                        <i class="fa fa-quote-left fa-2x " style="color: #B92528;"></i>
                    </div>
                    <div class="block-content">
                        <p>We have built a network of trusted freelancers we can depend on when we need something done.</p>
                    </div>
                    <div class="d-flex">
                        <img class="img-avatar ml-2" src="https://dw3i9sxi97owk.cloudfront.net/homepage/user_stories/santamaria/santamaria-avatar_96x96.webp" alt="">
                        <div class="ml-3">
                            <div class="mt-2 font-w600 ">Ana Rodriguez</div>
                            <div class="font-size-sm text-muted">Santamaria Shirtmakers</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-header">
                        <i class="fa fa-quote-left fa-2x " style="color: #B92528;"></i>
                    </div>
                    <div class="block-content">
                        <p>The ease of communication and security provided make the process of outsourcing effortless.</p>
                    </div>
                    <div class="d-flex">
                        <img class="img-avatar ml-2" src="https://dw3i9sxi97owk.cloudfront.net/homepage/user_stories/scandikitchen/scandikitchen-avatar_96x96.webp" alt="">
                        <div class="ml-3">
                            <div class="mt-2 font-w600 ">Ana Rodriguez</div>
                            <div class="font-size-sm text-muted">ScandiKitchen</div>
                        </div>
                    </div>

                </a>
            </div>


        </div>
    </div>


    <!-- -------------------------------cards sections trending offers---------------------- -->
<!--     <section class="mt-5 pb-4" style="background-color: rgb(248, 251, 252);">
        <div class="container">
            <h1 class="header_2 mb-4">
                Trending offers
            </h1>
            <div class="header_paragraph">Browse and buy ready-prepared, fixed priced work from freelancers</div>

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12  ">


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
                <div class="col-lg-4 col-md-4 col-sm-12  ">


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
                <div class="col-lg-4 col-md-4 col-sm-12  ">


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
                <button type="button" class="btn btn-md btn-light mr-1 mb-3 mt-3 cat_btn">
            ALL OFFERS<i class="fa fa-long-arrow-alt-right  ml-1"></i>
        </button>
            </div>
        </div>
    </section> -->




    <!-- -------------------------------cards sections expert freelancers---------------------- -->
<!--     <section class="mt-5 pb-4" style="background-color: rgb(248, 251, 252);">
        <div class="container">
            <h1 class="header_2 mb-4">
                Trending offers
            </h1>
            <div class="header_paragraph">Browse and buy ready-prepared, fixed priced work from freelancers</div>

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12  ">
                    <div class="card mr-4 mt-4 content_card" style="width: 18rem; background-color: #fff;">
                        <img class="img-avatar img_expert" src="https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/50adb42c3855d6a54e6efe8ab7491385_150x150.jpg" alt="Maria">

                        <div class="card-body  ml-3 mr-1  ">
                            <h5 class="card-title mt-3 expert_name">Maria H.</h5>
                            <p class="card-text expert_text">Experienced Team of Graphic Designers, Web Developers, Content Writers and...</p>
                            <p class="exper_country">Sheffield, United Kingdom</p>
                            <p class="expert_language">English speaking</p>
                            <div class="btn_stars"><i class="fa fa-star fa-sm star_icon"> 4.9 </i>
                                <span class="star_num">(549)</span></div>



                            <div class="anchor_badge">
                                <a href="#"> <span class="badge badge-light">Wordpress</span> </a>
                                <a href="#"> <span class="badge badge-light ">E-Com</span> </a>
                                <a href="#"> <span class="badge badge-light">Logo Design</span> </a>
                            </div>
                            <div class="d-flex mt-2">
                                <div class="proj_count ">6,612 projects</div>
                                <div class="proj_money"> <b>$35</b>/hr </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-md-4 col-sm-12  ">
                    <div class="card mr-4 mt-4 content_card" style="width: 18rem; background-color: #fff;">
                        <img class="img-avatar img_expert" src="https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/50adb42c3855d6a54e6efe8ab7491385_150x150.jpg" alt="Maria">

                        <div class="card-body  ml-3 mr-1  ">
                            <h5 class="card-title mt-3 expert_name">Maria H.</h5>
                            <p class="card-text expert_text">Experienced Team of Graphic Designers, Web Developers, Content Writers and...</p>
                            <p class="exper_country">Sheffield, United Kingdom</p>
                            <p class="expert_language">English speaking</p>
                            <div class="btn_stars"><i class="fa fa-star fa-sm star_icon"> 4.9 </i>
                                <span class="star_num">(549)</span></div>



                            <div class="anchor_badge">
                                <a href="#"> <span class="badge badge-light">Wordpress</span> </a>
                                <a href="#"> <span class="badge badge-light ">E-Com</span> </a>
                                <a href="#"> <span class="badge badge-light">Logo Design</span> </a>
                            </div>
                            <div class="d-flex mt-2">
                                <div class="proj_count ">6,612 projects</div>
                                <div class="proj_money"> <b>$35</b>/hr </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-md-4 col-sm-12  ">
                    <div class="card mr-4 mt-4 content_card" style="width: 18rem; background-color: #fff;">
                        <img class="img-avatar img_expert" src="https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/50adb42c3855d6a54e6efe8ab7491385_150x150.jpg" alt="Maria">

                        <div class="card-body  ml-3 mr-1  ">
                            <h5 class="card-title mt-3 expert_name">Maria H.</h5>
                            <p class="card-text expert_text">Experienced Team of Graphic Designers, Web Developers, Content Writers and...</p>
                            <p class="exper_country">Sheffield, United Kingdom</p>
                            <p class="expert_language">English speaking</p>
                            <div class="btn_stars"><i class="fa fa-star fa-sm star_icon"> 4.9 </i>
                                <span class="star_num">(549)</span></div>



                            <div class="anchor_badge">
                                <a href="#"> <span class="badge badge-light">Wordpress</span> </a>
                                <a href="#"> <span class="badge badge-light ">E-Com</span> </a>
                                <a href="#"> <span class="badge badge-light">Logo Design</span> </a>
                            </div>
                            <div class="d-flex mt-2">
                                <div class="proj_count ">6,612 projects</div>
                                <div class="proj_money"> <b>$35</b>/hr </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <button type="button" class="btn btn-md btn-light mr-1 mb-3 mt-3 cat_btn">
            ALL FREELANCERS<i class="fa fa-long-arrow-alt-right  ml-1"></i>
        </button>
    </section> -->



    <!-- -------------------------------Grow your bussines--------------------- -->
    <section class="mt-5 pb-4" style="background-color: rgb(248, 251, 252);">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div>
                        <h2>3 Million</h2>
                        <p>rated freelancers, covering 8,766 skills</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div>
                        <h2>150 Million</h2>
                        <p>earned by freelancers, with top freelancers earning over $7,000/m</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div>
                        <h2>10 Minutes</h2>
                        <p>to task a freelancer, with 90% of projects completed in 7 days</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 bg-dark round_corner  ">
                    <div style="padding-top: 55px;">
                        <p style="color: #fff; padding-top: 15px;">Grow your business</p>
                        <h1 class="display-4 pr-5 grow_text">Trusted globally by over 1 million businesses, small to large</h1>

                        <a href="{{route('register')}}" type="button" class="btn btn-lg btn-danger mr-1 mb-3 mt-3">
                            Start Now For Free
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12  " style=box-sizing: border-box;>

                    <img src="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/promo-business--desktop.jpg" class="img_box">

                </div>


            </div>

        </div>

        </div>

    </section>


    <!-- -------------------------------Freelancer--------------------- -->
    <section class="mt-5 pb-4" style="background-color: rgb(248, 251, 252);     padding-top: 42px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 round_corner  ">
                    <div style="padding-top: 55px;">
                        <p style="padding-top: 15px; ">Freelancers</p>

                        <h1>Embrace the freelance revolution</h1>
                        <p>There's never been a better time to take yourself online and start making money from your very own fine-tuned set of skills.</p>
                        <p>Work wherever suits you, choose full-time, part-time or flexi-time. On PeoplePerHour you remain in control of everything — including your price.</p>

                        <a href="{{route('register')}}" type="button " class="btn btn-lg btn-light mr-1 mb-3 mt-3 " style="color:#8CD9E8 ;">
                            Join As A Freelancer
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 " style=box-sizing: border-box;>

                    <img src="https://dw3i9sxi97owk.cloudfront.net/homepage/businessStats/promo-freelance--desktop.jpg " class="img_box ">

                </div>


            </div>

        </div>

        </div>

    </section>
    @endsection




    @section('js')


    <script>
        jQuery(function() {
            One.helpers('slick');
        });
    </script>
@endsection
