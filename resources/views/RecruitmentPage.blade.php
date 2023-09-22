@extends('Layout/MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')
<br><br><br>
<center>
    <div class="col-6 bg-white py-5 px-5" style="--bs-bg-opacity: .9;" data-aos="zoom-in">
        
        <div class="d-flex justify-content-between">
            <div class="col-1"></div>
            <p class="col-10 text-center">@lang('message.joinWord')</p>
            <a class="btn btn-close col-1 ms-4" aria-label="Close" href="{{ url('/') }}"></a>
        </div>
        <center>
            <a class="link-primary" href="{{ url('career') }}">@lang('message.joinLink')</a>
        </center>
    </div>
</center>
<br><br><br>
@endsection