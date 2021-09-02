

  @extends('index')


  @section('css')

    
    
    <link rel="stylesheet" href="{{asset('css/billing.css')}}">

    @endsection

    
    @section('content')
    <section>
        <div class="container">

            <div class="row">




                <div class="col-sm-9 form_container_1">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group billing_form">
                                <label for="example-text-input">Full Name</label>
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                            </div>
                            <div class="form-group billing_form">
                                <label>Company Name</label>
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                            </div>
                            <div class="form-group billing_form">
                                <label>Country</label>
                                <select class="custom-select" id="example-select-custom" name="example-select-custom">
                                    <option value="0" selected disabled> </option>
                                    <option value="1">Pakistan</option>
                                    <option value="2"> Switzerland</option>
                                    <option value="3">Japan</option>
                                    <option value="4">Canada</option>
                                    <option value="5">Germany</option>
                                    <option value="6">United Kingdom</option>
                                    <option value="7">Sweden</option>
                                    <option value="8">Australia</option>
                                    <option value="9">United States</option>
                                    <option value="10">Norway</option>
                                </select>
                            </div>
                            <div class="form-group billing_form">
                                <label> State/Province/Territory</label>
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                            </div>
                            <div class="form-group billing_form">
                                <label>Address</label>
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Street or POB">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group billing_form">
                                        <label>City</label>
                                        <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group billing_form">
                                        <label> Postal code</label>
                                        <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                                    </div>
                                </div>
                            </div>


                            <div>
                                <button type="button" class="btn btn-success float-right mt-3 mb-4">Save Changes</button>

                            </div>
                        </div>
                    </div>




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


    <script src="{{asset('js/plugins/jquery-validation/additional-methods.js')}}"></script>
    <script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/plugins/select2/js/select2.full.min.js')}}"></script>



@section('js')

    <script>
        jQuery(function() {
            One.helpers('select2');
        });
    </script>

    <script src="assets/js/pages/be_forms_validation.min.js"></script>
    @endsection
