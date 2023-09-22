@extends('Layout/MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')
    <br>
    <div class="container bg-white py-5 rounded" style="--bs-bg-opacity: .6;">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" data-aos="fade-up">
                <div class="carousel-item active" data-bs-interval="10000">
                    <center>
                        <img src="{{ URL ('images/1.jpg') }}" class="d-block w-75" alt="...">
                    </center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <center>
                        <img src="{{ URL ('images/4.jpg') }}" class="d-block w-75" alt="...">
                    </center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <center>
                        <img src="{{ URL ('images/5.jpg') }}" class="d-block w-75" alt="...">
                    </center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br><br>
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/4.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/5.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/6.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/7.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/5.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/5.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/7.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="col-3 card p-1 m-2" data-aos="fade-up">
                <img src="{{URL ('images/4.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="fw-bold">Project Name</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection

<div class="myMobile collapse navbar-collapse justify-content-center" id="navbarSupportedContent21">
    @if (request()->segment(1) == '' || request()->segment(1) =='home')
        <ul class="navbar-nav mb-2 mb-lg-0" id="homeMenu">
            <li class="nav-item mt-2 ms-2">
                <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'ceo' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/home/ceo')}}">{{ __("message.navHome1.1") }}</a>
            </li>                        
            <li class="nav-item mt-2 ms-2">
                <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'information' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/home/information')}}">{{ __("message.navHome1.2") }}</a>
            </li>
            <li class="nav-item mt-2 ms-2">
                <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'history' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url('/home/history') }}">{{ __('message.navHome1.3') }}</a>
            </li>
            <li class="nav-item mt-2 ms-2">
                <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'location' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url('/home/location') }}">{{ __('message.navHome1.4') }}</a>
            </li>
            <li class="nav-item mt-2 ms-2">
                <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'vision' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url('/home/vision') }}">{{ __('message.navHome1.5') }}</a>
            </li>
            <li class="nav-item mt-2 ms-2">
                <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'mission' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url('/home/mission') }}">{{ __('message.navHome1.6') }}</a>
            </li>
            <li class="nav-item mt-2 ms-2">
                <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'resource' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url('/home/resource') }}">{{ __('message.navHome1.7') }}</a>
            </li>
            <li class="nav-item mt-2 ms-2">
                <a class="nav-link text-center fs-6 {{ request()->segment(2) == 'operationsoftware' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url('/home/operationsoftware') }}">{{ __('message.navHome1.8') }}</a>
            </li>
        </ul>
    @elseif (request()->segment(1) == 'business')
        <ul class="navbar-nav mb-2 mb-lg-0" id="businessMenu">
            <li class="nav-item mt-2 ms-2 dropdown">
                <a id="dropdownEngineering" class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'engineering' ? 'border-2 border-bottom border-primary' : '' }}" href="#" role="button" data-bs-toggle="dropdown">{{ __("message.navBusiness1.1") }}</a>
                <ul class="dropdown-menu dropdown-menu-light rounded-1">
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/steelstructure')}}">{{ __("message.navBusiness2.1") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/tank')}}">{{ __("message.navBusiness2.2") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/piping')}}">{{ __("message.navBusiness2.3") }}</a></li>
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
                <a id="dropdownProcurement" class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'procurement' ? 'border-2 border-bottom border-primary' : '' }}" href="#" role="button" data-bs-toggle="dropdown">{{ __("message.navBusiness1.2") }}</a>
                <ul class="dropdown-menu dropdown-menu-light rounded-1">
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/steelstructure')}}">{{ __("message.navBusiness2.1") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/tank')}}">{{ __("message.navBusiness2.2") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/piping')}}">{{ __("message.navBusiness2.3") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/firefighting')}}">{{ __("message.navBusiness2.4") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/paint')}}">{{ __("message.navBusiness2.5") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/insulation')}}">{{ __("message.navBusiness2.6") }}</a></li>
                    {{-- <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li> --}}
                </ul>
            </li>
            <li class="nav-item mt-2 ms-2 dropdown">
                <a id="dropdownFabrication" class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'fabrication' ? 'border-2 border-bottom border-primary' : '' }}" href="#" role="button" data-bs-toggle="dropdown">{{ __("message.navBusiness1.3") }}</a>
                <ul class="dropdown-menu dropdown-menu-light rounded-1">
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/steelstructure')}}">{{ __("message.navBusiness2.1") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/tank')}}">{{ __("message.navBusiness2.2") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/piping')}}">{{ __("message.navBusiness2.3") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/firefighting')}}">{{ __("message.navBusiness2.4") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/paint')}}">{{ __("message.navBusiness2.5") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/insulation')}}">{{ __("message.navBusiness2.6") }}</a></li>
                    {{-- <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li> --}}
                </ul>
            </li>
            <li class="nav-item mt-2 ms-2 dropdown">
                <a id="dropdownConstruction" class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'construction' ? 'border-2 border-bottom border-primary' : '' }}" href="#" role="button" data-bs-toggle="dropdown">{{ __("message.navBusiness1.4") }}</a>
                <ul class="dropdown-menu dropdown-menu-light rounded-1">
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/steelstructure')}}">{{ __("message.navBusiness2.1") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/tank')}}">{{ __("message.navBusiness2.2") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/piping')}}">{{ __("message.navBusiness2.3") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/firefighting')}}">{{ __("message.navBusiness2.4") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/paint')}}">{{ __("message.navBusiness2.5") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/insulation')}}">{{ __("message.navBusiness2.6") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li>
                </ul>
            </li>
            <li class="nav-item mt-2 ms-2 dropdown">
                <a id="dropdownMaintenance" class="nav-link text-center fs-6 dropdown-toggle{{ request()->segment(2) == 'maintenance' ? 'border-2 border-bottom border-primary' : '' }}" href="#" role="button" data-bs-toggle="dropdown">{{ __("message.navBusiness1.5") }}</a>
                <ul class="dropdown-menu dropdown-menu-light rounded-1">
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'steelstructure' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/steelstructure')}}">{{ __("message.navBusiness2.1") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'tank' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/tank')}}">{{ __("message.navBusiness2.2") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'piping' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/piping')}}">{{ __("message.navBusiness2.3") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'firefighting' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/firefighting')}}">{{ __("message.navBusiness2.4") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'paint' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/paint')}}">{{ __("message.navBusiness2.5") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'insulation' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/insulation')}}">{{ __("message.navBusiness2.6") }}</a></li>
                    <li><hr class="dropdown-divider py-0"></li>
                    <li><a class="dropdown-item py-0 fs-6 {{ request()->segment(3) == 'mechanicalequipment' ? 'border-2 border-bottom border-primary' : '' }}" href="{{ url ('/business/engineering/mechanicalequipment')}}">{{ __("message.navBusiness2.7") }}</a></li>
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