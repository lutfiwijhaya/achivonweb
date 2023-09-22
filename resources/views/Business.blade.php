@extends('Layout.MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')
<style>

</style>
    <br>
    <section id="Resorce" class="about" style="--bs-bg-opacity: .8;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-12 text-primary">
                    <center>

                        <u><h1 class="fs-3 fw-bold">{{ __('message.navBusiness') }}</h1></u>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="card-link">Card link</a>
                              <a href="{{ url('/balikHome') }}" class="card-link">Another link</a>
                            </div>
                          </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br>
@endsection
{{-- <section id="myMain" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-10 col-lg-8">
                <h1 class="text-primary">PT. Achivon Prestasi Abadi</h1>
                <h6 class="text-white">@lang('message.mainPageInfo')</h6>
            </div>
        </div>
    </div>
</section> --}}
{{-- <div id="secEngineering" class="about mt-5" style="--bs-bg-opacity: .9;">
    <div class="container" data-aos="fade-up">
        <div class=" dropend">
            <h2 type="button" class="btn btn-secondary " data-bs-toggle="dropdown" aria-expanded="false">
                @lang('message.navBusiness1.1')
                <i class="bi bi-caret-right-fill" id="idEngineer"></i>
            </h2>
            <div class="dropdown-menu">
                <h5>@lang('message.navBusiness2.1')</h5>
                <h5>@lang('message.navBusiness2.2')</h5>
                <h5>@lang('message.navBusiness2.3')</h5>
                <h5>@lang('message.navBusiness2.4')</h5>
                <h5>@lang('message.navBusiness2.5')</h5>
                <h5>@lang('message.navBusiness2.6')</h5>
                <h5>@lang('message.navBusiness2.7')</h5>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="btn-group dropend">
    <h2 class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        Dropend
    </h2>
    <ul class="dropdown-menu collapse" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">@lang('message.navBusiness2.1')</a></li>
        <li><a class="dropdown-item" href="#">@lang('message.navBusiness2.2')</a></li>
        <li><a class="dropdown-item" href="#">@lang('message.navBusiness2.3')</a></li>
        <li><a class="dropdown-item" href="#">@lang('message.navBusiness2.4')</a></li>
    </ul>
</div> --}}
    {{-- <div id="secEngineering" class="about mt-5" style="--bs-bg-opacity: .9;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-6" data-aos="fade-left" data-aos-delay="100">
                    <h2 class=" fs-5 text-primary ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#engineering" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.navBusiness1.1')
                        <i class="bi bi-caret-right-fill" id="idEngineer" style="margin-left: 20px;"></i>
                    </h2> 
                    <div class="collapse" id="engineering">
                        <div class="card-body">
                            <div class="container">
                                <h5 class="fs-6">@lang('message.navBusiness2.1')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.2')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.3')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.4')</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="secProcurement" class="about mt-3" style="--bs-bg-opacity: .9;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-6" data-aos="fade-left" data-aos-delay="100">
                    <h2 class=" fs-5 text-primary ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#procurement" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.navBusiness1.2')
                        <i class="bi bi-caret-right-fill" id="idProcurement"></i>
                    </h2>
                    <div class="collapse" id="procurement">
                        <div class="card-body">
                            <div class="container">
                                <h5 class="fs-6">@lang('message.navBusiness2.1')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.2')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.3')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.4')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.5')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.6')</h5>
                                <h5>@lang('message.navBusiness2.7')</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="secFabrication" class="about mt-3" style="--bs-bg-opacity: .9;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-6" data-aos="fade-left" data-aos-delay="100">
                    <h2 class=" fs-5 text-primary ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#fabrication" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.navBusiness1.3')
                        <i class="bi bi-caret-right-fill" id="idFabrication" style="margin-left: 15px;"></i>
                    </h2>
                    <div class="collapse" id="fabrication">
                        <div class="card-body">
                            <div class="container">
                                <h5 class="fs-6">@lang('message.navBusiness2.1')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.2')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.3')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.4')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.5')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.6')</h5>
                                <h5>@lang('message.navBusiness2.7')</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="secConstruction" class="about mt-3" style="--bs-bg-opacity: .9;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-6" data-aos="fade-left" data-aos-delay="100">
                    <h2 class=" fs-5 text-primary ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#construction" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.navBusiness1.4')
                        <i class="bi bi-caret-right-fill" id="idConstruction"></i>
                    </h2>
                    <div class="collapse" id="construction">
                        <div class="card-body">
                            <div class="container">
                                <h5 class="fs-6">@lang('message.navBusiness2.1')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.2')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.3')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.4')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.5')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.6')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.7')</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="secMaintenance" class="about mt-3" style="--bs-bg-opacity: .9;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-6" data-aos="fade-left" data-aos-delay="100">
                    <h2 class=" fs-5 text-primary ms-5 mb-5" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.navBusiness1.5')
                        <i class="bi bi-caret-right-fill" id="idMaintenance"></i>
                    </h2>
                    <div class="collapse" id="maintenance">
                        <div class="card-body">
                            <div class="container">
                                <h5 class="fs-6">@lang('message.navBusiness2.1')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.2')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.3')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.4')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.5')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.6')</h5>
                                <h5 class="fs-6">@lang('message.navBusiness2.7')</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function() {
        // Dropdown 1
        $('#engineering').on('show.bs.collapse', function() {
            hideOtherDropdowns('#engineering', '#idengineering');
        }).on('hide.bs.collapse', function() {
            resetIcon('#idengineering');
        });

        // Dropdown 2
        $('#procurement').on('show.bs.collapse', function() {
            hideOtherDropdowns('#procurement', '#idprocurement');
        }).on('hide.bs.collapse', function() {
            resetIcon('#idprocurement');
        });

        // Dropdown 3
        $('#fabrication').on('show.bs.collapse', function() {
            hideOtherDropdowns('#fabrication', '#idfabrication');
        }).on('hide.bs.collapse', function() {
            resetIcon('#idfabrication');
        });

        // Dropdown 4
        $('#construction').on('show.bs.collapse', function() {
            hideOtherDropdowns('#construction', '#idconstruction');
        }).on('hide.bs.collapse', function() {
            resetIcon('#idconstruction');
        });

        // Dropdown 5
        $('#maintenance').on('show.bs.collapse', function() {
            hideOtherDropdowns('#maintenance', '#idmaintenance');
        }).on('hide.bs.collapse', function() {
            resetIcon('#idmaintenance');
        });

        function hideOtherDropdowns(target, icon) {
            $('.collapse').not(target).collapse('hide');
            $('.bi-caret-down-fill').not(icon).removeClass('bi-caret-down-fill').addClass('bi-caret-right-fill');
        }

        function resetIcon(icon) {
            $(icon).removeClass('bi-caret-down-fill').addClass('bi-caret-right-fill');
        }
    });
</script> --}}
