@extends('Layout/MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')
<br>
    <section id="Location" class="about" style="--bs-bg-opacity: .8;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-12 text-primary">
                    <center>
                        <u><h1 class="fs-3 fw-bold">{{ __('message.navHome1.4') }}</h1></u>
                    </center>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <h3 class="text-primary fs-4">@lang('message.location1')</h3>
                    <p class="fst-italic text-dark fs-6">
                        @lang('message.location1.1')
                    </p>
                    <h4 class="text-primary fs-4">@lang('message.location2')</h4>
                    <p class="fst-italic text-dark fs-6">
                        @lang('message.location2.1')
                    </p>
                    <h4 class="text-primary fs-4">@lang('message.location3')</h4>
                    <p class="fst-italic text-dark fs-6">
                        @lang('message.location3.1')<br>
                        @lang('message.location3.2')<br>
                    </p>
                    <h4 class="text-primary fs-4">@lang('message.location4')</h4>
                    <p class="fst-italic text-dark fs-6">
                        @lang('message.location4.1')<br>
                        @lang('message.location4.2')<br>
                    </p>
                </div>
                <div class="col-lg-6 mb-5" data-aos="fade-left" data-aos-delay="100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.305059228295!2d106.61784237372022!3d-6.223447360949137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff38188bcedf%3A0x7460c5ac90ac723e!2sPT.%20ACHIVON%20PRESTASI%20ABADI!5e0!3m2!1sid!2sid!4v1686131161161!5m2!1sid!2sid" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection