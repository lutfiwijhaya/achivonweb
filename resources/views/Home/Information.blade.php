@extends('Layout/MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')
<br>
    <section id="Information" class="about bg-light" style="--bs-bg-opacity: .9;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-12 text-primary">
                    <center>
                        <u><h1 class="fs-3 fw-bold">{{ __('message.navHome1.2') }}</h1></u>
                    </center>
                </div>
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <center>
                        <img src="{{ URL ('images/about pt acipin3.png') }}" class="img-fluid" alt="">
                    </center>
                </div>
            </div>
        </div>
    </section>
@endsection