@extends('Layout/MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')
    <div class="container bg-white py-4 px-5 rounded mx-auto">
        <center>
            <a href="{{ url('/maps/cilegon') }}" class="link-primary">Cilegon</a> / 
            <a href="{{ url('/maps/karawaci') }}" class="link-primary">Karawaci</a>
        </center>
        <br>
        <div class="gmaps card" data-aos="zoom-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.305059228295!2d106.61784237372022!3d-6.223447360949137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff38188bcedf%3A0x7460c5ac90ac723e!2sPT.%20ACHIVON%20PRESTASI%20ABADI!5e0!3m2!1sid!2sid!4v1686131161161!5m2!1sid!2sid" width="auto" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br><br>
    </div>
    <br><br><br>
@endsection