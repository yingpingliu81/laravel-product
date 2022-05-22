@extends('layouts.app')

@section('title', $product->title.' - Solarking')

@section('description', current(explode(".",strip_tags($product->description))))

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')

@section('style')
    @parent
    @if($product->thumb)
        <meta property="og_image" content="{{url($product->thumb)}}" />
    @endif
@endsection
@section('og_type', "product" )

@section('google')
    @parent
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
    <div class="section-head" >
        <div class="container">
            <h2 class="left">{{$product->title}}</h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url($cate_slug)}}">{{ucwords(str_replace("-"," ", $cate_slug))}}</a></h5>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('front.product.left')
                </div>
                <div class="col-sm-9 product-detail">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="carouselExampleFade" class="carousel product-gallery carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach($product->images as $ind => $image)
                                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="{{$ind}}" class="{{!$ind ? "active" : ""}}" aria-current="{{!$ind ? "true" : ""}}" aria-label="Slide {{$ind + 1}}"></button>
                                    @endforeach

                                </div>
                                <h3 class="product-slide-head">{{$product->title}}</h3>
                                <p class="text-center">SKU: {{$product->sku}}</p>
                                <div class="carousel-inner">
                                    @foreach($product->images as $ind => $image)
                                        <div class="carousel-item {{!$ind ? "active" : ""}}"> <img class="d-block " src="{{url($image)}}" alt="{{$product->title}}"> </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="product-detail">
                        @if($cate_slug != 'batteries')
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @if($product->description)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" href="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                    </li>
                                @endif
                                @if($product->feature)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link @if(!$product->description) active @endif" id="features-tab" data-bs-toggle="tab" data-bs-target="#features"  href="#features" type="button" role="tab" aria-controls="features" aria-selected="true">Features</a>
                                    </li>
                                @endif
                                @if($product->specification)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" href="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="true">Specifications</a>
                                    </li>
                                @endif
                                @if($product->package)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="parts-tab" data-bs-toggle="tab" data-bs-target="#parts" href="#parts"  type="button" role="tab" aria-controls="parts" aria-selected="true">PARTS INCLUDED</a>
                                    </li>
                                @endif
                                @if($product->downloads)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="resources-tab" data-bs-toggle="tab" data-bs-target="#resources" href="#resources"  type="button" role="tab" aria-controls="resources" aria-selected="true">Resources</a>
                                    </li>
                                @endif
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                @if($product->description)
                                    <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        <div class="desc">
                                            {!! $product->description !!}
                                        </div>
                                    </div>
                                @endif
                                @if($product->feature)
                                    <div class="tab-pane fade @if(!$product->description) active show @endif" id="features" role="tabpanel" aria-labelledby="features-tab">
                                        <div class="feature">
                                            {!! $product->feature !!}
                                        </div>
                                    </div>
                                @endif
                                @if($product->specification)
                                    <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                        <div class="specifications">
                                            {!! $product->specification !!}
                                        </div>
                                    </div>
                                @endif
                                @if($product->package)
                                    <div class="tab-pane fade" id="parts" role="tabpanel" aria-labelledby="parts-tab">
                                        <div class="feature">
                                            {!! $product->package !!}
                                        </div>
                                    </div>
                                @endif
                                @if($product->downloads)
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
                                @endif
                            </div>
                        @else
                        <!-- Messenger Chat plugin Code -->
                            <div id="fb-root"></div>

                            <!-- Your Chat plugin code -->
                            <div id="fb-customer-chat" class="fb-customerchat">
                            </div>

                            <script>
                                var chatbox = document.getElementById('fb-customer-chat');
                                chatbox.setAttribute("page_id", "103368958030018");
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

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" href="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                </li>
                                @if($product->intro)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="intro-tab" data-bs-toggle="tab" data-bs-target="#intro" href="#intro"  type="button" role="tab" aria-controls="intro" aria-selected="true">COMPLIANCE</a>
                                    </li>
                                @endif
                                @if($product->downloads)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="resources-tab" data-bs-toggle="tab" data-bs-target="#resources" href="#resources"  type="button" role="tab" aria-controls="resources" aria-selected="true">Resources</a>
                                    </li>
                                @endif
                                @if($product->intro)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="faq-tab" data-bs-toggle="tab" data-bs-target="#faq" href="#faq"  type="button" role="tab" aria-controls="faq" aria-selected="true">FAQ</a>
                                    </li>
                                @endif
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="desc">
                                                    {!! $product->description !!}
                                                </div>
                                            </div>
                                        </div>
                                        @if($product->specification)
                                            <div class="row">
                                                <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Specifications</span></h2>
                                                <div class="specifications row">
                                                    {!! $product->specification !!}
                                                </div>
                                            </div>
                                        @endif

                                        @if($product->feature)
                                            <div class="row">
                                                <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Features</span></h2>
                                                <div class="feature text-center">
                                                    {!! $product->feature !!}
                                                </div>
                                            </div>
                                        @endif
                                        @if($product->package)
                                            <div class="row">
                                                <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Package</span></h2>
                                                <div class="feature text-center">
                                                    {!! $product->package !!}
                                                </div>
                                            </div>
                                        @endif

                                        <div class="row video">
                                            <div class="col-md-6">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2iO58RZn8w4" frameborder="0"></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/o6QLklgIVj8" frameborder="0"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-fx-image-gal mt-5">
                                            <div class="-fx-gal-item">
                                                <div class="-fx-gal-image-thumb" tabindex="1">
                                                    <a href="javascript:;">
                                                        <img src="../photos/1/accessories/12/Lithium-Battery-For-Campervan-Solarking.jpg">
                                                    </a>
                                                </div>
                                            </div><!-- /-fx-gal-item -->
                                            <div class="-fx-gal-item">
                                                <div class="-fx-gal-image-thumb" tabindex="1">
                                                    <a href="javascript:;">
                                                        <img src="../photos/1/accessories/12/Solarking-Lithium-Iron-Battery.jpg">
                                                    </a>
                                                </div>
                                            </div><!-- /-fx-gal-item -->
                                            <div class="-fx-gal-item">
                                                <div class="-fx-gal-image-thumb" tabindex="1">
                                                    <a href="javascript:;">
                                                        <img src="../photos/1/accessories/12/Copy-of-lithium-batteries.jpg">
                                                    </a>
                                                </div>
                                            </div><!-- /-fx-gal-item -->
                                            <div class="-fx-gal-item">
                                                <div class="-fx-gal-image-thumb" tabindex="1">
                                                    <a href="javascript:;">
                                                        <img src="../photos/1/accessories/12/Copy-of-lithium-batteries-1-copy.jpg">
                                                    </a>
                                                </div>
                                            </div><!-- /-fx-gal-item -->
                                            <div class="-fx-gal-item">
                                                <div class="-fx-gal-image-thumb" tabindex="1">
                                                    <a href="javascript:;">
                                                        <img src="../photos/1/accessories/12/Lithium-Iron-liFePo4-Battery-Solarking.jpg">
                                                    </a>
                                                </div>
                                            </div><!-- /-fx-gal-item -->
                                            <div class="-fx-gal-item">
                                                <div class="-fx-gal-image-thumb" tabindex="1">
                                                    <a href="javascript:;">
                                                        <img src="../photos/1/accessories/12/Solarking-Lithium-Iron-LiFePo4-Batteries.jpg">
                                                    </a>
                                                </div>
                                            </div><!-- /-fx-gal-item -->
                                        </div>
                                        <div class="text-center mt-5">
                                            <a href="{{url('product/photo-gallery')}}" class="btn btn-customize2">Photo Gallery</a>
                                        </div>

                                        <div class="row section7">
                                            <div class="col-sm-12 text-center mt-5 mb-5">
                                                <h2><strong> They SAY</strong></h2>
                                            </div>

                                            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel" data-interval="5000">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <div class="row">
                                                            <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                                                <div class="card bg-light ">
                                                                    <div class="card-body">
                                                                        <div class="card-text">
                                                                            <a href="/blogs/solar-roof-ventilation-fan-review-solarking">
                                                                                <i class="fa fa-quote-left mr-2"></i>
                                                                                My 2 solar king 100ahs have replaced 2 x120ah agms and are holding up
                                                                                well with inverter to the point where I am using inverter and induction
                                                                                cooker more and even using electric hot water on the right day.
                                                                                <i class="fa fa-quote-right ml-2"></i>
                                                                            </a>
                                                                            <p>&nbsp;</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-header">
                                                                        <h5>- Graeme, Woodonga</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="carousel-item">
                                                        <div class="row">
                                                            <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                                                <div class="card bg-light ">
                                                                    <div class="card-body">
                                                                        <div class="card-text">
                                                                            <a href="/blogs/solar-roof-ventilation-fan-review-solarking">
                                                                                <i class="fa fa-quote-left mr-2"></i>
                                                                                I have had 3x100 ah for nearly 12 months. No problems even went 2 month
                                                                                off supply while up in Queensland. Have 750 W of solar panels.
                                                                                <i class="fa fa-quote-right ml-2"></i>
                                                                            </a>
                                                                            <p>&nbsp;</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-header">
                                                                        <h5>- Greg Smith, Vic</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="carousel-item">
                                                        <div class="row">
                                                            <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                                                <div class="card bg-light ">
                                                                    <div class="card-body">
                                                                        <div class="card-text">
                                                                            <a href="/blogs/solar-roof-ventilation-fan-review-solarking">
                                                                                <i class="fa fa-quote-left mr-2"></i>
                                                                                I can recommend these. My van is set up with 2x200ah and 900w solar. I have a 3000w inverter and run a 2.5kw household inverter a/c unit during summer daytime no problem..                                                <i class="fa fa-quote-right ml-2"></i>

                                                                            </a>
                                                                            <p>&nbsp;</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-header">
                                                                        <h5>- Peter Booth, Tasmania</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>

                                            <div class="col-md-12 text-center mt-5">
                                                <a href="../blogs/solar-roof-ventilation-fan-review-solarking" title="batteries customers reviews" class="btn btn-customize2">
                                                    Reviews</a>
                                            </div>

                                            <div class="row mt-5">
                                                <div class="col-sm-6">
                                                    <img src="../photos/1/accessories/13/Untitled-design-53-copy.jpg" class="w-100">
                                                </div>

                                                <div class="col-sm-6 text-center">
                                                    <h2><span class="fontLine">Where To Buy</span> </h2>
                                                    <p class="mt-5 mb-5">
                                                        SolarKing has suppliers spread across Australia, check your local supplier below...
                                                    </p>

                                                    <a href="../product/lithium-batteries-dealers" title="batteries suppliers,where to buy"  class="btn btn-customize2">
                                                        Check Your Local Suppliers
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row mt-5">

                                                <div class="col-sm-6 center">

                                                    <h2><span class="fontLine">Need Help?</span></h2>
                                                    <p class="mt-5 mb-5">
                                                        If you want to know more about our product (or) need help with finding your supplier. Please connect
                                                        with our Facebook page and we will respond to you as early as possible. </p>
                                                    <a href="https://www.facebook.com/SolarkingLithiumBattery" title="batteries facebook" target="_blank" class="btn btn-customize2">Connect With Facebook </a>
                                                </div>

                                                <div class="col-sm-6">
                                                    <img src="/images/Untitled-design-54-copy.jpg" class="w-100">
                                                </div>

                                            </div>

                                        </div>


                                        @include('front.contact.part_contact')

                                    </div>
                                </div>
                                @if($product->intro)
                                    <div class="tab-pane fade" id="intro" role="tabpanel" aria-labelledby="intro-tab">
                                        <div class="feature">
                                            {!! $product->feature !!}
                                        </div>
                                    </div>
                                @endif
                                @if($product->downloads)
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
                                @endif
                                @if($product->intro)
                                    <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                        @include('front.product.part-batteries-faq')
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>

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
