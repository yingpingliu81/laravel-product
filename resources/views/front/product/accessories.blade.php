@extends('layouts.app')

@section('title',   $cate->slug == 'batteries' ? 'Best Lithium Iron Phosphate Batteries Australia - SolarKing' : 'SolarKing  Solar Fan - '.$cate->title)

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')

@section('style')
    @parent
    <meta property="og:type" content="product" />
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
            <h2 class="left">{{data_get($cate, "title", "")}}</h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">{{data_get($cate, "title", "")}}</a></h5>
        </div>
    </div>

    <section class="section">
        <div class="container accessories">
            <div class="row">
                <div class="col-sm-3">
                    @include('front.product.left')
                </div>
                <div class="col-sm-9">
                    @foreach($subCates as $subCate)
                        <h1>{{$subCate->title}}</h1>
                        <div class="row">
                            @foreach($subCate->visibleProducts as $item)
                                <div class="col-sm-4">
                                    <div class="card  ">
                                        <a href="{{url($cate->slug."/".$item->slug)}}" class="picture">
                                            <img src="{{url($item->thumb)}}" alt="{{$item->title}}">
                                        </a>
                                        <div class="card-header">
                                            <a href="{{url($cate->slug."/".$item->slug)}}">
                                                {{$item->title}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    <h1>{{$cate->title}}</h1>
                    <div class="row">
                        @foreach($cate->visibleProducts as $item)
                        <div class="col-sm-4">
                            <div class="card  ">
                                <a href="{{url($cate->slug."/".$item->slug)}}" class="picture">
                                    <img src="{{url($item->thumb)}}" alt="{{$item->title}}">
                                </a>
                                <div class="card-header">
                                    <a href="{{url($cate->slug."/".$item->slug)}}">
                                        {{$item->title}}
                                    </a>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script src="{{url('/assets/js/core/jquery.min.js')}}"></script>
    <script>
    //Google Tag Manager Start
    var tagArray    = <?php echo $cate->visibleProducts; ?>;
    var tagM        = new Array();
    var site_url = "<?php echo url('/'); ?>";
    $.each(tagArray, function(i, product_data)
    {
        $.get(site_url + '/item-details-tag-manager/'+ product_data.sku, function(data){
            tagM.push({'item_name': product_data.title,
                'item_id': product_data.sku,
                currency: "AUD",
                'price': product_data.price,
                'item_brand': 'Solarking',
                'item_category': "{{$cate->title ?? ""}}",
                'index': i,
            });
        });
    });

    // Measure product views / impressions
    dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
    dataLayer.push({
        event: "view_item_list",
        ecommerce: {
            items: tagM
        }
    });
    //Google Tag Manager End
</script>
@endsection
