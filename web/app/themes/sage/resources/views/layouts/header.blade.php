<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#141414"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab:wght@100;700&family=Space+Mono:wght@100;400;700&display=swap" rel="stylesheet">

    @yield('styles')

    @stack('header.scripts')

    @php(wp_head())

</head>

<body @php(body_class()) >

@php(wp_body_open())

@php(do_action('get_header'))

<div id="app">
    <div id="panel"><!-- Needed for mobile menu. This is what slides when you click mobile menu button -->
        <div class="mobile-popout">
            <nav class="mobile-menu mobile">
                <div id="site-navigation">
                    <div class="mobile-menu__site-menu text-center" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <ul class="link-list">
                                <li class="link-list-item">
                                    <a href="#"  class="">
                                        About
                                    </a>
                                </li>
                                <li class="link-list-item">
                                    <a href="#"  class="hvr-bob">
                                        Portfolio
                                    </a>
                                </li>
                                <li class="link-list-item">
                                    <a href="#"  class="hvr-bob">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- MOBILE NAV -->

@include('partials.nav')
{{--        @include('partials.mega-nav')--}}
