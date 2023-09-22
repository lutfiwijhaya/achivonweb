@extends('Layout/MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')
<br><br>
<center>
    <div class="col-6 bg-white py-5 px-5" style="--bs-bg-opacity: .9;" data-aos="zoom-in">
        <div class="d-flex justify-content-between">
            <div class="col-1"></div>
            <p class="col-10 text-center">@lang('message.editWord')</p>
            <a class="btn btn-close col-1 ms-4" aria-label="Close" href="{{ url('/') }}"></a>
        </div>
        <form class="row g-3 justify-content-center" action="{{ url('/updatedata') }}" method="get">
            @csrf
            <div class="col-md-7">
                <input type="number" class="form-control" id="editNIK" name="editNIK" oninput="checkInputLength()" placeholder="@lang('message.placeNIK')" value="{{ old('editNIK') }}" required>
                @error('editNIK')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="col-md-2 btn btn-primary " type="submit">Edit</button>
            {{-- <div class=" bg-info">
            </div> --}}
        </form>
        {{-- <div class="row g-3"> --}}
        {{-- </div> --}}
        
        {{-- <div class="row g-3">
            <div class="col-1"></div>
            <div class="col-10">
                <center>    
                    <p>@lang('message.editWord')</p>
                </center>
            </div>
            <a class="btn-close col-1 ms-4" aria-label="Close" href="{{ url('/') }}"></a>
        </div>
        <center>
            <div class="col-8">
                <form class="row g-3" action="{{ url('/updatedata') }}" method="get">
                    @csrf
                    <div class="col-10">
                        <input type="number" class="col-8 form-control" id="editNIK" name="editNIK" oninput="checkInputLength()" placeholder="@lang('message.placeNIK')" value="{{ old('editNIK') }}" required>
                        @error('editNIK')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary col-2" type="submit">Edit</button>
                </form>
            </div>
        </center>
        <br><br> --}}
    </div>
    <br><br>
</center>
    <script>
        function checkInputLength() {
            var input = document.getElementById("editNIK");
            if (input.value.length > 16) {
                input.value = input.value.slice(0,16);
            }
        }
    </script>
    @endsection