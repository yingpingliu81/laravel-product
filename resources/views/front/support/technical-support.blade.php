@extends('layouts.app')

@section('title', 'Call or Email for Sales | Support at 1300 139 255 | Roof Ventilation ')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')


@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">Technical Support
            </h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Technical Support
                </a></h5>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="../images/support-d-people-man-person-phone.jpg" alt="" style="width: 100%">
                </div>
                <div class="col-lg-6 center">
                    <p>
                        SolarKing offers technical support on all of our products.

                    </p>.
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 center">

                    <p> If you have any queries using or setting up your SolarKing product you can call our helpline on <a href="tel:1300 139 255" onclick="return gtag_report_conversion('tel:1300 139 255');">1300 139 255</a> or email <a href="mailTo:sales@solarking.net.au">support@solarking.net.au</a> for more information.</p>
                </div>
                <div class="col-lg-6">
                    <img src="../images/Support_Business.jpg" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </section>
@endsection
