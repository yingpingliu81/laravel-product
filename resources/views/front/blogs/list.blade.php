@extends('layouts.app')

@section('title', 'Solar Exhaust Fans and Solar Products Blog of SolarKing')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')


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
                @foreach($blogs as $item)
                    <div class="col-sm-4">
                        <div class="card bg-light mb-3">
                            <img src="{{$item->thumbnail}}">
                            <div class="card-body">
                                <h2 class="card-title">{{$item->title}}</h2>
                                <div class="card-text">
                                    {!! $item->content !!}
                                </div>
                                <p class="publish">{{$item->getPublishFullDate()}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{url('blogs/'.$item->slug)}}">
                                    Read More <span class="fa fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection



