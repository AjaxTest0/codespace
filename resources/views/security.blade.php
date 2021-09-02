@extends('index')
  
  
@section('css')
  
  

  <link rel="stylesheet" href="{{asset('css/settings.css')}}">

  @endsection

  @section('content')

    <section>
        <div class="container">

            <div class="row">

               
                <form class="js-validation col-sm-12 form_container" action="be_forms_validation.html" method="POST">

                    <div class="form-my-profile-link mt-4 mb-3">
                        <label class="">CHANGE PASSWORD </label>
                    </div>
                    <div class="form-group">
                        <label for="val-password">Current Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control w-75" id="val-password">
                    </div>
                    <div class="form-group">
                        <label for="val-password">New Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control w-75" id="val-password" name="val-password" placeholder="Choose a safe one..">
                    </div>
                    <div class="form-group">
                        <label for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control w-75" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                    </div>


                    <div>
                        <button type="button" class="btn btn-success  mt-3 mb-3 ">Save Changes</button>
                    </div>
                </form>



            </div>

        </div>

    </section>


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

    
    <script src="{{asset('js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery-validation/additional-methods.js')}}"></script>



    <script>
        jQuery(function() {
            One.helpers('select2');
        });
    </script>

    <script src="{{asset('js/pages/be_forms_validation.min.js')}}"></script>

@endsection
