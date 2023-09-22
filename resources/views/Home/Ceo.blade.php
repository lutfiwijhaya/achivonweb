@extends('Layout/MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')
<br>
    <section id="CEO" class="about bg-white" style="--bs-bg-opacity: .9;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <u class="text-primary"><h5 class="fs-3 fw-bold">@lang('message.ceo1')</h5></u>
                    <p class="fs-6">
                        @lang('message.ceo2')<br><br>
                        @lang('message.ceo3')<br>
                        @lang('message.ceo4')<br>
                        @lang('message.ceo5')<br>
                        @lang('message.ceo6')<br>
                        @lang('message.ceo7')<br>
                        @lang('message.ceo8')<br>
                        @lang('message.ceo9')<br>
                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ URL ('images/1.1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-11 fs-6" data-aos="fade-left" data-aos-delay="100">
                    @lang('message.ceo10')<br>
                    @lang('message.ceo11')<br>
                    @lang('message.ceo12')<br>
                    @lang('message.ceo13')<br><br>
                </div>
            </div>
        </div>
    </section>
@endsection