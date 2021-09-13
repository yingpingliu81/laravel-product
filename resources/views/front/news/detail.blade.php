@extends('layouts.app')

@section('title', $news->title. ' - SolarKing')

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

                <div class="item">
                    <div class="date">
                        <div class="month">{{$news->getPublishMonth()}}</div>
                        <div class="day">{{$news->getPublishDay()}}</div>
                    </div>

                    <div class="text">
                        <div class="title">{{$news->title}}</div>
                        <div class="sub-date">posted b on {{$news->getPublishFullDate()}}</div>
                    </div>
                </div>

                <div id="first-letter-caption">
                    {!! $news->content !!}

                </div>

                <a href="{{url('news')}}" class="btn mt-3 mb-3  btn-outline-primary">Go Back</a>
            </div>

        </div>
    </div>

@endsection
