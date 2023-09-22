<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- Font --}}
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- JQuery --}}
    <script src="{{ asset('jquery-3.6.4.min.js') }}"></script>

    {{-- CSS --}}
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

    {{-- Bootstrap --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top pt-0 pb-0" id="Navbar">
        <div class="container-fluid justify-content-between">
            @auth
                <button class="zxc btn btn-outline-warning me-4" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="bi bi-list"></i>
                </button>
            @endauth
            <button class="asd navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="navbar-toggler-icon"></i>
            </button>
            
            <button class="asd navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="navbar-toggler-icon"></i>
        </button>
        <div class="d-flex">
            <div class="col-2 mt-2">
                <a class="navbar-brand" href="{{ url('/') }}"><img
                        src="{{ URL('images/Logo PT.Achivon.png') }}" alt="My Icon" width="45px"></a>
            </div>
            <div class="col-10">
                <h1 class="fs-5 fw-bold mt-3">PT. <span class="text-danger fs-5"> Achivon</span> Prestasi Abadi</h1>
            </div>
        </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mt-1 ms-2">
                        <a id="menuHome1"
                            class="nav-link text-center fs-6 fw-bold {{ request()->segment(1) == '' || request()->segment(1) == 'home' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/') }}"><i class="bi bi-newspaper"></i> {{ __('message.navHome') }}</a>
                    </li>
                    <li class="nav-item mt-1 ms-2">
                        <a id="menuBusiness1"
                            class="nav-link text-center fs-6 fw-bold {{ request()->segment(1) == 'business' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/business') }}"><i class="bi bi-briefcase-fill"></i>
                            {{ __('message.navBusiness') }}</a>
                    </li>
                    <li class="nav-item mt-1 ms-2 dropdown">
                        <a class="nav-link dropdown-toggle text-center fs-6 fw-bold {{ request()->segment(1) == 'Recruitment' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/Recruitment/Register') }}" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-people-fill"></i>
                            {{ __('message.navRekrut') }}</a>
                        <ul class="mydropdown dropdown-menu dropdown-menu-dark border-1 rounded-1">
                            <li><a class="dropdown-item fs-6 {{ request()->segment(2) == 'announcement' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/recruitment/announcement') }}">{{ __('message.navRekrut0') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fs-6 {{ request()->segment(2) == 'register' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/recruitment/register') }}">{{ __('message.navRekrut1') }}</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fs-6 {{ request()->segment(2) == 'editdata' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/recruitment/editdata') }}">{{ __('message.navRekrut2') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mt-1 ms-2">
                        <a class="nav-link text-center fs-6 fw-bold {{ request()->segment(1) == 'contactus' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/contactus') }}"><i class="bi bi-person-vcard-fill"></i>
                            {{ __('message.navKontak') }}</a>
                    </li>
                    <li class="nav-item mt-1 ms-2">
                        <a class="nav-link fw-bold fs-6 text-center {{ session('locale') == 'id' ? 'border-2 border-bottom border-primary' : '' }}"
                            aria-current="page" href="{{ url('/switch/id') }}"><img
                                src="{{ URL('images/indonesia.png') }}" alt="My Icon" width="15px"
                                style="margin-top: -3px;"> IND</a>
                    </li>
                    <li class="nav-item mt-1 ms-2">
                        <a class="nav-link fw-bold fs-6 text-center {{ session('locale') == 'en' ? 'border-2 border-bottom border-primary' : '' }}"
                            aria-current="page" href="{{ url('/switch/en') }}"><img
                                src="{{ URL('images/united-kingdom.png') }}" alt="My Icon" width="15px"
                                style="margin-top: -3px;"> ENG</a>
                    </li>
                    <li class="nav-item mt-1 ms-2">
                        <a class="nav-link fw-bold fs-6 text-center {{ request()->segment(1) == 'maps' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/maps/cilegon') }}"><i class="bi bi-geo-alt-fill"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- second-navbar --}}
    <nav class="navbar2 navbar navbar-expand-lg shadow-lg mt-5 mb-5 bg-body-primary py-0 fixed-top" id="Navbar2">
        <div class="container-fluid">
            @auth
                <button class="zxc btn btn-outline-warning" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="bi bi-list"></i>
                </button>
            @endauth
            <!-- <div class="myDesktop collapse navbar-collapse justify-content-center" id="navbarSupportedContent2">
                {{-- @if (request()->segment(1) == '' || request()->segment(1) == 'home') --}}
                <ul class="navbar-nav mb-2 mb-lg-0" id="homeMenu1">
                    <li class="nav-item mt-2 ms-2">
                        <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'ceo' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/home/ceo') }}">{{ __('message.navHome1.1') }}</a>
                    </li>
                    <li class="nav-item mt-2 ms-2">
                        <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'information' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/home/information') }}">{{ __('message.navHome1.2') }}</a>
                    </li>
                    <li class="nav-item mt-2 ms-2">
                        <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'history' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/home/history') }}">{{ __('message.navHome1.3') }}</a>
                    </li>
                    <li class="nav-item mt-2 ms-2">
                        <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'location' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/home/location') }}">{{ __('message.navHome1.4') }}</a>
                    </li>
                    <li class="nav-item mt-2 ms-2">
                        <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'vision' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/home/vision') }}">{{ __('message.navHome1.5') }}</a>
                    </li>
                    <li class="nav-item mt-2 ms-2">
                        <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'mission' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/home/mission') }}">{{ __('message.navHome1.6') }}</a>
                    </li>
                    <li class="nav-item mt-2 ms-2">
                        <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'resource' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/home/resource') }}">{{ __('message.navHome1.7') }}</a>
                    </li>
                    <li class="nav-item mt-2 ms-2">
                        <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'operationsoftware' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="{{ url('/home/operationsoftware') }}">{{ __('message.navHome1.8') }}</a>
                    </li>
                </ul>
                {{-- @elseif (request()->segment(1) == 'business') --}}
                <ul class="navbar-nav mb-2 mb-lg-0" id="businessMenu1">
                    <li class="nav-item mt-2 ms-2 dropdown">
                        <a id="dropdownEngineering"
                            class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'engineering' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="#" role="button"
                            data-bs-toggle="dropdown">{{ __('message.navBusiness1.1') }}</a>
                        <ul class="dropdown-menu dropdown-menu-light rounded-1">
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                            </li>
                            {{-- <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/firefighting')}}">{{ __("message.navBusiness2.4") }}</a></li>
                                    <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/paint')}}">{{ __("message.navBusiness2.5") }}</a></li>
                                    <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/insulation')}}">{{ __("message.navBusiness2.6") }}</a></li>
                                    <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item mt-2 ms-2 dropdown">
                        <a id="dropdownProcurement"
                            class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'procurement' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="#" role="button"
                            data-bs-toggle="dropdown">{{ __('message.navBusiness1.2') }}</a>
                        <ul class="dropdown-menu dropdown-menu-light rounded-1">
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/firefighting') }}">{{ __('message.navBusiness2.4') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/paint') }}">{{ __('message.navBusiness2.5') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/insulation') }}">{{ __('message.navBusiness2.6') }}</a>
                            </li>
                            {{-- <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item mt-2 ms-2 dropdown">
                        <a id="dropdownFabrication"
                            class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'fabrication' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="#" role="button"
                            data-bs-toggle="dropdown">{{ __('message.navBusiness1.3') }}</a>
                        <ul class="dropdown-menu dropdown-menu-light rounded-1">
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/firefighting') }}">{{ __('message.navBusiness2.4') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/paint') }}">{{ __('message.navBusiness2.5') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/insulation') }}">{{ __('message.navBusiness2.6') }}</a>
                            </li>
                            {{-- <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item mt-2 ms-2 dropdown">
                        <a id="dropdownConstruction"
                            class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'construction' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="#" role="button"
                            data-bs-toggle="dropdown">{{ __('message.navBusiness1.4') }}</a>
                        <ul class="dropdown-menu dropdown-menu-light rounded-1">
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/firefighting') }}">{{ __('message.navBusiness2.4') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/paint') }}">{{ __('message.navBusiness2.5') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/insulation') }}">{{ __('message.navBusiness2.6') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/mechanicalequipment') }}">{{ __('message.navBusiness2.7') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mt-2 ms-2 dropdown">
                        <a id="dropdownMaintenance"
                            class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'maintenance' ? 'border-2 border-bottom border-primary' : '' }}"
                            href="#" role="button"
                            data-bs-toggle="dropdown">{{ __('message.navBusiness1.5') }}</a>
                        <ul class="dropdown-menu dropdown-menu-light rounded-1">
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/firefighting') }}">{{ __('message.navBusiness2.4') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/paint') }}">{{ __('message.navBusiness2.5') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/insulation') }}">{{ __('message.navBusiness2.6') }}</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider py-0">
                            </li>
                            <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}"
                                    href="{{ url('/business/engineering/mechanicalequipment') }}">{{ __('message.navBusiness2.7') }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>

 nvv mobile 

                {{-- @else --}}
                <ul class="navbar-nav mb-2 mb-lg-0 p-3">
                    <li class="nav-item mt-2 ms-2">
                        {{-- <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'engineering' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering')}}">{{ __("message.navBusiness1.1") }}</a> --}}
                    </li>
                </ul>
                {{-- @endif --}}
                {{-- tertgsr terrtvsfv --}}
            </div> -->
            <div class="myMobile collapse navbar-collapse justify-content-center" id="navbarSupportedContent2">
                @if (request()->segment(1) == '' || request()->segment(1) == 'home')
                    <ul class="navbar-nav mb-2 mb-lg-0" id="homeMenu">
                        <li class="nav-item mt-2 ms-2">
                            <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'ceo' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="{{ url('/home/ceo') }}">{{ __('message.navHome1.1') }}</a>
                        </li>
                        <li class="nav-item mt-2 ms-2">
                            <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'information' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="{{ url('/home/information') }}">{{ __('message.navHome1.2') }}</a>
                        </li>
                        <li class="nav-item mt-2 ms-2">
                            <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'history' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="{{ url('/home/history') }}">{{ __('message.navHome1.3') }}</a>
                        </li>
                        <li class="nav-item mt-2 ms-2">
                            <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'location' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="{{ url('/home/location') }}">{{ __('message.navHome1.4') }}</a>
                        </li>
                        <li class="nav-item mt-2 ms-2">
                            <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'vision' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="{{ url('/home/vision') }}">{{ __('message.navHome1.5') }}</a>
                        </li>
                        <li class="nav-item mt-2 ms-2">
                            <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'mission' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="{{ url('/home/mission') }}">{{ __('message.navHome1.6') }}</a>
                        </li>
                        <li class="nav-item mt-2 ms-2">
                            <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'resource' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="{{ url('/home/resource') }}">{{ __('message.navHome1.7') }}</a>
                        </li>
                        <li class="nav-item mt-2 ms-2">
                            <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'operationsoftware' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="{{ url('/home/operationsoftware') }}">{{ __('message.navHome1.8') }}</a>
                        </li>
                    </ul>
                @elseif (request()->segment(1) == 'business')
                    <ul class="navbar-nav mb-2 mb-lg-0" id="businessMenu">
                        <li class="nav-item mt-2 ms-2 dropdown">
                            <a id="dropdownEngineering"
                                class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'engineering' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="#" role="button"
                                data-bs-toggle="dropdown">{{ __('message.navBusiness1.1') }}</a>
                            <ul class="dropdown-menu dropdown-menu-light rounded-1">
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                                </li>
                                {{-- <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/firefighting')}}">{{ __("message.navBusiness2.4") }}</a></li>
                                    <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/paint')}}">{{ __("message.navBusiness2.5") }}</a></li>
                                    <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/insulation')}}">{{ __("message.navBusiness2.6") }}</a></li>
                                    <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item mt-2 ms-2 dropdown">
                            <a id="dropdownProcurement"
                                class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'procurement' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="#" role="button"
                                data-bs-toggle="dropdown">{{ __('message.navBusiness1.2') }}</a>
                            <ul class="dropdown-menu dropdown-menu-light rounded-1">
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/firefighting') }}">{{ __('message.navBusiness2.4') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/paint') }}">{{ __('message.navBusiness2.5') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/insulation') }}">{{ __('message.navBusiness2.6') }}</a>
                                </li>
                                {{-- <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item mt-2 ms-2 dropdown">
                            <a id="dropdownFabrication"
                                class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'fabrication' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="#" role="button"
                                data-bs-toggle="dropdown">{{ __('message.navBusiness1.3') }}</a>
                            <ul class="dropdown-menu dropdown-menu-light rounded-1">
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/firefighting') }}">{{ __('message.navBusiness2.4') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/paint') }}">{{ __('message.navBusiness2.5') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/insulation') }}">{{ __('message.navBusiness2.6') }}</a>
                                </li>
                                {{-- <li><hr class="dropdown-divider py-0"></li>
                                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item mt-2 ms-2 dropdown">
                            <a id="dropdownConstruction"
                                class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'construction' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="#" role="button"
                                data-bs-toggle="dropdown">{{ __('message.navBusiness1.4') }}</a>
                            <ul class="dropdown-menu dropdown-menu-light rounded-1">
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/firefighting') }}">{{ __('message.navBusiness2.4') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/paint') }}">{{ __('message.navBusiness2.5') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/insulation') }}">{{ __('message.navBusiness2.6') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/mechanicalequipment') }}">{{ __('message.navBusiness2.7') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mt-2 ms-2 dropdown">
                            <a id="dropdownMaintenance"
                                class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'maintenance' ? 'border-2 border-bottom border-primary' : '' }}"
                                href="#" role="button"
                                data-bs-toggle="dropdown">{{ __('message.navBusiness1.5') }}</a>
                            <ul class="dropdown-menu dropdown-menu-light rounded-1">
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/steelstructure') }}">{{ __('message.navBusiness2.1') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/tank') }}">{{ __('message.navBusiness2.2') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/piping') }}">{{ __('message.navBusiness2.3') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/firefighting') }}">{{ __('message.navBusiness2.4') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/paint') }}">{{ __('message.navBusiness2.5') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/insulation') }}">{{ __('message.navBusiness2.6') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider py-0">
                                </li>
                                <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}"
                                        href="{{ url('/business/engineering/mechanicalequipment') }}">{{ __('message.navBusiness2.7') }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav mb-2 mb-lg-0 p-3">
                        <li class="nav-item mt-2 ms-2">
                            {{-- <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'engineering' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering')}}">{{ __("message.navBusiness1.1") }}</a> --}}
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
    @auth
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images,
                    lists, etc.
                </div>
                <div class="dropdown mt-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endauth
    <br><br><br><br><br>
    @if (session()->has('succes'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <center>{{ session('succes') }}</center>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session()->has('fail'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <center>{{ session('fail') }}</center>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mycontainer">

        @yield('mycontent')
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/hoverintent/1.10.1/jquery.hoverIntent.min.js"></script> --}}
    <script>
        window.addEventListener('load', function() {
            function updateNavigation() {
                var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body
                    .clientWidth;

                var navMobile = document.querySelector('.myMobile');
                var navDesktop = document.querySelector('.myDesktop');
                if (screenWidth > 1023) {
                    if (navDesktop) {
                        navMobile.remove();
                        var menuHome = document.getElementById("menuHome1");
                        var homeMenu = document.getElementById("homeMenu1");

                        var menuBusiness = document.getElementById("menuBusiness1");
                        var businessMenu = document.getElementById("businessMenu1");

                        menuHome.addEventListener("mouseover", function() {
                            homeMenu.classList.add("show");
                        });
                        menuHome.addEventListener("mouseout", function() {
                            homeMenu.classList.remove("show");
                        });

                        homeMenu.addEventListener("mouseover", function() {
                            homeMenu.classList.add("show");
                        });
                        homeMenu.addEventListener("mouseout", function() {
                            homeMenu.classList.remove("show");
                        });

                        menuBusiness.addEventListener("mouseover", function() {
                            businessMenu.classList.add("show");
                        });
                        menuBusiness.addEventListener("mouseout", function() {
                            businessMenu.classList.remove("show");
                        });

                        businessMenu.addEventListener("mouseover", function() {
                            businessMenu.classList.add("show");
                        });
                        businessMenu.addEventListener("mouseout", function() {
                            businessMenu.classList.remove("show");
                        });
                    } else {
                        console.log("Elemen dengan class 'myDesktop' tidak ditemukan.");
                    }
                } else {
                    if (navMobile) {
                        navDesktop.remove();
                    } else {
                        console.log("Elemen dengan class 'myMobile' tidak ditemukan.");
                    }
                }
            }

            // Panggil fungsi updateNavigation saat halaman pertama kali dimuat
            updateNavigation();

            // Tambahkan event listener untuk mendeteksi perubahan ukuran layar
            window.addEventListener('resize', function() {
                updateNavigation();
            });
        });

        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 0) {
                $('nav').addClass('navbar-scroll');
            } else {
                $('nav').removeClass('navbar-scroll');
            }
        });
    </script>
</body>
@if (request()->segment(1) == '')
    <footer class="bg-dark pb-3 pt-1 fixed-bottom">
        <center>
            {{-- <div class="col-2 mt-0 ms-2"> --}}
            <i class="bi bi-envelope-fill text-white"></i> <a class="text-white fs-6 me-3"
                data-auto-recognition="true" href="mailto:info@achivon.co.id">info@achivon.co.id</a>
            {{-- </div> --}}
            {{-- <div class="col-2 mt-0 ms-2"> --}}
            <i class="bi bi-telephone text-white"></i><a class="text-white fs-6 me-3"> +62 812-7773-8811</a>
            {{-- </div> --}}
            {{-- <div class="col-2 mt-0 ms-2"> --}}
            <i class="bi bi-whatsapp text-white"></i> <a class="text-white fs-6"
                href="https://api.whatsapp.com/send?phone=6281277738811&text=Halo"> +62 812-7773-8811</a>
            {{-- </div> --}}
            <div class="col-12" style="margin-bottom: -10px; margin-top: -10px;">
                <hr class="border border-danger border-3 opacity-50">
            </div>
        </center>
        <div class="justify-content-start col-11" style="margin-bottom: -10px; margin-top: -10px;">
            <div class="col-12">
                <h5 class="text-white ms-2 text-start fs-6">karawaci</h5>
                <h6 class="text-white ms-2" style="text-align: justify; font-family: Arial;">
                    Karawaci Office Park Ruko
                    Pinangsia No.35
                    Blok Excelis Lt.2
                    Lippo Karawaci Kel Panunggangan Barat,
                    Cibodas, Kota Tangerang.
                </h6>
            </div>
            <div class="col-12">
                <h5 class="text-white text-start fs-6 ms-2">Cilegon</h5>
                <h6 class="text-white ms-2 fs-6" style="text-align: justify; font-family: Arial;">
                    Jl. Antartika I No.II
                    Kotasari, Kec.Gerogol,
                    Kota Cilegon, Banten
                    42436
                </h6>
            </div>
        </div>
        <div class="col-12">
            <hr class="border border-danger border-3 opacity-50">
        </div>
        <center>
            <h6 class="text-white" style="font-family: Arial; margin-bottom: -0.3cm; margin-top: -0.3cm;">COPYRIGHT ©
                2023 PT. Achivon Prestasi Abadi </h6>
        </center>
    </footer>
@else
    <footer class="bg-dark pb-3 pt-1">
        <center>
            {{-- <div class="col-2 mt-0 ms-2"> --}}
            <i class="bi bi-envelope-fill text-white"></i> <a class="text-white fs-6 me-3"
                data-auto-recognition="true" href="mailto:info@achivon.co.id">info@achivon.co.id</a>
            {{-- </div> --}}
            {{-- <div class="col-2 mt-0 ms-2"> --}}
            <i class="bi bi-telephone text-white"></i><a class="text-white fs-6 me-3"> +62 812-7773-8811</a>
            {{-- </div> --}}
            {{-- <div class="col-2 mt-0 ms-2"> --}}
            <i class="bi bi-whatsapp text-white"></i> <a class="text-white fs-6"
                href="https://api.whatsapp.com/send?phone=6281277738811&text=Halo"> +62 812-7773-8811</a>
            {{-- </div> --}}
            <div class="col-12" style="margin-bottom: -10px; margin-top: -10px;">
                <hr class="border border-danger border-3 opacity-50">
            </div>
        </center>
        <div class="justify-content-strat col-11" style="margin-bottom: -10px; margin-top: -10px;">
            <div class="col-12">
                <h5 class="text-white ms-2 text-start fs-6">karawaci</h5>
                <h6 class="text-white ms-2" style="text-align: justify; font-family: Arial;">
                    Karawaci Office Park Ruko
                    Pinangsia No.35
                    Blok Excelis Lt.2
                    Lippo Karawaci Kel Panunggangan Barat,
                    Cibodas, Kota Tangerang.
                </h6>
            </div>
            <div class="col-12">
                <h5 class="text-white text-start fs-6 ms-2">Cilegon</h5>
                <h6 class="text-white ms-2 fs-6" style="text-align: justify; font-family: Arial;">
                    Jl. Antartika I No.II
                    Kotasari, Kec.Gerogol,
                    Kota Cilegon, Banten
                    42436
                </h6>
            </div>
        </div>
        <div class="col-12">
            <hr class="border border-danger border-3 opacity-50">
        </div>
        <center>
            <h6 class="text-white" style="font-family: Arial; margin-bottom: -0.3cm; margin-top: -0.3cm;">COPYRIGHT ©
                2023 PT. Achivon Prestasi Abadi </h6>
        </center>
    </footer>
@endif

</html>
