@extends('layouts.app')

@section('title',   $cate->slug == 'batteries' ? 'Best Lithium Iron Phosphate Batteries Australia - SolarKing' : 'SolarKing  Solar Fan - '.$cate->title)

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')


@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">Accessories</h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Accessories</a></h5>
        </div>
    </div>

    <section class="section">
        <div class="container accessories">
            <div class="row">
                <div class="col-sm-3">
                    @include('front.product.left')
                </div>
                <div class="col-sm-9">
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
