@extends('Layout/MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')

    <div class="container card py-3 bg-white rounded mx-auto border-0">
        <form action="{{ url('sentMail') }}" enctype="multipart/form-data" method="post">
            <div class="row g-3" data-aos="fade-down">
                <div class="col-6">
                    @csrf
                    <div class="col-12 mt-1">
                        <label for="inputName" class="form-label ms-3">@lang('message.labelName')</label>
                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="@lang('message.placeName')" required>
                        @error('inputName')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                        
                    </div>
                    <div class="col-12 mt-1">
                        <label for="inputEmail" class="form-label ms-3">@lang('message.labelEmail')</label>
                        <input type="email" class="form-control invalid" id="inputEmail" name="inputEmail" placeholder="@lang('message.placeEmail')" required>
                        @error('inputEmail')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-12 mt-1">
                        <label for="inputSubject" class="form-label ms-3">@lang('message.labelSubject')</label>
                        <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="@lang('message.placeSubject')" required>
                        @error('inputSubject')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-4" data-aos="fade-down">
                            {{-- <center> --}}
                                <img src="{{URL ('images/No_Image_Available.jpg')}}" class="rounded" alt="preview" id="previewAttachment" width="140px" height="140px">
                            {{-- </center> --}}
                        </div>
                        <div class="col-6" data-aos="fade-down">
                            <label for="attachment" class="form-label ms-1">@lang('message.labelDocument')</label>
                            <input class="form-control" type="file" id="attachment" name="attachment">
                            @error('attachment')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-12">
                        <label for="inputPesan" class="form-label mt-1 ms-3">@lang('message.labelMail')</label>
                        <textarea class="form-control" id="inputPesan" name="inputPesan" rows="12" placeholder="@lang('message.placeMail')" required></textarea>
                        @error('inputPesan')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <br>
                    <div class="col-md-12 mt-2 d-flex justify-content-center">
                        <button class="btn btn-outline-primary col-12"> @lang('message.buttonSend')</button>
                    </div>
                    <div class="col-12" data-aos="">
                        <div class="col-10" >
                            {{-- <img src="{{ URL ('images/LocationLink3.png') }}" alt="My Icon" width="200px" height="200px" style=""> --}}
                        </div>
                        <div class="col-10 mt-2 ms-2">
                            <i class="bi bi-envelope-fill"></i> <a class="link-primary" data-auto-recognition="true" href="mailto:info@achivon.co.id">info@achivon.co.id</a>
                        </div>
                        
                        <div class="col-10 mt-2 ms-2">
                            <i class="bi bi-telephone"></i>+62 812-7773-8811
                        </div>
                        <div class="col-10 mt-2 ms-2">
                            <i class="bi bi-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=6281277738811"> +62 812-7773-8811</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br><br><br>
    <script>
        const formFile2 = document.getElementById('attachment');
        const preview2 = document.getElementById('previewAttachment');
        formFile2.addEventListener('change', function() {
            const file2 = this.files[0];
            if (file2) {
                const reader2 = new FileReader();
                reader2.addEventListener('load', function() {
                    preview2.src = reader2.result;
                });
                reader2.readAsDataURL(file2);
            }else{

            }
        });
    </script>
@endsection