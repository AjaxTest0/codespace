
@extends('index')
   
   
   
   
   
   @section('css')
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    @endsection

    @section('content')

    <br>
    <br>
    <br>
    <br>


    <div class="begininng">
        <ol class="breadcrumb breadcrumb-alt push custom_crumb">
            <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0)">category</a>
            </li>
        </ol>

        <div class="heading_item">
            <h1>Technology & programming offers & services</h1>
            <sub>Looking for technology & programming offers and services? PeoplePerHour has you covered.</sub>
        </div>


    </div>
    <div class="container">
        <div class="input-group   ">
            <input type="text " class="form-control searc_bar" placeholder="Search.. " style="height: 60px; ">
            <div class="input-group-append search_grop ">
                <span class="input-group-text search_btn searc_bar ">
                        <i class="fa fa-fw fa-search search_icon"></i>
                </span>
            </div>
        </div>
    </div>

    <!------------------------------------------ cards sections-------------------------------------- -->
    <section>
        <div class="container mt-6">
            <h2 style="text-align: center;">Popular technology &amp; programming categories</h2>

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop img_cat" href="javascript:void(0)">
                        <div class="block-header">

                            <h1 class=" card_heading">Programming/Coding</h1>
                        </div>
                        <div class="block-content">

                        </div>
                    </a>
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
