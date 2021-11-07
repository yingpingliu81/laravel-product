<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{url('images/favicon.ico')}}" mce_href="favicon.ico" rel="bookmark" type="image/x-icon" />
    <link href="{{url('images/favicon.ico')}}" mce_href="favicon.ico" rel="icon" type="image/x-icon" />
    <link href="{{url('images/favicon.ico')}}" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title>  @yield('title') </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    @section('style')
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    @show
    @section('google')

        <meta name="google-site-verification" content="PDm9s2sAYWVxvlzL3FfpAdc5lymHlR9FZcX3l1rXdj4" />



        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134332138-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-134332138-4');
        </script>

        <!-- Global site tag (gtag.js) - Google Ads: 861711757 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-861711757"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-861711757');
        </script>
        <script>
            function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-861711757/tdNMCIHf_8UBEI3b8poD', 'event_callback': callback }); return false; }
        </script>
    @show

    @section('facebook')
    <!--  Clickcease.com tracking--><script type="text/javascript">var script = document.createElement('script');
            script.async = true; script.type = 'text/javascript';
            var target = 'https://www.clickcease.com/monitor/stat.js';
            script.src = target;var elem = document.head;elem.appendChild(script);</script>
        <noscript><a href="https://www.clickcease.com" rel="nofollow"><img src="https://monitor.clickcease.com/stats/stats.aspx" alt="ClickCease" /></a></noscript><!--  Clickcease.com tracking-->

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1056972611706760');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1056972611706760&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->

        <meta name="facebook-domain-verification" content="gwwgmh3pmqrypxuuq0882un6kvv5an" />
    @show


</head>
<body>

<script>
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };
        return t;
    }(document, "script", "twitter-wjs"));
</script>



<header class="header">
    <div class="container">
        <div class="menu1">
            <div class="logo">
                <a href="{{url("/")}}">
                    <img src="{{url('images/Best-Solar-Exhaust-Fan-SolarKing.png')}}" alt="Solarking Logo">
                </a>
            </div>
            <div class="menu1-right">
                <div class="search">
                    <div class="social">
                        <a href="https://www.facebook.com/SolarKingAU/?ref=br_rs" target="_blank"><i
                                    class="fa fa-facebook mr-3"></i></a>
                        <a href="https://www.youtube.com/channel/UC9DucGZ9nAHAOV6hxdiXatQ" target="_blank"><i
                                    class="fa fa-youtube mr-3"></i></a>
                    </div>
                    <form method="post" action="{{url('/search-products')}}">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="text" required name="keyword" placeholder="search" class="form-control">
                            <button type="submit" class="input-group-text">Search</button>
                        </div>
                    </form>
                </div>
                <div class="contact">
                    <div class="contact-phone">
                        <a href="tel: 1300 139 255" class="phone">
                            <i class="fa fa-phone"></i> 1300 139 255
                        </a>
                    </div>
                    <div class="contact-form">
                        <button class="btn btn-customize1" data-bs-toggle="modal"
                                data-bs-target="#contact-form">
                            Send us a Message
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="logo">
                <a href="{{url("/")}}">
                    <img src="{{url('images/Best-Solar-Exhaust-Fan-SolarKing.png')}}"
                         alt="{{config('app.name')}} Logo">
                </a>
            </div>
            <div class="menu">
                <span class="fa fa-bars" id="mobile-menu"></span>
                <div class="toggle" id="mobile-toggle">
                    <ul>
                        <li><a href="{{url('/')}}" class="{{Request::is('/') ? 'active' : ''}} ">Home</a></li>
                        <li>
                            <a href="{{url('about')}}" class="{{Request::is('about') ? 'active' : ''}}">About Us</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="{{Request::is('product/*') ? 'active' : ''}}">Product</a>
                            <span class="plus">+</span>
                            <ul class="sub">
                                <li>
                                    <a href="{{url('product/solar-roof-vent')}}"
                                       class="{{Request::is('product/solar-roof-vent') ? 'active' : ''}}">Solar Roof Vent
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/product/solar-wall-exhaust-fan')}}"
                                       class="{{Request::is('product/solar-wall-exhaust-fan') ? 'active' : ''}}">Solar Wall Fan
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/product/commercial-solar-roof-ventilation')}}"
                                       class="{{Request::is('product/commercial-solar-roof-ventilation') ? 'active' : ''}}">Commercial Solar Roof Vent
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/batteries')}}"
                                       class="{{Request::is('batteries') ? 'active' : ''}}">Batteries
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/solar-panels')}}"
                                       class="{{Request::is('solar-panels') ? 'active' : ''}}">Solar Panels
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/solar-regulators')}}"
                                       class="{{Request::is('solar-regulators') ? 'active' : ''}}">Solar Regulators
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/portable-power')}}"
                                       class="{{Request::is('portable-power') ? 'active' : ''}}">Portable Power
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/pure-sine-wave-inverters')}}"
                                       class="{{Request::is('pure-sine-wave-inverters') ? 'active' : ''}}">Inverters
                                    </a>
                                </li>

                            </ul>

                        </li>
                        <li>
                            <a href="javascript:;" class="{{Request::is('support/*') ? 'active' : ''}}">Support</a>
                            <span class="plus">+</span>
                            <ul class="sub">

                                <li>
                                    <a href="{{url('/support/technical-support')}}"
                                       class="{{Request::is('support/technical-support') ? 'active' : ''}}">Technical
                                        Support
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/support/faq')}}"
                                       class="{{Request::is('support/faq') ? 'active' : ''}}">FAQ
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/support/warranty-registration')}}"
                                       style="padding-right: 0 !important;"
                                       class="{{Request::is('support/warranty-registration') ? 'active' : ''}}">Warranty
                                        Registration</a>
                                </li>

                                <li>
                                    <a href="{{url('/support/approved-installers')}}"
                                       class="{{Request::is('support/approved-installers') ? 'active' : ''}}">Fan
                                        Installers
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="{{url('news')}}" class="{{Request::is('news*') ? 'active' : ''}}">News</a>
                        </li>
                        <li>
                            <a href="{{url('blogs')}}" class="{{Request::is('blogs*') ? 'active' : ''}}">Blog</a>
                        </li>

                        <li>
                            <a href="{{url('contact')}}" class="{{Request::is('contact') ? 'active' : ''}}">Contact</a>
                        </li>
                        <li>
                        <li>
                            <a href="javascript:;" class="{{Request::is('product/where-to-buy*') || Request::is('product/lithium-batteries-dealers*') ? 'active' : ''}}">Where To Buy</a>
                            <span class="plus">+</span>
                            <ul class="sub">
                                <li>
                                    <a href="{{url('product/where-to-buy')}}"
                                       class="{{Request::is('product/where-to-buy*') ? 'active' : ''}}">SolarFan
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/product/lithium-batteries-dealers')}}"
                                       class="{{Request::is('product/lithium-batteries-dealers*') ? 'active' : ''}}">lithium Batteries
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{url('support/approved-installers')}}"
                               class="{{Request::is('support/approved-installers*') ? 'active' : ''}}">Fan Installers</a>
                        </li>
                    </ul>
                    <div class="social">
                        <a href="https://www.facebook.com/SolarKingAU/?ref=br_rs" target="_blank"><i
                                    class="fa fa-facebook mr-3"></i></a>
                        <a href="https://www.youtube.com/channel/UC9DucGZ9nAHAOV6hxdiXatQ" target="_blank"><i
                                    class="fa fa-youtube mr-3"></i></a>
                    </div>
                    <form method="post" action="{{url('/search-products')}}">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="text" required name="keyword" placeholder="search" class="form-control">
                            <button type="submit" class="input-group-text">Search</button>
                        </div>
                    </form>
                    <div class="btn btn-customize1" data-bs-toggle="modal"
                         data-bs-target="#contact-form">
                        Send us a Message
                    </div>
                </div>
            </div>
        </div>
        <div class="menu2 container {{Request::is('/') ? 'menu-over' : ''}}">
            <ul>
                <li><a href="{{url('/')}}" class="{{Request::is('/') ? 'active' : ''}} ">Home</a></li>
                <li>
                    <a href="{{url('about')}}" class="{{Request::is('about') ? 'active' : ''}}">About Us</a>
                </li>
                <li>
                    <a href="javascript:;" class="{{Request::is('product/solar-roof-vent') || Request::is('product/commercial-solar-roof-ventilation') || Request::is('product/solar-wall-exhaust-fan') ||
                 Request::is('batteries') || Request::is('solar-panels') || Request::is('solar-regulators')
                 || Request::is('portable-power') || Request::is('pure-sine-wave-inverters') ? 'active' : ''}}">Product</a>
                    <ul class="sub">
                        <li>
                            <a href="{{url('product/solar-roof-vent')}}"
                               class="{{Request::is('product/solar-roof-vent') ? 'active' : ''}}">Solar Roof Vent
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/product/solar-wall-exhaust-fan')}}"
                               class="{{Request::is('product/solar-wall-exhaust-fan') ? 'active' : ''}}">Solar Wall Fan
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/product/commercial-solar-roof-ventilation')}}"
                               class="{{Request::is('product/commercial-solar-roof-ventilation') ? 'active' : ''}}">Commercial Solar Roof Vent
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/batteries')}}"
                               class="{{Request::is('batteries') ? 'active' : ''}}">Batteries
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/solar-panels')}}"
                               class="{{Request::is('solar-panels') ? 'active' : ''}}">Solar Panels
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/solar-regulators')}}"
                               class="{{Request::is('solar-regulators') ? 'active' : ''}}">Solar Regulators
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/portable-power')}}"
                               class="{{Request::is('portable-power') ? 'active' : ''}}">Portable Power
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/pure-sine-wave-inverters')}}"
                               class="{{Request::is('pure-sine-wave-inverters') ? 'active' : ''}}">Inverters
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="{{Request::is('support/*') ? 'active' : ''}}">Support</a>
                    <ul class="sub">

                        <li>
                            <a href="{{url('/support/technical-support')}}"
                               class="{{Request::is('support/technical-support') ? 'active' : ''}}">Technical Support
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/support/faq')}}" class="{{Request::is('support/faq') ? 'active' : ''}}">FAQ
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/support/warranty-registration')}}" style="padding-right: 0 !important;"
                               class="{{Request::is('support/warranty-registration') ? 'active' : ''}}">Warranty
                                Registration</a>
                        </li>

                        <li>
                            <a href="{{url('/support/approved-installers')}}"
                               class="{{Request::is('support/approved-installers') ? 'active' : ''}}">Fan
                                Installers
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="{{url('news')}}" class="{{Request::is('news*') ? 'active' : ''}}">News</a>
                </li>
                <li>
                    <a href="{{url('blogs')}}" class="{{Request::is('blogs*') ? 'active' : ''}}">Blog</a>
                </li>

                <li>
                    <a href="{{url('contact')}}" class="{{Request::is('contact') ? 'active' : ''}}">Contact</a>
                </li>
                <li>
                    <a href="javascript:;" class="{{Request::is('product/where-to-buy*') || Request::is('product/lithium-batteries-dealers*') ? 'active' : ''}}">Where To Buy</a>
                    <ul class="sub">
                        <li>
                            <a href="{{url('product/where-to-buy')}}"
                               class="{{Request::is('product/where-to-buy*') ? 'active' : ''}}">SolarFan
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/product/lithium-batteries-dealers')}}"
                               class="{{Request::is('product/lithium-batteries-dealers*') ? 'active' : ''}}">lithium Batteries
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{url('support/approved-installers')}}"
                       class="{{Request::is('support/approved-installers*') ? 'active' : ''}}">Fan Installers</a></li>
            </ul>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer">
    <div class="to-top">
        <button class="btn btn-to-top"><span class="fa fa-angle-up"></span></button></div>
    <div class="container">
        <div class="row">

            <div class="col-sm-3 footer-content">
                <a href="{{url('/')}}">
                    <img src="{{url('images/Roof-Ventilation-Fan-SolarKing.png')}}" alt="Solarking Logo">
                </a>

                <ul class="list-inline">
                    <li><a href="https://www.facebook.com/SolarKingAU/?ref=br_rs" target="_blank"> <i
                                    class="fa fa-facebook mr-3">&nbsp;</i> </a>
                    </li>
                    {{--<li><a href="https://twitter.com/satkingau" target="_blank" title="satking promax twitter"><i
                                    class="fa fa-twitter mr-3">&nbsp;</i></a></li>--}}
                    <li><a href="https://www.youtube.com/channel/UC9DucGZ9nAHAOV6hxdiXatQ" target="_blank"><i
                                    class="fa fa-youtube mr-3">&nbsp;</i></a>
                    </li>
                </ul>

            </div>
            <div class="col-sm-2">
                <div class="footer-link">
                    <h5 class="mb-3">Products</h5>
                    <p><a href="../product/solar-roof-vent">Solar Fan</a>
                    </p>
                    <p><a href="../product/photo-gallery">Photo Gallery</a>
                    </p>
                    <p><a href="../product/where-to-buy">Where To Buy</a>
                    </p>
                    <p><a href="../product/all-products">All Products</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="footer-link">
                    <h5 class="mb-3">Support</h5>
                    <p><a href="../support/technical-support">Technical Support</a>
                    </p>
                    <p><a href="../support/frequently-asked-quetions">FAQ</a>
                    </p>

                </div>
            </div>

            <div class="col-sm-2">
                <div class="footer-link">
                    <h5>Links</h5>
                    <p><a href="http://www.satking.com.au" target="_blank">SatKing</a>
                    </p>
                    <p><a href="http://www.satkingorbit.com.au" target="_blank">SatKing Orbit</a>
                    </p>
                    <p><a href="http://www.satkingpromax.com.au" target="_blank">Satking Promax</a>
                    </p>
                    <p><a href="http://www.phoenixtechnology.com.au/" target="_blank">Phoenix Technology</a>
                    </p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="footer-link">
                    <h5>Latest News</h5>
                    @foreach($latest_news as $item)
                        <p><a href="{{url('news/'.$item->slug)}}">{{$item->title}}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="copyright">Copyright &copy; Solarking {{date('Y')}}</p>
            </div>
        </div>
        <div id="site-scroll-top">
            <a title="To Top" href="#myPage">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
        </div>
    </div>
</footer>

<div class="modal fade" id="contact-form" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h1><span class="fa fa-lock"></span> Send us a message
                </h1>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('/contact')}}">
                    {{csrf_field()}}
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="inputEmail4">Name*</label>
                            <input type="text" name="name" value="{{old('name')}}" required class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="inputPassword4">Company</label>
                            <input type="text" name="company" value="{{old('company')}}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Email Address*</label>
                            <input type="email" name="email" value="{{old('email')}}" required class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Phone </label>
                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label class="form-label">Your Comments:* </label>
                            <textarea class="form-control" required name="message"
                                      rows="5">{{old('message')}}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-captcha mb-3 mt-4">
                                {!! htmlFormSnippet() !!}
                            </div>

                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-default pull-left" data-bs-dismiss="modal">
                    <span class="fa fa-remove"></span> Cancel
                </button>
            </div>
        </div>
    </div>
</div>



</body>

<script src="{{mix('js/app.js')}}"></script>
@yield('javascript')
{!! htmlScriptTagJsApi() !!}
</html>
