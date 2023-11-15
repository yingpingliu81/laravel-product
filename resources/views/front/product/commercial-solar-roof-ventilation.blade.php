@extends('layouts.app')

@section('title', 'Commercial Solar Roof Ventilation Fan | Ventilation Fan - SolarKing')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')
@section('style')
    @parent
    @if($product->thumb)
        <meta property="og_image" content="{{url($product->thumb)}}" />
    @endif
@endsection
@section('og_type', "product" )
@section('google')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HWT1R6CNV4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){window.dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HWT1R6CNV4');
    </script>


@endsection
@section('content')
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "167954660436659");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="section-head" >
        <div class="container">
            <h2 class="left">Commercial Solar Roof</h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Description</a></h5>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div id="carouselExampleFade" class="carousel product-gallery carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($product->images as $ind => $image)
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="{{$ind}}" class="{{!$ind ? "active" : ""}}" aria-current="{{!$ind ? "true" : ""}}" aria-label="Slide {{$ind + 1}}"></button>
                            @endforeach

                        </div>
                        <h3 class="product-slide-head">{{$product->title}}</h3>
                        <div class="carousel-inner">
                            @foreach($product->images as $ind => $image)
                            <div class="carousel-item {{!$ind ? "active" : ""}}"> <img class="d-block " src="{{url($image)}}" alt="{{$product->title}}"> </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-sm-4 product-overview">
                    <h3 class=" mb-4">overview</h3>
                    <div class="overview-item "><span ><i class="fa fa-star-o  c-main ">&nbsp;</i> <em>SKU</em></span> <span >{{$product->sku}}</span>                            </div>

                    <div class="overview-item "><span ><i class="fa fa-money c-main ">&nbsp;</i> <em>RRP</em></span> <span >{{$product->price}}</span>                            </div>

                    <div class="overview-item "><span ><i class="fa fa-file-pdf-o c-main ">&nbsp;</i> <em>Model</em></span> 600MM SRVF                           </div>
                    <div class="mt-5">{!! $product->intro !!}</div>
                </div>
            </div>
            <div class="row">
                <div class="product-detail">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" href="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>


                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="resources-tab" data-bs-toggle="tab" data-bs-target="#resources" href="#resources"  type="button" role="tab" aria-controls="resources" aria-selected="true">Resources</a>
                        </li>

                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="desc">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Features</span></h2>

                                    <div class="feature">
                                        {!! $product->feature !!}

                                    </div>
                                </div>

                                <div class="row">
                                    <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Specifications</span></h2>

                                    <div class="specifications">
                                        {!! $product->specification !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Package</span></h2>

                                    <div class="feature">
                                        {!! $product->package !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="resources" role="tabpanel" aria-labelledby="resources-tab">
                            <div class="specifications">
                                <ul class="time-list">
                                    @foreach($product->downloads ?? []  as $download)
                                    <li class="time-item ">
                                        <div class="name"><a title="Commercial Solar Roof Ventilation Fan" target="_blank" href="{{url($download)}}">PDF Download <span class="fa fa-download"></span></a>                                            </div>
                                        <div class="date">{{basename($download,'.pdf')}}</div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            @include('front.contact.part_contact')
        </div>
    </div>

@endsection
@section('javascript')
    <script src="{{url('/assets/js/core/jquery.min.js')}}"></script>
    <script type = "text/javascript">
        dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
        dataLayer.push({
            event    : "view_item",
            ecommerce: {
                items: [{
                    item_name     : "{{$product->title}}", // Name or ID is required.
                    item_id       : "{{$product->sku}}",
                    price         : "{{$product->price ?? ""}}",
                    item_brand    : "Solarking",
                    item_category : "{{data_get($product, 'cates.0.title', '')}}",
                    index         : 0,  // If associated with a list selection.
                }]
            }
        });
    </script>
@endsection
