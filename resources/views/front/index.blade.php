@extends('layouts.app')

@section('title', 'Best Solar Roof Ventilation Fan | Exhaust Fan - SolarKing')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')

@section('style')
    @parent
    <meta property="og_image" content="{{url('images/home/Solarking-Perth-Solar-Roof-Vent.jpg')}}" />
    <link rel="stylesheet" href="{{url('css/map.css')}}"  rel="preload" as="style" onload="this.rel='stylesheet'">
@endsection
@section('og_type', "product" )

@section('content')
<div class="home">
    <div id="carouselExampleFade"   class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active first">
                <picture>
                    <source srcSet="{{url('/images/Roof-Ventilation-Fan.avif')}}" type="image/avif" />
                    <img src="{{url('images/Roof-Ventilation-Fan.jpg')}}" class="computer" width="100%" height="100%" decoding="async" loading="lazy" alt="Solar Roof Ventilation Fan"/>
                </picture>

                <picture>
                    <source srcSet="{{url('/images/Roof-Ventilation-Fan-m.avif')}}" type="image/avif" />
                    <img src="{{url('images/Roof-Ventilation-Fan-m.jpg')}}" class="mobile" width="100%" height="100%" decoding="async" loading="lazy" alt="Solar Roof Ventilation Fan"/>
                </picture>
            </div>
            <div class="carousel-item second">
                <picture>
                    <source srcSet="{{url('images/Lithium-Battery-Australia-Solarking.avif')}}" type="image/avif" />
                    <img src="{{url('images/Lithium-Battery-Australia-Solarking.png')}}" class="computer" width="100%" height="100%"  decoding="async" loading="lazy" alt="Lithium Iron Battery"/>
                </picture>

                <picture>
                    <source srcSet="{{url('images/Lithium-Battery-Australia-Solarking-m.avif')}}" type="image/avif" />
                    <img src="{{url('images/Lithium-Battery-Australia-Solarking-m.png')}}" class="mobile" width="100%" height="100%"  decoding="async" loading="lazy" alt="Lithium Iron Battery"/>
                </picture>
            </div>
            <div class="carousel-item third">
                <picture>
                    <source srcSet="{{url('images/home/RV-Solar-Panel-Image.avif')}}" type="image/avif" />
                    <img src="{{url('images/home/RV-Solar-Panel-Image.jpg')}}" class="computer" width="100%" height="100%"  decoding="async" loading="lazy" alt="Solar Panels"/>
                </picture>

                <picture>
                    <source srcSet="{{url('images/RV-Solar-Panel-Image-m.avif')}}" type="image/avif" />
                    <img src="{{url('images/RV-Solar-Panel-Image-m.jpg')}}" class="mobile" width="100%" height="100%"  decoding="async" loading="lazy" alt="Solar Panels"/>
                </picture>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="section1">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Solar Roof Ventilation Fan

                    </h1>

                    <p><strong>Solar Roof Ventilation Fan</strong> extracts the dry and hot air in the roof. Australian summers continue to get hotter and so do our homes and workplaces. A great solution to tackle this is Solar Exhaust Fan.
                    </p>
                    <p>By replacing the hot air in your roof space in summer with the cooler outside air, Solar Roof Ventilation make your home much cooler and a big difference to your indoor comfort level.
                    </p>


                    <a href="{{url('product/solar-roof-vent')}}" class="btn btn-customize2">View Details</a>
                </div>
                <div class="col-sm-6">
                    <div class="imagestwo">
                        <picture>
                            <source srcSet="{{url('images/home/Solar-Roof-Ventilation-Solarking-16.avif')}}" type="image/avif" />
                            <img src="{{url('images/home/Solar-Roof-Ventilation-Solarking-16.jpg')}}" width="100%" height="100%"  class="image1" decoding="async" loading="lazy" alt="Roof Insulation"/>
                        </picture>
                        <picture>
                            <source srcSet="{{url('images/home/Solarking-Perth-Solar-Roof-Vent.avif')}}" type="image/avif" />
                            <img src="{{url('images/home/Solarking-Perth-Solar-Roof-Vent.jpg')}}" width="200"  height="160" class="image2" decoding="async" loading="lazy" alt="Roof Insulation"/>
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="section3 section">
            <div class="row">
                <div class="col-sm-6">
                    <div class="pic-big">
                        <picture>
                            <source srcSet="{{url('images/5.avif')}}" type="image/avif" />
                            <img src="{{url('images/5.png')}}" width="100%" height="100%"  class="image1" decoding="async" loading="lazy" alt="SolarKing lithium batteries"/>
                        </picture>
                    </div>
                </div>
                <div class="col-sm-6 center">
                    <h3 class="mt-5 mb-5"><strong>SolarKing Lithium batteries
                        </strong></h3>
                    <p class="mt-5 fz-13"><strong>Lithium batteries</strong>  are the future of battery storage, being lighter and lasting up to 8 times the cycle life of lead acid batteries.

                            SolarKing Lithium batteries have a much greater depth of discharge than deep cycle lead acid batteries making lithium batteries the equivalent of 2 or 3 similar capacity deep cycle lead acid batteries.

                            SolarKing lithium batteries incorporate advanced battery management systems “BMS” to maximise performance and protect the battery from over charge and over discharge.</p>
                    <a href="{{url('/batteries')}}" class="btn btn-customize2 mt-5">View Details</a>
                </div>
            </div>
        </div>

        <div class="section1">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="text-center"><strong>SolarKing Solar Panels
                        </strong></h3>

                   <p>Monocrystalline solar panels are a the most popular and efficient way of charging your storage batteries.
                   </p>
                    <p>SolarKing only uses quality A-Grade monocrystalline cells to produce our solar panels. SolarKing manufactures all sizes of solar panels in various voltages and wattage’s.
                    </p>
                    <p>All of our panels are supplied with hail resistant 3mm toughened glass.
                    </p>

                    <a href="{{url('/solar-panels')}}" class="btn btn-customize2">View Details</a>
                </div>
                <div class="col-sm-6">
                    <div class="imagestwo">
                        <picture>
                            <source srcSet="{{url('images/home/RV-Solar-Panel-Image-1.avif')}}" type="image/avif" />
                            <img src="{{url('images/home/RV-Solar-Panel-Image-1.jpg')}}" width="100%" height="100%"  class="image1" decoding="async" loading="lazy" alt="SolarKing lithium batteries"/>
                        </picture>
                    </div>
                </div>
            </div>
        </div>


        <div class="section6 mb-lg-5">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Where to buy</h2>
                    <p>SolarKing has dealers spread across Australia, select your countries to find your closest dealer or view more details.
                    </p>
                    <div class="text-center mt-lg-5 mb-lg-5">
                        <a href="{{url('product/where-to-buy')}}" class="btn btn-customize2">View Details</a>
                    </div>
                    <div class="col-sm-7 offset-sm-3">
                        <div class="mapBox group">
                            <ul class="map group">
                                <li class="stateACT"><a href="{{url('product/where-to-buy#where-act')}}" target="_blank" title="Australian Capital Territory"><span></span>
                                        <button class="btn btn-primary">ACT</button>
                                    </a></li>
                                <li class="stateQLD"><a href="{{url('product/where-to-buy#where-qld')}}" target="_blank" title="Queensland"><span></span>
                                        <button class="btn btn-primary">QLD</button>
                                    </a></li>
                                <li class="stateVIC"><a href="{{url('product/where-to-buy#where-vic')}}" target="_blank" title="Victoria"><span></span>
                                        <button class="btn btn-primary">VIC</button>
                                    </a></li>
                                <li class="stateNSW"><a href="{{url('product/where-to-buy#where-nsw')}}" target="_blank" title="New South Wales"><span></span>
                                        <button class="btn btn-primary">NSW</button>
                                    </a></li>
                                <li class="stateSA"><a href="{{url('product/where-to-buy#where-sa')}}" target="_blank" title="South Australia"><span></span>
                                        <button class="btn btn-primary">SA</button>
                                    </a></li>
                                <li class="stateWA"><a href="{{url('product/where-to-buy#where-wa')}}" target="_blank" title="Western Australia"><span></span>
                                        <button class="btn btn-primary">WA</button>
                                    </a></li>
                                <li class="stateNT"><a href="{{url('product/where-to-buy#where-nt')}}" target="_blank" title="Northern Territory"><span></span>
                                        <button class="btn btn-primary">NT</button>
                                    </a></li>
                                <li class="stateTAS"><a href="{{url('product/where-to-buy#where-tass')}}" target="_blank" title="Tasmania"><span></span>
                                        <button class="btn btn-primary">TAS</button>
                                    </a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

