@extends('layouts.app')

@section('title', $product->title.' - Solarking')

@section('description', current(explode(".",strip_tags($product->description))))

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')

@section('style')
    @parent
    @if($product->thumb)
        <meta property="og_image" content="{{url($product->thumb)}}" />
        <meta name="twitter:image" content="{{url($product->thumb)}}">
    @endif
@endsection
@section('og_type', "product" )
@section('twitter_card', "summary_large_image" )
@section('article_modified_time', data_get($product,'updated_at'))
@section('og_updated_time', data_get($product,'updated_at'))

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
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", @if(in_array($cate_slug, ['solar-ventilation','product'])) "167954660436659" @else "103368958030018" @endif);
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
                                <p class="text-center">SKU: {{$product->sku}} @if($product->price)&nbsp;&nbsp;&nbsp;&nbsp;Price: {{$product->price}}@endif </p>
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
                        @if(in_array($cate_slug, ['batteries', 'metal-case', 'batteries-small', 'batteries-large','plastic-case']))
                          @include('front.product.part-detail-batteries')
                        @elseif(in_array($cate_slug, ['solar-ventilation','product']))
                           @include('front.product.part-detail-solar-ventilation')
                        @else
                            @include('front.product.part-detail-other')
                        @endif
                    </div>

                    @include('front.contact.part_contact')
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
