@extends('layouts.app')
@section('title', 'dealers from '.$dealer[0]->full_state)

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')

@section('style')
    @parent
@endsection
@section('og_type', "article" )
@section('article_modified_time', data_get($latest_dealer,'updated_at'))
@section('og_updated_time', data_get($latest_dealer,'updated_at'))

@section('content')
    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('front.dealers.left')
                </div>

                <div class="col-sm-9 product-list dealer p-5">
                   <h1>{{$dealer[0]->full_state}}</h1>
                    <div class="row">
                        @foreach($dealer as $item)
                        <div class="col-sm-6">
                            <div class="card bg-light mb-3">
                                <div class="card-header">
                                    <h5><span class="fa fa-address-card-o"></span> {{$item->name}} - {{$item->suburb}}</h5> </div>
                                <div class="card-body">
                                    <p class="card-text"><span class="fa fa-map-marker"></span> {{$item->short_address}}</p>
                                    @if($item->phone)
                                    <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$item->phone}} ">   {{$item->phone}} </a></p>
                                    @endif
                                    @if($item->fax)
                                    <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$item->fax}} </p>
                                    @endif
                                    @if($item->mobile)
                                    <p class="card-text"><span class="fa fa-fax"></span> Mobile : <a href="tel:   {{$item->mobile}} ">{{$item->mobile}}  </a></p>
                                    @endif
                                    @if($item->website)
                                    <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank" href="{{$item->website}}">{{$item->name}}</a>
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
