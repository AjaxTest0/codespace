@extends('index')



     @section('css')
      <link rel="stylesheet" href="{{asset('css/settings.css')}}">
      <link rel="stylesheet" href="{{asset('css/billing.css')}}">
      @endsection
     {{-- -------------------------------------------------------------------------------------- --}}

      @section('content')
     <section>
        <div class="container">
           <div class="row">
              <div class="col-sm-9 form_container">
                 <div class="balance_header">
                    <div class="header_heading">
                       <strong>Your Account Balance</strong>
                    </div>
                    <div class="header_subtitle mt-2">
                       <p> When available, we use your funds and credits as your primary payment method for new orders. </p>
                    </div>
                 </div>
                 <div class="block-content">
                    <table class="table table-vcenter">
                       <thead class="thead-light">
                          <tr>
                             <th>Fiver Balance </th>
                             <th class="text-center" style="width: 139px;;">Total $0.00</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td class="font-w600 font-size-sm">
                                Your Earnings
                             </td>
                             <td class="d-sm-table-cell">
                                <span class="ml-4">$0.00</span>
                             </td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
                 <div class="balance_header">
                    <div class="header_heading">
                       <strong>Your Card Details</strong>
                    </div>
                 </div>
                 <div class="block-content">
                    <table class="table table-vcenter">
                       <thead class="thead-light">
                          <tr>
                             <th>Card Name </th>
                             <th class="text-center" style="width: 139px;;">Card Number</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td class="font-w600 font-size-sm">
                                <img src="https://dwglogo.com/wp-content/uploads/2016/08/Visa-logo-02.png" class="img_card" alt="">
                             </td>
                             <td class="d-sm-table-cell card_nu">
                                <span class="ml-4">**** **** 4242</span>
                             </td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
                 <div class="billing_form">
                    <label for="">Invoices</label> <i class="fa fa-question-circle " data-toggle="tooltip" data-placement="right" title="Go to the Detalls section of an order to save a PDF of your invoice. "></i>
                    <div>
                       <span>  <input type="checkbox" id="invoice_check"> &nbsp; Yes, email my billing info and original invoices.</span>
                    </div>
                 </div>
                 <div class="form-group billing_form" id="invoice_email">
                    <label for="example-email-input ">Email</label>
                    <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="abc****@example.com">
                    <button type="button" class="btn btn-success float-right mb-2 mt-3" >Success</button>

                 </div>
              </div>
           </div>

        </div>
     </section>
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
                       proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
                    </p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst
                       proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
                    </p>
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

     {{-- -------------------------------------------------------------------------------------- --}}
@section('js')
<script>
    $(document).ready(function() {
        $('.dropdown-submenu a.test').on("click", function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
    $(document).ready(function() {
        $('#invoice_check').click(function() {
            if ($(this).prop("checked") == true) {
                $("#invoice_email").css("display", "block");
            } else if ($(this).prop("checked") == false) {
                $("#invoice_email").css("display", "none");
            }
        });
    });
 </script>
@endsection

