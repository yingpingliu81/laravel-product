@extends('layouts.app')

@section('title', 'Solarking Automatic satellite TV Dish - contact us')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')


@section('content')
    <div class="section-head">
        <div class="container">
            <h2 class="left">Contact Us
            </h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Contact Us
                </a></h5>
        </div>
    </div>

    <div class="section">
        <div class="container">
            @include('front.contact.part_contact')
        </div>

        <div class="contact-us ">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-6 text-right">
                        <iframe width="80%" height="300" frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed/v1/place?q=162 Chesterville Road, Cheltenham Victoria 3189&amp;key=AIzaSyBGEaU7Zf9sd1PWh_9fHmF7Qt-f-gDXj-U"
                                allowfullscreen=""></iframe>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-head ">Contact Us</div>
                        <div class="contact-item">
                            <span class="mr-5">Address:</span><a
                                    href="https://www.google.ca/maps/place/162+Chesterville+Rd,+Cheltenham+VIC+3192/@-37.9489281,145.0567931,17z/data=!3m1!4b1!4m5!3m4!1s0x6ad66c1aa19e9197:0x6d4206772a740926!8m2!3d-37.9489324!4d145.0589818"
                                    target="_blank" >162 Chesterville Road,
                                Cheltenham Victoria 3189</a>
                        </div>
                        <div class="contact-item">
                            <span class="mr-5">Telephone:</span> <a href="tel:1300 139 255"
                                                                    onclick="return gtag_report_conversion('tel:1300 139 255');"
                                                                    >1300 139 255</a>

                        </div>
                        <div class="contact-item">
                            <span class="mr-5">International Phone:</span> <a href="tel: +61 3 9553 3399"
                                                                    onclick="return gtag_report_conversion('tel: +61 3 9553 3399');"
                            > +61 3 9553 3399</a>

                        </div>
                        <div class="contact-item">
                            <span class="mr-5">Email:</span><a href="mailTo:sales@solarking.net.au" >sales@solarking.net.au
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
{!! htmlScriptTagJsApi() !!}
