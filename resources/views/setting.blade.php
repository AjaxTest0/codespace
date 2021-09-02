@extends('index')


@section('css')




<link rel="stylesheet" href="{{asset('css/settings.css')}}">
@endsection

@section('content')

    <section>
        <div class="container">

            <div class="row">

             

                <div class="col-sm-9 form_container">
                    <div class="form-my-profile-link float-right mt-3">
                        <label class="">Need to update your public profile? </label><a href="" class="green_color"> Go to My Profile</a>
                    </div>
                    <hr class="mt-6 w-75" style="clear:both">

                    <div class="row">
                        <div class="col-sm-3">
                            <label>Full Name</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input_fields">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-3">
                            <label>Email</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="input_fields" placeholder="y******@***.com">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-3">
                            <span>ONLINE STATUS  <i class="fa fa-circle circle_dot" ></i></span>
                        </div>
                        <div class="col-sm-9">
                            <select class="custom-select" id="example-select-custom" name="example-select-custom">
                                <option value="0">Go Offline For</option>
                                <option >1 Day</option>
                                <option >1 Week</option>
                                <option >1 Month</option>
                                <option >Forever</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success float-right mt-3 ">Save Changes</button>

                    </div>

                    <hr class="mt-6 w-75" style="clear:both">

                    <div class="row">
                        <div class="col-sm-4">
                            <label> ACCOUNT DEACTIVATION</label>
                        </div>
                        <div class="col-sm-8">
                            <p class="mb-0">
                                What happens when you deactivate your account?</p>
                            <ul>
                                <li>Your profile and Gigs won't be shown on Fiverr anymore.<i class="fa fa-question-circle " data-toggle="tooltip" data-placement="right" title="people who will try to view your profile will get an unavailable page massege"></i></li>
                                <li>Active orders will be cancelled.<i class="fa fa-question-circle " data-toggle="tooltip" data-placement="right" title="Not including delievered order"></i> </li>
                                <li>You won't be able to re-activate your Gigs.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mt-4">
                            <label>I'm leaving because... </label>
                        </div>
                        <div class="col-sm-9 mt-4">
                            <select class="custom-select" id="example-select-custom" name="example-select-custom">
                                <option value="0">Choose a reason</option>
                                <option value="" disabled class="bold_tag">Account </option>

                                <option value=""> 
                                    Unsubscribe from Fiverr emails
                                </option>
                                <option value="">  want to change my username</option>
                                   
                                <option value=""> have another Fiverr accoun</option>
                                    
                                
                                <option value="" disabled class="bold_tag"> Selling</option>
                                 <option>Not getting enough orders</option>
                                 <option>Negative experience with buyer/s</option>
                                 <option>I get too many orders</option>
                                 <option>Fiverr is complicated or hard to use</option>
                                 <option>I'm unhappy with Fiverr's policies</option>
                                 <option>Other</option>

                                 <option value=""  disabled class="bold_tag"> Buying</option>
                                 <option>I can't find what I need on Fiverr</option>
                                 <option>Fiverr is complicated or hard to use</option>
                                 <option>Negative experience with seller/s</option>
                                 <option>I'm unhappy with Fiverr's policies</option>
                                 <option>Other</option>

                                 <option value="" class="bold_tag"> Something Else!</option>
                            </select>

                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary float-right mt-5 mb-5 ">Deactivate Account</button>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- modal -->

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

    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>
@endsection
