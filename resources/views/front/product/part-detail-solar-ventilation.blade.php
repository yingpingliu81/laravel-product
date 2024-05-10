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
                <div class="col-sm-12">
                    <div class="desc">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <h2 class="mt-4 mb-2 text-center"><span class="fontLine">Advantages</span></h2>
                <div class="col-sm-4  ">
                    <div class="card  ">
                        <div class="picture">
                            <img src="{{url(data_get($product, 'images.0','images/Solar-whiz.jpg'))}}" alt="Solar Whiz">
                        </div>
                        <div class="card-header">Keep Your Home Comfortable</div>
                        <div class="card-body">
                            <p class="card-text"> In the hot Australian summer the SolarKing Exhaust Fan
                                extracts the dry and hot air in the roof. 20x
                                more air than a wind driven Whirly Bird and can reduce roof temperatures
                                by up to 30°. </p>
                            <p class="card-text"> During the cooler months, the thermostatic control of
                                SolarKing Exhaust Fan prevents heat loss and
                                retaining much needed warmth unlike whirly birds that continue to
                                run. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="card ">
                        <div class="picture">
                            <img class="card-img-top" src="{{url(data_get($product, 'images.1','images/SolarKing-Exhaust-Fan.jpg'))}}" alt="SolarKing Exhaust Fan">
                        </div>
                        <div class="card-header">Save Your Energy</div>
                        <div class="card-body">
                            <p class="card-text"> The SolarKing Exhaust Fan consumes free solar energy,
                                which means no running cost ever. </p>
                            <p class="card-text"> Also by reducing your roof temperature, your reliance
                                on air conditioning will reduce and lower your
                                energy bills. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="card  ">
                        <div class="picture">
                            <img class="card-img-top" src="{{url(data_get($product, 'images.2','images/SolarKing.jpg'))}}" alt="SolarKing">
                        </div>
                        <div class="card-header">Easy Installation and Superior Performance</div>
                        <div class="card-body">
                            <p class="card-text">The SolarKing Exhaust Fan can be self-installed or you can use one of our approved installers to do the job for you. Just a 320mm opening in the wall will be required.</p>
                            <p class="card-text">The brushless DC motor makes the operation quiet and assures the motor will have long life. Being brushless it is also far more efficient compared to other motors so the performance is better.</p>
                        </div>
                    </div>
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
            @if(in_array($product->sku, [6755]))
            <div class="row">
                <div class="col-xl-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/orVMSvPyGeo" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mI_nhy60Ltw" frameborder="0"></iframe>
                    </div>
                </div>


                <div class="col-xl-6 mt-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QqEZiKMleJQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="col-xl-6  mt-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/Dbv8BxWHjnY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

            <div class="-fx-image-gal mt-5">
                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/1/Solar-Roof-Vent-Perth.jpg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="{{url('images/product/gallery/Solar-Roof-ventilation-Solarking-4.jpg')}}">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->


                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-7.jpg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-12.jpg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-14.jpg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-15.jpg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/1/Solar-Roof-Vent-Installation-Solarking.jpg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/1/Solar-Roof-Vents-Australia.jpg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->


                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/399307406_844578147674040_6692929590226153849_n.jpg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->


                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/75380179_536426720256116_7872494613401960448_n.jpeg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/426507065_917840523681135_7316954368093865186_n.jpg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/gallery/download232344.jpeg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/165017540_866109803954471_1909091883708774098_n.jpeg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->


                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/130484021_805878483310937_561495197419026856_n.jpeg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

                <div class="-fx-gal-item">
                    <div class="-fx-gal-image-thumb" tabindex="1">
                        <a href="{{url('product/photo-gallery')}}">
                            <img src="../images/product/88134880_616677802231007_742450526645387264_n.jpeg">
                        </a>
                    </div>
                </div><!-- /-fx-gal-item -->

            </div>
            <div class="text-center mt-5">
                <a href="{{url('product/photo-gallery')}}" class="btn btn-customize2">Photo Gallery</a>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12 text-center">
                    <h2><strong>Where To Buy</strong></h2>
                    <p class="mt-5 mb-5">SolarKing has suppliers and installers spread across Australia, please check your
                        area to find your closest one.</p>
                </div>
                <div class="col-md-6 text-center mb-2">
                    <a href="{{url('product/where-to-buy')}}" title="solar fan suppliers,where to buy"  class="btn btn-customize2">
                        Check Your Local Suppliers</a>
                </div>
                <div class="col-md-6 text-center mb-2">
                    <a href="{{url('support/approved-installers')}}" title="solar fan installers"  class="btn btn-customize2">
                        Check Your Local Installers </a>
                </div>
            </div>

            <div class="row section7">
                <div class="col-sm-12 text-center mt-5 mb-5">
                    <h2><strong> They SAY</strong></h2>
                </div>

                <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                    <div class="card bg-light ">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <a href="../blogs/solar-roof-ventilation-fan-review-solarking">
                                                    <i class="fa fa-quote-left mr-2"></i> We installed a solar System
                                                    and solar fan last week,
                                                    both works fantastic the fan helps to take the heat out of the roof
                                                    and save even more on electricity
                                                    <i class="fa fa-quote-right ml-2"></i>
                                                </a>
                                                <p>&nbsp;</p>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <h5>- Derek, Adelaide</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                    <div class="card bg-light ">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <a href="../blogs/solar-roof-ventilation-fan-review-solarking">
                                                    <i class="fa fa-quote-left mr-2"></i> I have two in the house, tin
                                                    roof and beamed ceilings,
                                                    works awesomely. Have also got one installed in my welding bay and
                                                    it takes hot air and fumes
                                                    out. Absolutely fantastic and dropped weld bay temp by 10°c last
                                                    summer.
                                                    <i class="fa fa-quote-right ml-2"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <h5>- Carl Peter, WA</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                    <div class="card bg-light ">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <a href="../blogs/solar-roof-ventilation-fan-review-solarking">
                                                    <i class="fa fa-quote-left mr-2"></i> I have a house with exposed
                                                    beams and pine tongue and
                                                    groove ceiling so no gap as well and I installed one 7 years ago.
                                                    The best thing ever and air
                                                    conditioner actually cooled the house. I would highly recommend this
                                                    product.
                                                    <i class="fa fa-quote-right ml-2"></i>
                                                </a>


                                                <p>&nbsp;</p>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <h5>- Vikki Jose, QLD</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                    <div class="card bg-light ">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <a href="../blogs/solar-roof-ventilation-fan-review-solarking">
                                                    <i class="fa fa-quote-left mr-2"></i> I am monitoring the
                                                    improvements since fitting the 2
                                                    Solarking roof fans to my home to give others an idea of the change
                                                    the solar exhaust fans
                                                    have made.The house is 180Sqm single storey with a tile roof and 2
                                                    fans ...
                                                    <i class="fa fa-quote-right ml-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <h5>- David, Melbourne </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                    <div class="card bg-light ">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <a href="../blogs/solar-roof-ventilation-fan-review-solarking">
                                                    <i class="fa fa-quote-left mr-2"></i> I recently had two units
                                                    installed and I have to say
                                                    my wife and I felt an instant change in the temperature and feel of
                                                    the air inside our house.
                                                    Our 15 kw ducted aircon has struggled to keep our large open floor
                                                    plan cool from day one it
                                                    now feels cool light and airy with no aircon ...
                                                    <i class="fa fa-quote-right ml-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <h5>- Kevin, Qld </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                    <div class="card bg-light ">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <a href="../blogs/solar-roof-ventilation-fan-review-solarking">
                                                    <i class="fa fa-quote-left mr-2"></i> They are a good unit, They
                                                    have reduced our lounge temperature
                                                    (Cathedral Roof) by 8 -to 10 Degrees compared to the old Whirly bird
                                                    – No needed the aircon
                                                    this afternoon for the first time ever on a plus 30 degree day – its
                                                    good
                                                    <i class="fa fa-quote-right ml-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <h5>- Paul, South Brisbane </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                    <div class="card bg-light ">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <a href="../blogs/solar-roof-ventilation-fan-review-solarking">
                                                    <i class="fa fa-quote-left mr-2"></i> We had one installed just
                                                    before summer last October,
                                                    best investment ever, what was once hot, humid and stuffy to come
                                                    home to after being out all
                                                    day, the coolness and freshness is a dramatic difference
                                                    <i class="fa fa-quote-right ml-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <h5>-Donna </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2  col-md-8 offset-md-2">
                                    <div class="card bg-light ">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <a href="../blogs/solar-roof-ventilation-fan-review-solarking">
                                                    <i class="fa fa-quote-left mr-2"></i> I have one installed in my
                                                    garage. It’s a flat roof metal
                                                    garage and used to get very hot. The fan works wonders and is
                                                    certainly a big improvement.
                                                    To make it even better I have added a small solar controller and 12
                                                    volt battery ...
                                                    <i class="fa fa-quote-right ml-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <h5>- Craig, Canberra </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                <div class="col-md-12 text-center mt-5">
                    <a href="../blogs/solar-roof-ventilation-fan-review-solarking" title="batteries customers reviews" class="btn btn-customize2">
                        Reviews</a>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6 center">

                    <h2><span class="fontLine">Need Help?</span></h2>
                    <p class="mt-5 mb-5">
                        If you want to know more about our product (or) need help with finding your supplier. Please connect
                        with our Facebook page and we will respond to you as early as possible. </p>
                    <a href="https://www.facebook.com/SolarkingLithiumBattery" title="batteries facebook" target="_blank" class="btn btn-customize2">Connect With Facebook </a>
                </div>

                <div class="col-sm-6">
                    <img src="/images/Untitled-design-54-copy.jpg" class="w-100">
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-sm-6">
                    <div class="card  mb-3 bg-light">
                        <div class="picture">
                            <img class="card-img-top" src="../images/home/10000-CBM-1-.jpg" alt="Solar Whiz">
                        </div>

                        <div class="card-header "><a href="{{url('solar-ventilation/commercial-solar-roof-ventilation-fan-600mm-120w')}}" class="card-header-title">Solar Commercial Fan</a></div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card  mb-3 bg-light">
                        <div class="picture">
                            <img class="card-img-top" src="..//images/home/Untitled-design-87-.jpg" alt="SolarKing Exhaust Fan">
                        </div>
                        <div class="card-header"><a href="{{url('product/solar-wall-exhaust-fan')}}" class="card-header-title">Solar Wall Fan</a> </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center m-5"> Technical Support </h2>


                    <p>The SolarKing Fan comes with detailed instructions for self-installation or your local dealer can
                        install the unit for you
                        (charges apply). We can also recommend an installer for you in your location, just give us a
                        call on <a href="tel:1300 139 255">1300 139 255</a> or email us at <a href="mailTo:sales@solarking.net.au">sales@solarking.net.au</a>
                    </p>
                    <p>We also have dealers Australia wide that you can purchase from direct. You also may wish to have
                        the SolarKing Fan as standard
                        equipment when you order your van. Let your dealer know and they will organise with us or a
                        dealer directly for you. Your
                        SolarKing may have already been installed on your van when you purchased the vehicle, no
                        problems we will still give you
                        all the support you require just give us a call.
                    </p>
                    <p>For peace of mind, this SolarKing Fan is supported by SolarKing’s 1300 Helpline (4 staff) to
                        assist with your initial set up
                        and support as required along your travels. SolarKing is a large Australian owned company, we
                        are here to stay!
                    </p>


                </div>
            </div>
            @endif
        </div>
    </div>


    <div class="tab-pane fade" id="resources" role="tabpanel" aria-labelledby="resources-tab">
        <div class="specifications">
            <ul class="time-list">
                @if($product->downloads)
                    @foreach($product->downloads as $download)
                        <li class="time-item ">
                            <div class="name"><a title="Solar Roof Exhaust Fan brouchure" target="_blank" href="{{url($download)}}">PDF Download <span class="fa fa-download"></span></a>                                            </div>
                            <div class="date"> {{basename($download, ".pdf")}}
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>

</div>
