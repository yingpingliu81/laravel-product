@extends('layouts.app')

@section('title', 'BuyLithium Batteries across Australia - SolarKing')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')

@section('style')
    @parent
    <link rel="stylesheet" href="{{url('css/map.css')}}">
@endsection

@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">Lithium Batteries Dealers
            </h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Dealers
                </a></h5>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="where-vic-tab" data-bs-toggle="tab" data-bs-target="#where-vic"  href="#where-vic" type="button" role="tab" aria-controls="where-vic" aria-selected="true">VIC</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-nsw-tab" data-bs-toggle="tab" data-bs-target="#where-nsw" href="#where-nsw" type="button" role="tab" aria-controls="where-nsw" aria-selected="true">NSW</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-qld-tab" data-bs-toggle="tab" data-bs-target="#where-qld" href="#where-qld"  type="button" role="tab" aria-controls="where-qld" aria-selected="true">QLD</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-wa-tab" data-bs-toggle="tab" data-bs-target="#where-wa" href="#where-wa"  type="button" role="tab" aria-controls="where-wa" aria-selected="true">WA</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-sa-tab" data-bs-toggle="tab" data-bs-target="#where-sa" href="#where-sa"  type="button" role="tab" aria-controls="where-sa" aria-selected="true">SA</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-tas-tab" data-bs-toggle="tab" data-bs-target="#where-tas" href="#where-tas"  type="button" role="tab" aria-controls="where-tas" aria-selected="true">TAS</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-nt-tab" data-bs-toggle="tab" data-bs-target="#where-nt" href="#where-nt" type="button" role="tab" aria-controls="where-nt" aria-selected="true">NT</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-act-tab" data-bs-toggle="tab" data-bs-target="#where-act" href="#where-act" type="button" role="tab" aria-controls="where-act" aria-selected="true">ACT</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-png-tab" data-bs-toggle="tab" data-bs-target="#where-png" href="#where-png" type="button" role="tab" aria-controls="where-png" aria-selected="true">PNG</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-uae-tab" data-bs-toggle="tab" data-bs-target="#where-uae" href="#where-uae" type="button" role="tab" aria-controls="where-uae" aria-selected="true">UAE</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="where-hk-tab" data-bs-toggle="tab" data-bs-target="#where-hk" href="#where-hk" type="button" role="tab" aria-controls="where-hk" aria-selected="true">HK</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link " id="where-all-tab" data-bs-toggle="tab" data-bs-target="#where-all" href="#where-all" type="button" role="tab" aria-controls="where-all" aria-selected="true">All</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade active show" id="where-vic" role="tabpanel" aria-labelledby="where-vic-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($dealers['VIC'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">    {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a> </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="where-nsw" role="tabpanel" aria-labelledby="where-nsw-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($dealers['NSW'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">    {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a> </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="where-qld" role="tabpanel" aria-labelledby="where-qld-tab">
                    <div class="container">

                        <div class="row">
                            @foreach($dealers['QLD'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">    {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a> </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
                <div class="tab-pane fade" id="where-wa" role="tabpanel" aria-labelledby="where-wa-tab">

                    <div class="container">
                        <div class="row">
                            @foreach($dealers['WA'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">    {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a> </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="where-sa" role="tabpanel" aria-labelledby="where-sa-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($dealers['SA'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">    {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a> </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="where-tas" role="tabpanel" aria-labelledby="where-tas-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($dealers['TAS'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">    {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a> </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="where-nt" role="tabpanel" aria-labelledby="where-nt-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($dealers['NT'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">    {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a> </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="where-act" role="tabpanel" aria-labelledby="where-act-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($dealers['ACT'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">   {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a>  </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="where-png" role="tabpanel" aria-labelledby="where-png-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($dealers['PNG'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">   {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a>  </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="where-uae" role="tabpanel" aria-labelledby="where-uae-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($dealers['UAE'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">   {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a>  </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="where-hk" role="tabpanel" aria-labelledby="where-hk-tab">
                    <div class="container">
                        <div class="row">
                            @foreach($dealers['HK'] as $dealer)
                                <div class="col-sm-6">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5><span class="fa fa-address-card-o"></span> {{$dealer->name}}  {{$dealer->suburb ? ' - '.$dealer->suburb : ""}}</h5> </div>
                                        <div class="card-body dealer" data-dealer="{{json_encode($dealer)}}">
                                            <p class="card-text"><span class="fa fa-map-marker"></span> {{$dealer->address}}</p>
                                            @if($dealer->phone)
                                                <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   {{$dealer->phone}}" onclick="return gtag_report_conversion('tel: {{$dealer->phone}}')">   {{$dealer->phone}} </a></p>
                                            @endif
                                            @if($dealer->fax)
                                                <p class="card-text"><span class="fa fa-fax"></span> Fax : {{$dealer->fax}} </p>
                                            @endif
                                            @if($dealer->mobile)
                                                <p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : <a href="tel: {{$dealer->mobile}}" onclick="return gtag_report_conversion('tel:{{$dealer->mobile}}')">{{$dealer->mobile}}</a>  </p>
                                            @endif
                                            @if($dealer->website)
                                                <p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank"  href="{{$dealer->website}}">{{$dealer->name}}</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="where-all" role="tabpanel" aria-labelledby="where-all-tab">
                    <div class="container section6">
                        <div class="row">
                            <div id="map" class="address-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuXDU2n8Kmsx7q8DSw6Aic2uuqoKmARXI"></script>
<script>
    function initMap() {

        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };

        // Display a map on the web page
        map = new google.maps.Map(document.getElementById("map"), mapOptions);
        map.setTilt(50);


        // Add multiple markers to map
        var infoWindow = new google.maps.InfoWindow();


        document.querySelectorAll('.dealer').forEach(function(element) {

            const dealer = JSON.parse(element.getAttribute('data-dealer'));
            if(!dealer.lat || !dealer.lng) return;

            const dataT =    '<div class="card">\n' +
                '                        <div class="card-header"><h5><span class="fa fa-address-card-o"></span> ' + dealer.name + (dealer.suburb ?  ' - ' + dealer.suburb : '') +  '</h5> </div>\n' +
                '                        <div class="card-body">\n' +
                (dealer.address ? '<p class="card-text"><span class="fa fa-map-marker"></span> ' + dealer.address + '</p>\n' : "") +
                (dealer.fax ? '<p class="card-text"><span class="fa fa-fax"></span> Fax :  ' + dealer.fax + '</p>\n' : "") +
                (dealer.phone ? ' <p class="card-text"><span class="fa fa-volume-control-phone"></span> Phone : <a href="tel:   ' + dealer.phone + '" onclick="return gtag_report_conversion(\'tel: ' + dealer.phone +'\')">    ' + dealer.phone + ' </a></p>\n' : "") +
                (dealer.mobile ? '<p class="card-text"><span class="fa fa-mobile-phone"></span> Mobile : ' + dealer.mobile + '<a href="tel: " onclick="return gtag_report_conversion(\'tel:' + dealer.mobile + '\')">  ' + dealer.mobile + '</a>  </p> \n' : "") +
                (dealer.website ? '<p class="card-text"><span class="fa fa-external-link"></span> Website: <a target="_blank" href=" ' + dealer.website + ' "> ' + dealer.name + '</a></p>\n' : "") +
                '                        </div>\n' +
                '</div>';
            console.log(dataT);

            var position = new google.maps.LatLng(dealer.lat, dealer.lng);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                icon: '../images/Catch.png',
            });

            // Add info window to marker
            google.maps.event.addListener(marker, 'mouseover', (function(marker) {
                return function() {
                    infoWindow.setContent(dataT);
                    infoWindow.open(map, marker);
                }
            })(marker));
            // Center the map to fit all markers on the screen
            map.fitBounds(bounds);

        });



        // Set zoom level
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(5);
            google.maps.event.removeListener(boundsListener);
        });
    }
    google.maps.event.addDomListener(window, 'load', initMap);
</script>
