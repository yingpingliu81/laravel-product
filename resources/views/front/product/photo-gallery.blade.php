@extends('layouts.app')

@section('title', 'Roof Ventilation fan Products Gallery – SolarKing')

@section('description', 'Solar Roof Ventilation Fan extracts the dry and hot air in the Roof. Solar Roof Ventilation Fan makes your home much cooler & big difference to your indoor comfort level.')

@section('keywords', 'SolarKing, Solar Fan,Solar roof fan,Solar Roof Exhaust fan,Solar roof ventilation fan,Solar attic fan,Solar attic exhaust fan,Solarking Solar Fan,Solar Panels, Folding Solar Panels, Solar Regulators,Autosat, Sphere Dish, Automatic Dish, Satellite System, budget auto dish')
@section('style')
    @parent
    <link rel="stylesheet" href="{{url('css/lightbox.css')}}">
@endsection

@section('content')
    <div class="section-head" >
        <div class="container">
            <h2 class="left">Photo Gallery
            </h2>
            <h5 class="right"><a href="{{url('/')}}">Home</a> / <a href="{{url()->current()}}">Photo Gallery
                </a></h5>
        </div>
    </div>

    <section class="section">
        <div class="container" >
            <div class="product-detail">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" href="#description" type="button" role="tab" aria-controls="description" aria-selected="true">RV PHOTO GALLERY</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="features-tab" data-bs-toggle="tab" data-bs-target="#features"  href="#features" type="button" role="tab" aria-controls="features" aria-selected="true">PRODUCT PHOTO GALLERY</a>
                    </li>


                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="container">
                            <div class="row thumbnails ">
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/QQ-Photo20171207113540.jpg" data-title="Photo from David in Berwick Victoria" data-lightbox="gallery">
                                        <img alt="Photo from David in Berwick Victoria" src="../images/product/gallery/QQ-Photo20171207113540.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/QQ-Photo20171218124502.jpg" data-title="installed on a factory in Underwood QLD" data-lightbox="gallery"> <img alt="installed on a factory in Underwood QLD" src="../images/product/gallery/QQ-Photo20171218124502.jpg">                                            </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/Solar-fan-metal-roof-wide-shot.jpg" data-title="installed on a factory in Underwood QLD" data-lightbox="gallery"> <img alt="installed on a factory in Underwood QLD" src="../images/product/gallery/Solar-fan-metal-roof-wide-shot.jpg">                                            </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/IMG_20180821_114636.jpg" data-title="Install done in WA by Paul from Attic Lad" data-lightbox="gallery"> <img alt="Install done in WA by Paul from Attic Lad" src="../images/product/gallery/IMG_20180821_114636.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/IMG_20180821_114536.jpg" data-title="Solar Fan fitted in Perth by Attic Lad, Paul" data-lightbox="gallery"> <img alt="Solar Fan fitted in Perth by Attic Lad, Paul" src="../images/product/gallery/IMG_20180821_114536.jpg">                                            </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/IMG_20180919_141542.jpg" data-title="Install done in WA by Paul from Attic Lad" data-lightbox="gallery"> <img alt="Install done in WA by Paul from Attic Lad" src="../images/product/gallery/IMG_20180919_141542.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/IMG_20180919_141406.jpg" data-title="Install done in WA by Paul from Attic Lad" data-lightbox="gallery"> <img alt="Install done in WA by Paul from Attic Lad" src="../images/product/gallery/IMG_20180919_141406.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/Weipa-Install.jpg" data-title="Mick from Cairns Total Roof Supplies with 2 units installed in Weipa QLD." data-lightbox="gallery"> <img alt="Mick from Cairns Total Roof Supplies with 2 units installed in Weipa QLD." src="../images/product/gallery/Weipa-Install.jpg">                                            </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/others/IMG_1359.jpg" data-title="Shaun Beattie from Griffin QLD" data-lightbox="gallery"> <img alt="Shaun Beattie from Griffin QLD" src="../images/others/IMG_1359.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/large-install.jpg" data-title="installed at a Bathurst Retiement village to improve quality of space for retirees " data-lightbox="gallery"> <img alt="installed at a Bathurst Retiement village to improve quality of space for retirees " src="../images/product/gallery/large-install.jpg">                                            </a>
                                </div>
                            </div>
                            <div class="row thumbnails ">
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/Untitled.jpg" data-title="Mick from Cairns Total Roof Supplies with 2 units installed in Weipa QLD" data-lightbox="gallery"> <img alt="Mick from Cairns Total Roof Supplies with 2 units installed in Weipa QLD" src="../images/product/gallery/Untitled.jpg">                                            </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/IMG_20181017_103841.jpg" data-title="jobs installed by Paul from “Attic Lad” in Perth" data-lightbox="gallery"> <img alt="jobs installed by Paul from “Attic Lad” in Perth" src="../images/product/gallery/IMG_20181017_103841.jpg">                                            </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/IMG_20181017_155116.jpg" data-title="jobs installed by Paul from “Attic Lad” in Perth" data-lightbox="gallery"> <img alt="jobs installed by Paul from “Attic Lad” in Perth" src="../images/product/gallery/IMG_20181017_155116.jpg">                                            </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/others/Rick4.jpg" data-title="5 units on a 130ft long x 40Ft wide Shed installed by Rick" data-lightbox="gallery">
                                        <img alt="5 units on a 130ft long x 40Ft wide Shed installed by Rick" src="../images/others/Rick4.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/others/Rick3.jpg" data-title="5 units on a 130ft long x 40Ft wide Shed by installed Rick" data-lightbox="gallery">
                                        <img alt="5 units on a 130ft long x 40Ft wide Shed installed by Rick" src="../images/others/Rick3.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/others/MVIMG_20181129_112645_1.jpg" data-title="installed across Perth" data-lightbox="gallery">
                                        <img alt="installed across Perth" src="../images/others/MVIMG_20181129_112645_1.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/others/MVIMG_20181129_102521.jpg" data-title="installed across Perth" data-lightbox="gallery"> <img alt="installed across Perth" src="../images/others/MVIMG_20181129_102521.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/20190204_150054.jpg" data-title="Paul Attic Lad WA" data-lightbox="gallery"> <img alt="Paul Attic Lad WA" src="../images/product/gallery/20190204_150054.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/solar-fan-van-1.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/solar-fan-van-1.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/territory-refridgeration-Service-Install-Katherine-NT.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/territory-refridgeration-Service-Install-Katherine-NT.jpg"> </a>
                                </div>
                            </div>
                            <div class="row thumbnails ">
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Vent-Perth.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/1/Solar-Roof-Vent-Perth.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/Solar-Roof-Ventilation-Solarking-3.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-3.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/Solar-Roof-Ventilation-Solarking-4.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-4.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/Solar-Roof-Ventilation-Solarking-7.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-7.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/Solar-Roof-Ventilation-Solarking-12.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-12.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/Solar-Roof-Ventilation-Solarking-14.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-14.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/Solar-Roof-Ventilation-Solarking-15.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/Solar-Roof-Ventilation-Solarking-15.jpg"> </a>
                                </div>
                            </div>
                            <div class="row thumbnails ">
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Powered-Whirlybird-Sydney-Solarking.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Powered-Whirlybird-Sydney-Solarking.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Vent-Metal-Roof-Solarking-Brisbane.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Vent-Metal-Roof-Solarking-Brisbane.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Ventilation-Colorbond-Solarking.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Ventilation-Colorbond-Solarking.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Ventilation-Fan-Tiled-Roof-Reviews-Solarking.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Ventilation-Fan-Tiled-Roof-Reviews-Solarking.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Ventilation-Solarking-Qld.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Ventilation-Solarking-Qld.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Whirlybird-Solarking-Melbourne.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Whirlybird-Solarking-Melbourne.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solarking-Perth-Solar-Roof-Vent.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/1/Solarking-Perth-Solar-Roof-Vent.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solarking-Solar-Roof-Fan-Reviews.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/1/Solarking-Solar-Roof-Fan-Reviews.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solarking-Solar-Roof-Ventilation-Reviews.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solarking-Solar-Roof-Ventilation-Reviews.jpg"> </a>
                                </div>
                            </div>
                            <div class="row thumbnails ">
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Fan-Installers.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/1/Solar-Roof-Fan-Installers.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Vent-Metal-Roof-Solarking-Australia.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Vent-Metal-Roof-Solarking-Australia.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Ventilation-Installer-Coffsharbour-1.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Ventilation-Installer-Coffsharbour-1.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Ventilation-Tile-Roof-Brisbane.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Ventilation-Tile-Roof-Brisbane.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solarking-Cairns-Installer-Solar-Roof-Ventilation.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solarking-Cairns-Installer-Solar-Roof-Ventilation.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solarking-Roof-Ventilation-Brisbane.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solarking-Roof-Ventilation-Brisbane.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Vent-Vs-WhirlyBird-Australia.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Vent-Vs-WhirlyBird-Australia.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Metal.png" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/1/Metal.png"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Ventilation-Installation-Solarking.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Ventilation-Installation-Solarking.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solarking-Solar-Roof-Vent-Installer-Perth.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solarking-Solar-Roof-Vent-Installer-Perth.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/82257995_115090356691095_2153571630998093824_o.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/82257995_115090356691095_2153571630998093824_o.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/83290500_115089430024521_8631745029179703296_o.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/83290500_115089430024521_8631745029179703296_o.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Vent-For-Metal-Roof-Solarking.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Vent-For-Metal-Roof-Solarking.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solar-Roof-Vent-Vs-Whirlybird-Australia-Solarking.jpg" data-title="" data-lightbox="gallery">
                                        <img alt="" src="../images/product/gallery/1/Solar-Roof-Vent-Vs-Whirlybird-Australia-Solarking.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/New Crousal 3.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/1/New Crousal 3.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/1/Solarking-Perth-Solar-Roof-Vent.jpg" data-title="" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/1/Solarking-Perth-Solar-Roof-Vent.jpg"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/2/IMG_1520.JPG" data-title="Installation in Port Stephens, by Banney’s Roofing Services in NELSON Bay, NSW" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/2/IMG_1520.JPG"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/2/IMG_1523.JPG" data-title="Installation in Port Stephens, by Banney’s Roofing Services in NELSON Bay, NSW" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/2/IMG_1523.JPG"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/2/IMG_1525.JPG" data-title="Installation in Port Stephens, by Banney’s Roofing Services in NELSON Bay, NSW" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/2/IMG_1525.JPG"> </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="../images/product/gallery/2/IMG_1532.JPG" data-title="Installation in Port Stephens, by Banney’s Roofing Services in NELSON Bay, NSW" data-lightbox="gallery"> <img alt="" src="../images/product/gallery/2/IMG_1532.JPG"> </a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="../images/others/image004.jpg" data-lightbox="gallery"> <img alt="" src="../images/others/image004.jpg"> </a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="../images/others/image005.jpg" data-lightbox="gallery"> <img alt="" src="../images/others/image005.jpg"> </a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="../images/others/image006.jpg" data-lightbox="gallery"> <img alt="" src="../images/others/image006.jpg"> </a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="../images/others/Solarking-Lithium-Iron-LiFePo4-Batteries.jpeg" data-lightbox="gallery"> <img alt="" src="../images/others/image006.jpg"> </a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="../images/others/IMG_4593.jpg" data-lightbox="gallery"> <img alt="" src="../images/others/image006.jpg"> </a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="../images/others/162051065_267935894906656_957549091558253719_n.jpeg" data-lightbox="gallery"> <img alt="" src="../images/others/image006.jpg"> </a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="../images/others/264716290_437927977907446_3482980661139205586_n.jpeg" data-lightbox="gallery"> <img alt="" src="../images/others/image006.jpg"> </a>
                                </div>

                                <div class="col-sm-4">
                                    <a href="../images/others/199788791_320323986334513_9206544923835838431_n.jpeg" data-lightbox="gallery"> <img alt="" src="../images/others/image006.jpg"> </a>
                                </div>



                                <div class="col-sm-4">
                                    <a href="../images/others/57296990_257902089243370_4586025178591549337_n.jpeg" data-lightbox="gallery"> <img alt="" src="../images/others/image006.jpg"> </a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/orVMSvPyGeo" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mI_nhy60Ltw" frameborder="0"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QqEZiKMleJQ" frameborder="0"  allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j4PlM51Guz0" frameborder="0"  allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/K6Xrvb8Zluc" frameborder="0"  allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </section>
@endsection

@section('javascript')
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/lightbox.min.js')}}"></script>
@endsection
