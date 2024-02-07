<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link href="{{url('images/Solar-Fan-icon.png')}}" mce_href="favicon.ico" rel="bookmark" type="image/x-icon" />
    <link href="{{url('images/Solar-Fan-icon.png')}}" mce_href="favicon.ico" rel="icon" type="image/x-icon" />
    <link href="{{url('images/Solar-Fan-icon.png')}}" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="preload" href="/fonts/EloquiaDisplay_Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/EloquiaDisplay_Light.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/EloquiaDisplay_Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/EloquiaDisplay-SemiBoldItalic.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="/fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" type="font/woff2" crossorigin>

    <title>  @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="title" content="@yield('title')">
    <meta name="author" content="{{config('app.name')}}">
    <meta name="url" content="{{url()->current()}}">

    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:locale" content="en_AU" />
    <meta property="og:locale:alternate" content="en_AU" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{config('app.name')}}" />
    <meta property="og:type" content="@yield('og_type', 'website')" />

    <meta name="twitter:card" content="@yield('twitter_card', 'summary')" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:site" content="{{config('app.name')}}" />

    <meta property="article:modified_time" content="@yield('article_modified_time', data_get($latest_news, '0.updated_at'))" />
    <meta property="og:updated_time" content="@yield('og_updated_time', data_get($latest_news, '0.updated_at'))">
    <meta name="google-site-verification" content="PDm9s2sAYWVxvlzL3FfpAdc5lymHlR9FZcX3l1rXdj4" />
    <meta name="facebook-domain-verification" content="gwwgmh3pmqrypxuuq0882un6kvv5an" />

    @section('style')
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" id="app-async-css">
        <script>
            window.addEventListener('load', function() {
                var link = document.createElement('link');
                link.rel = 'stylesheet';
                link.type = 'text/css';
                link.href = '{{ mix('css/app.css') }}';
                document.getElementById('app-async-css').parentNode.insertBefore(link, document.getElementById('app-async-css'));
            });
        </script>
    @show

    @section('google')

    <!-- Global site tag (gtag.js) - Google Ads: 861711757 -->
        <script async defer src="https://www.googletagmanager.com/gtag/js?id=AW-861711757"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-861711757');
        </script>
        <script>
            function gtag_report_conversion(url) {
                var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-861711757/tdNMCIHf_8UBEI3b8poD', 'event_callback': callback }); return false; }
        </script>

    @show

<!-- Event snippet for Solarking Submit lead form conversion page -->
@if(Session::has('success') || Session::has('message'))
        <script> gtag('event', 'conversion', {'send_to': 'AW-861711757/qR0fCLOFs8QBEI3b8poD'}); </script>
@endif

</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFG255L"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="header">
    <div class="container">
        <div class="menu1">
            <div class="logo">
                <a href="{{url("/")}}">
                    <picture>
                        <source srcSet="{{url('images/Best-Solar-Exhaust-Fan-SolarKing.avif')}}" type="image/avif" />
                        <img src="{{url('images/Best-Solar-Exhaust-Fan-SolarKing.png')}}" width="350" height="106"   decoding="async" loading="lazy" alt="Solarking Logo"/>
                    </picture>
                </a>
            </div>
            <div class="menu1-right">
                <div class="search">
                    <div class="social">
                        <a href="https://www.facebook.com/SolarKingAU/?ref=br_rs" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient><path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path><path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UC9DucGZ9nAHAOV6hxdiXatQ" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                                <linearGradient id="PgB_UHa29h0TpFV_moJI9a_9a46bTk3awwI_gr1" x1="9.816" x2="41.246" y1="9.871" y2="41.301" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f44f5a"></stop><stop offset=".443" stop-color="#ee3d4a"></stop><stop offset="1" stop-color="#e52030"></stop></linearGradient><path fill="url(#PgB_UHa29h0TpFV_moJI9a_9a46bTk3awwI_gr1)" d="M45.012,34.56c-0.439,2.24-2.304,3.947-4.608,4.267C36.783,39.36,30.748,40,23.945,40	c-6.693,0-12.728-0.64-16.459-1.173c-2.304-0.32-4.17-2.027-4.608-4.267C2.439,32.107,2,28.48,2,24s0.439-8.107,0.878-10.56	c0.439-2.24,2.304-3.947,4.608-4.267C11.107,8.64,17.142,8,23.945,8s12.728,0.64,16.459,1.173c2.304,0.32,4.17,2.027,4.608,4.267	C45.451,15.893,46,19.52,46,24C45.89,28.48,45.451,32.107,45.012,34.56z"></path><path d="M32.352,22.44l-11.436-7.624c-0.577-0.385-1.314-0.421-1.925-0.093C18.38,15.05,18,15.683,18,16.376	v15.248c0,0.693,0.38,1.327,0.991,1.654c0.278,0.149,0.581,0.222,0.884,0.222c0.364,0,0.726-0.106,1.04-0.315l11.436-7.624	c0.523-0.349,0.835-0.932,0.835-1.56C33.187,23.372,32.874,22.789,32.352,22.44z" opacity=".05"></path><path d="M20.681,15.237l10.79,7.194c0.689,0.495,1.153,0.938,1.153,1.513c0,0.575-0.224,0.976-0.715,1.334	c-0.371,0.27-11.045,7.364-11.045,7.364c-0.901,0.604-2.364,0.476-2.364-1.499V16.744C18.5,14.739,20.084,14.839,20.681,15.237z" opacity=".07"></path><path fill="#fff" d="M19,31.568V16.433c0-0.743,0.828-1.187,1.447-0.774l11.352,7.568c0.553,0.368,0.553,1.18,0,1.549	l-11.352,7.568C19.828,32.755,19,32.312,19,31.568z"></path>
                            </svg>
                        </a>
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
                        <a href="tel: 1300 139 255" class="phone" onclick="return gtag_report_conversion('tel: 1300 139 255')">
                            <img style="width: 30px;" width="30", height="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEmklEQVR4nO2dW4iWRRiAnzU7bgcrKrPWoIMFeSHlTRFJF3UVHeiAhVlRbKUmdaWm4IUU0lUHO11EEQRFUrYdoIN2MoiCSIKMKEkzo3JNazcrcidG3p/dzX93v/n+bw7ffO8D7+XuPzPP7vf9M/POO6AoiqIoiqKkzxRgKfAp8CfwF7AJWA50x25c07gO+AUwY8TXwMmxG9kEJgOrxxExMjYCk2I3OGeOA94vKKMVC2M3OlfOkMeQcYwB+VmlQi6c4H0xUWwAuqpsUJOZJ9+eTIdxR+yO5MBtwL4KZLQeXafH7lCdub1CGa1Yr4+ucswFhiqW0QorWnHgfGDQkwwbe4DpLg1qMnZmvcOjjFa8GbujdeG1ADJacWvszqbOpQFl2PgNOCV2p1OmL7AQA7weu9Mp0x9BiAFuit3xVBmIJKRfl+nbsyWSECNfJpT/8UlEIQa4UY2M5rnIQnYCJ6mUYe6NLMQA96uQYeYkIORbFTLMocAfkYUMqJB4SyemTfysQkZzV2Qhb6uQ0ZwA/BNRyJ0q5EDWRZKxBzhKhRzI1ZGErFAZ7TkI+C6wjO3AESoknUniPJUxPkfLBlIIGZ9p/m8xVgQScrH+dxTjSJmo+ZSxVmW4cY9HGX8DZ6oQNw4pmfFeJB5XGWllo2yV8yZKCV71+A7pUiPuTAN2e5KyTIWUY6EnIfuAy1WKO/bw5oeepOwGzlUp7pzqMaFuO9CjUty5xpMQA3wpxQgUR572KOU92d9XHOj2OGE0wAuyDaA4cJ4sf/iS8qyuAruzyKMQI8srOnF05CnPUh4q8YfSaA4uUf/ENVbF7mTdsEnS2zxLWR27k3Vjlufj1AZ4TN8pbtzgseCAkXhCv325cZ9nIQZ4XgqpKQVZE0DKi7KjqRRcGX4pgJQNwDFqpBiHAR8EkLKpgwIENv/sbuBdWcUelMOvDwAn5ij6WFnB9S1lq+N+il2LWznBAaVfpSpSlnOUzQGk/A5cNUFbuqS87feO1SayKwHSE+gc/JBMINutf10CfF7y99q02l4yw5b3+yGAFCPZLK2NrhkVnnnpk4SPbDgb+CmQlC3Akx5OhO0CbiYjZnZYctYkEm9IjkEWnAP8mMCgVnEMrzeXPZsZAd8pvuOtXOpInibVG0wGYSeVS3JY+OwBvklgQKsKm0x4FjVnWqAZfaiwKwAL6v5umRJo7Stk2ByzqdR8QXJtAgNZZWyu+/VPk4BHExjIKsNu2tWeZQG2g0PFF2TCXLn9zdQ8bB+ySlndlsCgdnr+Jbs9lY8SGNiyYW+ry47JwCMJDG6ZsOf9s2VBRXdihYodTagDNivQtnCnYb8lXklDOBx4OIFBHy8epIFcK7t4JrF4p8nZldMDHIlwia/08Cr7V1Z7ZRcvpgybz6VVjkZg97lfiSRjL3DByMYow1wmj45QMv4Frh/x+coYx+0WBUg9svVa5rdrgNKebtnv7vck45YxPlcpIKa3wknl3lwTsmNsgl0BvNxB8QO7JDI7eMsbwPFy1/u6gvenDEmVCXtxgeIZe0TuImAx8AzwsZRdH5QM+D65iUhRFEVRFEUhZf4D55VjutmdYkIAAAAASUVORK5CYII=">
                            1300 139 255
                        </a>
                    </div>
                    <div class="contact-form">
                        <a class="btn btn-customize1" href="{{url("/contact")}}">
                            Send us a Message
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="logo">
                <a href="{{url("/")}}">
                    <picture>
                        <source srcSet="{{url('images/Best-Solar-Exhaust-Fan-SolarKing.avif')}}" type="image/avif" />
                        <img src="{{url('images/Best-Solar-Exhaust-Fan-SolarKing.png')}}" width="170" height="51"   decoding="async" loading="lazy" alt="{{config('app.name')}} Logo"/>
                    </picture>
                </a>
            </div>
            <div class="menu">
                <span  id="mobile-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                    <path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"></path>
                </svg>
                </span>
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
                                    <a href="{{url('/solar-ventilation')}}"
                                       class="{{Request::is('solar-ventilation') ? 'active' : ''}}">Solar Ventilation
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/batteries-large')}}"
                                       class="{{Request::is('batteries-large') ? 'active' : ''}}">Batteries Large
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('/batteries-small')}}"
                                       class="{{Request::is('batteries-small') ? 'active' : ''}}">Batteries Small
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

                                <li>
                                    <a href="{{url('/voltage-regulator')}}"
                                       class="{{Request::is('voltage-regulator') ? 'active' : ''}}">Voltage Regulator
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
                        <a href="https://www.facebook.com/SolarKingAU/?ref=br_rs" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50">
                                <path d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 25.832031 46 A 1.0001 1.0001 0 0 0 26.158203 46 L 31.832031 46 A 1.0001 1.0001 0 0 0 32.158203 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 41 C 44 42.668484 42.668484 44 41 44 L 33 44 L 33 30 L 36.820312 30 L 38.220703 23 L 33 23 L 33 21 C 33 20.442508 33.05305 20.398929 33.240234 20.277344 C 33.427419 20.155758 34.005822 20 35 20 L 38 20 L 38 14.369141 L 37.429688 14.097656 C 37.429688 14.097656 35.132647 13 32 13 C 29.75 13 27.901588 13.896453 26.71875 15.375 C 25.535912 16.853547 25 18.833333 25 21 L 25 23 L 22 23 L 22 30 L 25 30 L 25 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 32 15 C 34.079062 15 35.38736 15.458455 36 15.701172 L 36 18 L 35 18 C 33.849178 18 32.926956 18.0952 32.150391 18.599609 C 31.373826 19.104024 31 20.061492 31 21 L 31 25 L 35.779297 25 L 35.179688 28 L 31 28 L 31 44 L 27 44 L 27 28 L 24 28 L 24 25 L 27 25 L 27 21 C 27 19.166667 27.464088 17.646453 28.28125 16.625 C 29.098412 15.603547 30.25 15 32 15 z"></path>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UC9DucGZ9nAHAOV6hxdiXatQ" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50">
                                <path d="M 24.402344 9 C 17.800781 9 11.601563 9.5 8.300781 10.199219 C 6.101563 10.699219 4.199219 12.199219 3.800781 14.5 C 3.402344 16.898438 3 20.5 3 25 C 3 29.5 3.398438 33 3.898438 35.5 C 4.300781 37.699219 6.199219 39.300781 8.398438 39.800781 C 11.902344 40.5 17.898438 41 24.5 41 C 31.101563 41 37.097656 40.5 40.597656 39.800781 C 42.800781 39.300781 44.699219 37.800781 45.097656 35.5 C 45.5 33 46 29.402344 46.097656 24.902344 C 46.097656 20.402344 45.597656 16.800781 45.097656 14.300781 C 44.699219 12.101563 42.800781 10.5 40.597656 10 C 37.097656 9.5 31 9 24.402344 9 Z M 24.402344 11 C 31.601563 11 37.398438 11.597656 40.199219 12.097656 C 41.699219 12.5 42.898438 13.5 43.097656 14.800781 C 43.699219 18 44.097656 21.402344 44.097656 24.902344 C 44 29.199219 43.5 32.699219 43.097656 35.199219 C 42.800781 37.097656 40.800781 37.699219 40.199219 37.902344 C 36.597656 38.601563 30.597656 39.097656 24.597656 39.097656 C 18.597656 39.097656 12.5 38.699219 9 37.902344 C 7.5 37.5 6.300781 36.5 6.101563 35.199219 C 5.300781 32.398438 5 28.699219 5 25 C 5 20.398438 5.402344 17 5.800781 14.902344 C 6.101563 13 8.199219 12.398438 8.699219 12.199219 C 12 11.5 18.101563 11 24.402344 11 Z M 19 17 L 19 33 L 33 25 Z M 21 20.402344 L 29 25 L 21 29.597656 Z"></path>
                            </svg>
                        </a>
                    </div>
                    <form method="post" action="{{url('/search-products')}}">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="text" required name="keyword" placeholder="search" class="form-control">
                            <button type="submit" class="input-group-text">Search</button>
                        </div>
                    </form>
                    <a class="btn btn-customize1"
                          href="{{url("/contact")}}">
                        Send us a Message
                    </a>
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
                       {{-- <li>
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
                        </li>--}}

                        <li>
                            <a href="{{url('/solar-ventilation')}}"
                               class="{{Request::is('solar-ventilation') ? 'active' : ''}}">Solar Ventilation
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/batteries-large')}}"
                               class="{{Request::is('batteries-large') ? 'active' : ''}}">Batteries Large
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/batteries-small')}}"
                               class="{{Request::is('batteries-small') ? 'active' : ''}}">Batteries Small
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

                        <li>
                            <a href="{{url('/voltage-regulator')}}"
                               class="{{Request::is('voltage-regulator') ? 'active' : ''}}">Voltage Regulator
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
        <button class="btn btn-to-top">
            <img width="17", height="17" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABCElEQVR4nO2ZQWqDUBCGvzPlDC1R0jQ9QDcNhKQHbVal6QmaRQ/RZBENwiwej1GkC5kn/wcDojPP9/GrG0EIIcRMebIqmgq4WHXHRbIE/oDW6gqsKVyiLVGm6pFIZZ4pXKItQaYaKRFaZmVfpnSjN2fz+bmLzYagdpJogIMj8ubIdMlsokq82/VcpGMbTaZ2HqdUok9kSOZlaolHu3Euscv6+kSw3saReZjQgy9HYu/0DYlgM7nMJxNydF5s/iGCzaYyH0zIAvgGzsDrQN8YEWyNbq2TrR2OsSLhaSUSDCUSDSUSDSUSDSUSDSUSDSUSDSUSjdkkck4kfiiYGvi1KvZHjxBCiPlzByBF6fap882hAAAAAElFTkSuQmCC">

        </button>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-sm-3 footer-content">
                <a href="{{url('/')}}">
                    <picture>
                        <source srcSet="{{url('images/Best-Solar-Exhaust-Fan-SolarKing2.avif')}}" type="image/avif" />
                        <img src="{{url('images/Best-Solar-Exhaust-Fan-SolarKing2.png')}}" width="100%" height="100%"  alt="Solarking Logo" decoding="async" loading="lazy" />
                    </picture>
                </a>

                <ul class="list-inline">
                    <li><a href="https://www.facebook.com/SolarKingAU/?ref=br_rs" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50">
                                <path d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 25.832031 46 A 1.0001 1.0001 0 0 0 26.158203 46 L 31.832031 46 A 1.0001 1.0001 0 0 0 32.158203 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 41 C 44 42.668484 42.668484 44 41 44 L 33 44 L 33 30 L 36.820312 30 L 38.220703 23 L 33 23 L 33 21 C 33 20.442508 33.05305 20.398929 33.240234 20.277344 C 33.427419 20.155758 34.005822 20 35 20 L 38 20 L 38 14.369141 L 37.429688 14.097656 C 37.429688 14.097656 35.132647 13 32 13 C 29.75 13 27.901588 13.896453 26.71875 15.375 C 25.535912 16.853547 25 18.833333 25 21 L 25 23 L 22 23 L 22 30 L 25 30 L 25 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 32 15 C 34.079062 15 35.38736 15.458455 36 15.701172 L 36 18 L 35 18 C 33.849178 18 32.926956 18.0952 32.150391 18.599609 C 31.373826 19.104024 31 20.061492 31 21 L 31 25 L 35.779297 25 L 35.179688 28 L 31 28 L 31 44 L 27 44 L 27 28 L 24 28 L 24 25 L 27 25 L 27 21 C 27 19.166667 27.464088 17.646453 28.28125 16.625 C 29.098412 15.603547 30.25 15 32 15 z"></path>
                            </svg>
                        </a>
                    </li>
                    {{--<li><a href="https://twitter.com/satkingau" target="_blank" title="satking promax twitter"><i
                                    class="fa fa-twitter mr-3">&nbsp;</i></a></li>--}}
                    <li><a href="https://www.youtube.com/channel/UC9DucGZ9nAHAOV6hxdiXatQ" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50">
                                <path d="M 24.402344 9 C 17.800781 9 11.601563 9.5 8.300781 10.199219 C 6.101563 10.699219 4.199219 12.199219 3.800781 14.5 C 3.402344 16.898438 3 20.5 3 25 C 3 29.5 3.398438 33 3.898438 35.5 C 4.300781 37.699219 6.199219 39.300781 8.398438 39.800781 C 11.902344 40.5 17.898438 41 24.5 41 C 31.101563 41 37.097656 40.5 40.597656 39.800781 C 42.800781 39.300781 44.699219 37.800781 45.097656 35.5 C 45.5 33 46 29.402344 46.097656 24.902344 C 46.097656 20.402344 45.597656 16.800781 45.097656 14.300781 C 44.699219 12.101563 42.800781 10.5 40.597656 10 C 37.097656 9.5 31 9 24.402344 9 Z M 24.402344 11 C 31.601563 11 37.398438 11.597656 40.199219 12.097656 C 41.699219 12.5 42.898438 13.5 43.097656 14.800781 C 43.699219 18 44.097656 21.402344 44.097656 24.902344 C 44 29.199219 43.5 32.699219 43.097656 35.199219 C 42.800781 37.097656 40.800781 37.699219 40.199219 37.902344 C 36.597656 38.601563 30.597656 39.097656 24.597656 39.097656 C 18.597656 39.097656 12.5 38.699219 9 37.902344 C 7.5 37.5 6.300781 36.5 6.101563 35.199219 C 5.300781 32.398438 5 28.699219 5 25 C 5 20.398438 5.402344 17 5.800781 14.902344 C 6.101563 13 8.199219 12.398438 8.699219 12.199219 C 12 11.5 18.101563 11 24.402344 11 Z M 19 17 L 19 33 L 33 25 Z M 21 20.402344 L 29 25 L 21 29.597656 Z"></path>
                            </svg>
                        </a>
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

{{--<div class="modal fade" id="contact-form" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2><span class="fa fa-lock"></span> Send us a message
                </h2>
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
</div>--}}



</body>

<script  src="{{mix('js/app.js')}}"></script>
@yield('javascript')


{{--@section('facebook')
    <!--  Clickcease.com tracking--><script type="text/javascript">var script = document.createElement('script');
        script.async = true; script.defer = true; script.type = 'text/javascript';
        var target = 'https://www.clickcease.com/monitor/stat.js';
        script.src = target;var elem = document.head;elem.appendChild(script);</script>
    <noscript><a href="https://www.clickcease.com" rel="nofollow"><img src="https://monitor.clickcease.com/stats/stats.aspx" alt="ClickCease" /></a></noscript><!--  Clickcease.com tracking-->
@show--}}

{{--<script>
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        js.async = true;
        js.defer = true;
        fjs.parentNode.insertBefore(js, fjs);
        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };
        return t;
    }(document, "script", "twitter-wjs"));
</script>--}}


</html>
