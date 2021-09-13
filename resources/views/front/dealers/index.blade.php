@extends('layouts.app')

@section('title', 'where to buy from our dealers')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')

@section('style')
    @parent
    <link rel="stylesheet" href="{{url('css/map.css')}}">
@endsection


@section('content')
    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('front.dealers.left')
                </div>

                <div class="col-sm-9 product-list dealer p-5">
                    <h1>Dealers</h1>
                    <p>We invite new dealers to continue the growth of our network. Please click on a state to find your closest dealer. </p>
                    <div class="mapBox group">
                        <ul class="map group">
                            <li class="stateACT"><a href="{{url('dealers/australian-capital-territory')}}" title="Australian Capital Territory"><span></span>ACT</a></li>
                            <li class="stateQLD"><a href="{{url('dealers/queensland')}}" title="Queensland"><span></span>QLD</a></li>
                            <li class="stateVIC"><a href="{{url('dealers/victoria')}}" title="Victoria"><span></span>VIC</a></li>
                            <li class="stateNSW"><a href="{{url('dealers/new-south-wales')}}" title="New South Wales"><span></span>NSW</a></li>
                            <li class="stateSA"><a href="{{url('dealers/south-australia')}}" title="South Australia"><span></span>SA</a></li>
                            <li class="stateWA"><a href="{{url('dealers/western-australia')}}" title="Western Australia"><span></span>WA</a></li>
                            <li class="stateNT"><a href="{{url('dealers/northern-territory')}}" title="Northern Territory"><span></span>NT</a></li>
                            <li class="stateTAS"><a href="{{url('dealers/tasmania')}}" title="Tasmania"><span></span>TAS</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
