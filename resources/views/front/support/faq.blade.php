
@extends('layouts.app')

@section('title', 'Solar Exhaust Fan |Solar Roof Ventilation Fan FAQs – SolarKing')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')

@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">Frequently Ask Questions
            </h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">FAQ
                </a></h5>
        </div>
    </div>

    <section class="section faq">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        @foreach($faqs as $ind => $faq)
                        <li>
                            <a href="javascript:;" class="faq-title"><span class="circle">{{$ind + 1}}</span> {{$faq->title}}</a>
                            <div class="faq-content">
                                <p>{!! $faq->content !!}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm-12">
                    <p><strong>Note: </strong> If you continue to encounter issues and the FAQ has not assisted you call our help team (4 Staff) on
                        <a href="tel:1300 139 255">1300 139 255</a> Mon-Fri 9.00am till 5.00pm EST. Outside of these hours you can email support on
                        <a href="mailto:sales@solarking.com.au">sales@solarking.com.au</a>
                    </p>
                </div>
            </div>

        </div>


    </section>
@endsection


