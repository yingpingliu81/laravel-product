@extends('layouts.app')

@section('title', 'News & Updates of Solar Roof Ventilation | Solar Fan – SolarKing')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')


@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">News</h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">News</a></h5>
        </div>
    </div>

    <div class="section">
        <div class="container news">
            <div class="row">
                @foreach($news as $item)
                    <div class="item">
                        <div class="date">
                            <div class="month">{{$item->getPublishMonth()}}</div>
                            <div class="day">{{$item->getPublishDay()}}</div>
                        </div>

                        <div class="text">
                            <div class="title"><a href="{{url('news/'.$item->slug)}}">{{$item->title}}</a></div>
                            <div class="sub-date">posted b on {{$item->getPublishFullDate()}}</div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
