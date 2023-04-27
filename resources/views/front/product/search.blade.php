@extends('layouts.app')

@section('title', "Search  Products Results")

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')


@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">Search Results</h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Search Results</a></h5>
        </div>
    </div>

    <section class="section">
        <div class="container" >
            <div class="product-detail">
            @foreach($products as $product)
                @if(in_array($product->cates[0]->type_slug, ['accessories', 'batteries-large']))
                    <div class="row">
                        <h5>{{$product->title}}</h5>
                        <h5 class="mt-2 mb-2"> <a href="{{url($product->cates[0]->slug.'/'.$product->slug)}}">More Details</a></h5>
                    </div>
                @else
                    <div class="row">
                        <h5>{{$product->title}}</h5>
                        @php($urls = ['6752' => 'product/solar-roof-vent', '6758' => 'product/solar-wall-exhaust-fan', '6754' => 'product/commercial-solar-roof-ventilation'])
                        <h5 class="mt-2 mb-2"> <a href="{{url($urls[$product->sku])}}">More Details</a></h5>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

@endsection
