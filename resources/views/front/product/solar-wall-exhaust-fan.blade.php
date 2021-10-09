@extends('layouts.app')

@section('title', 'Solar Wall Exhaust Fan | Ventilation Fan for Garages -SolarKing')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')

@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">Caravan Satellite Dish</h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Description</a></h5>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div id="carouselExampleFade" class="carousel product-gallery carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($product->images as $ind => $image)
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="{{$ind}}" class="{{!$ind ? "active" : ""}}" aria-current="{{!$ind ? "true" : ""}}" aria-label="Slide {{$ind + 1}}"></button>
                            @endforeach

                        </div>
                        <h3 class="product-slide-head">{{$product->title}}</h3>
                        <div class="carousel-inner">
                            @foreach($product->images as $ind => $image)
                            <div class="carousel-item {{!$ind ? "active" : ""}}"> <img class="d-block " src="{{url($image)}}" alt="{{$product->title}}"> </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-sm-4 product-overview">
                    <h3 class=" mb-4">overview</h3>
                    <div class="overview-item "><span ><i class="fa fa-star-o  c-main ">&nbsp;</i> <em>SKU</em></span> <span >{{$product->sku}}</span>                            </div>

                    <div class="overview-item "><span ><i class="fa fa-money c-main ">&nbsp;</i> <em>RRP</em></span> <span >{{$product->price}}</span>                            </div>

                    <div class="overview-item "><span ><i class="fa fa-file-pdf-o c-main ">&nbsp;</i> <em>Model</em></span> 320MM SRVF                          </div>
                    <div class="mt-5">{!! $product->intro !!}</div>

                    <div class="text-center mt-5">
                        <a href="{{url('product/photo-gallery')}}" class="btn btn-customize2 ">Photo Gallery</a></div>
                </div>
            </div>
            <div class="row">
                <div class="product-detail">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" href="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="resources-tab" data-bs-toggle="tab" data-bs-target="#resources" href="#resources"  type="button" role="tab" aria-controls="resources" aria-selected="true">Resources</a>
                        </li>

                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
                          <div class="container">
                              <div class="row">
                                      <div class="desc">
                                          {!! $product->description !!}
                                      </div>
                              </div>
                              <div class="row">
                                  <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Features</span></h2>

                                  <div class="feature">
                                      {!! $product->feature !!}

                                  </div>
                              </div>

                              <div class="row">
                                  <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Specifications</span></h2>

                                  <div class="specifications">
                                      {!! $product->specification !!}
                                  </div>
                              </div>

                              <div class="row">
                                  <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Package</span></h2>

                                  <div class="feature">
                                          {!! $product->package !!}
                                      </div>
                              </div>
                          </div>

                        </div>
                        <div class="tab-pane fade" id="resources" role="tabpanel" aria-labelledby="resources-tab">
                            <div class="specifications">
                                <ul class="time-list">
                                    <li class="time-item ">
                                        <!-- <div class="icon">1 </div>-->
                                        <div class="name"><a title="Satking Orbit brouchure" target="_blank" href="../files/1/pdf/SKU_6758_Solarking_Solar Wall Fan_Installation Instructions_V2.pdf">PDF Download <span class="fa fa-download"></span></a>                                            </div>
                                        <div class="date">Installment Instructions</div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            @include('front.contact.part_contact')
        </div>
    </div>

@endsection
