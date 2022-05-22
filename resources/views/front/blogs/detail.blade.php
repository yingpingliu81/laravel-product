@extends('layouts.app')

@section('title', $blogs->title . " - SolarKing")

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')
@section('style')
    @parent
    @if($blogs->thumbnail)
    <meta property="og_image" content="{{url($blogs->thumbnail)}}" />
    <meta name="twitter:image" content="{{url($blogs->thumb)}}">
    @endif
    <meta property="article:published_time" content="{{$blogs->published_at}}">
@endsection
@section('og_type', "article" )
@section('twitter_card', "summary_large_image" )
@section('article_modified_time', data_get($blogs,'updated_at'))
@section('og_updated_time', data_get($blogs,'updated_at'))

@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">Blog</h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Blog</a></h5>
        </div>
    </div>

    <div class="section">
        <div class="container blog">
            <div class="row">
                @if($blogs->thumbnail)
                <div class="col-sm-8 offset-sm-2 blog-thumbnail">
                    <img src="{{url($blogs->thumbnail)}}" alt="{{$blogs->title}}">
                </div>
                @endif
                <div class="col-sm-12">
                    <h1 class="blog-title">{{$blogs->title}}</h1>
                    <div class="sub-info">
                        <div class="publish">{{$blogs->getPublishFullDate()}}</div>
                    </div>
                    <div class="share">
                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                    </div>
                    <div class="blog-content">
                        {!! $blogs->content !!}
                    </div>

                    <a href="{{url('blogs')}}" class="btn mt-3 mb-3  btn-outline-primary">Go Back</a>
                </div>

            </div>

        </div>
    </div>

@endsection

@section('javascript')
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f67411f0658220012f2d8f1&product=inline-share-buttons' async='async'></script>
@endsection
