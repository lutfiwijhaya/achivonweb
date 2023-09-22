@extends('Layout.MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')
<div class="container card rounded-top-1 col-8 px-5 pb-5 " style="--bs-bg-opacity: .9;">
    <div class="welcomeCareer row justify-content-between bg-white pt-5 px-0" style="margin-left: 0.5px;">
        <h5 class="col-10 text-start">@lang('message.welcomeCareer')</h5>
        <a class="btn-close col-12" aria-label="Close" href="{{ url('/Recruitment/Register') }}"></a>
        <hr class="p-0">
    </div>
    <form method="post" action="{{ url('careerstore') }}" enctype="multipart/form-data" class="">
        <div id="secEngineering" class="about" style="--bs-bg-opacity: .9;">
            <div class="sec1 row justify-content-between bg-white pt-2 px-0" style="margin-left: 0.5px;">
                <h5 class="col-10 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#engineering" aria-expanded="false" aria-controls="collapseExample">
                    @lang('message.section1') 
                    <i class="bi bi-caret-right-fill" id="idEngineer" style="margin-left: 20px;"></i>
                </h5>
                <hr class="p-0">
            </div>
            <div class="collapse row g-3 mx-1" id="engineering">
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputPosition" class="form-label @error ('inputPosition') is-invalid @enderror">@lang('message.labelPosition')</label>
                    <select id="inputPosition" name="inputPosition" class="form-select" value="{{ old('inputPosition') }}" required>
                        <option>@lang('message.placePosition')</option>
                                @foreach ( $MyJob as $job)
                                    <option>{{ $job->name_job }}</option>
                                @endforeach
                            </select>
                            @error('inputPosition')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputSallary" class="form-label">@lang('message.labelSallary')</label>
                            <input type="text" class="form-control" id="inputSallary" onkeyup="formatRupiah()" name="inputSallary" placeholder="@lang('message.placeSallary')" value="{{ old('inputSallary') }}" required>
                            @error('inputSallary')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <center>
                                <img src="{{URL ('images/noprofilejpg.jpg')}}" class="rounded" alt="preview" id="preview" width="120px" height="140px">
                            </center>
                        </div>    
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputFoto" class="form-label ms-3">@lang('message.labelPhoto')</label>
                            <input class="form-control" type="file" id="inputFoto" name="inputFoto" required>
                            @error('inputFoto')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputNIK" class="form-label">@lang('message.labelNIK')</label>
                            <input type="text" class="form-control" id="inputNIK" name="inputNIK" placeholder="@lang('message.placeNIK')" value="{{ old('inputNIK') }}" required>
                            @error('inputNIK')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputName" class="form-label">@lang('message.labelName')</label>
                            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="@lang('message.placeName')" value="{{ old('inputName') }}" required>
                            @error('inputName')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputBirthPlace" class="form-label">@lang('message.labelBirthPlace')</label>
                            <input type="text" class="form-control" id="inputBirthPlace" name="inputBirthPlace" placeholder="@lang('message.placeBirthPlace')" value="{{ old('inputBirthPlace') }}" required>
                            @error('inputBirthPlace')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputBirthDay" class="form-label">@lang('message.labelBirthDay')</label>
                            <input type="date" class="form-control" id="inputBirthDay" name="inputBirthDay" pattern="\d{2}/\d{2}/\d{4}" placeholder="@lang('message.placeBirthDay')" value="{{ old('inputBirthday') }}" required>
                            @error('inputBirthDay')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputNoHP" class="form-label">@lang('message.labelNoHP')</label>
                            <input type="text" class="form-control" id="inputNoHP" onkeyup="formatHP()" name="inputNoHP" placeholder="@lang('message.placeNoHP')" value="{{ old('inputNoHP') }}" required>
                            @error('inputNoHP')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputEmail" class="form-label">@lang('message.labelEmail')</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="@lang('message.placeEmail')" value="{{ old('inputEmail') }}" required>
                            @error('inputEmail')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputBPJSKesehatan" class="form-label">@lang('message.labelBPJSSehat')</label>
                            <input type="number" class="form-control" id="inputBPJSKesehatan" name="inputBPJSKesehatan" placeholder="@lang('message.placeBPJSSehat')" value="{{ old('inputBPJSKesehatan') }}" required>
                            @error('inputBPJSKesehatan')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3" data-aos="fade-down">
                            <label for="inputBPJSKetenagakerjaan" class="form-label">@lang('message.labelBPJSKerja')</label>
                            <input type="number" class="form-control" id="inputBPJSKetenagakerjaan" name="inputBPJSKetenagakerjaan" placeholder="@lang('message.placeBPJSKerja')" value="{{ old('inputBPJSKetenagakerjaan') }}" required>
                            @error('inputBPJSKetenagakerjaan')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputNPWP" class="form-label">@lang('message.labelNPWP')</label>
                            <input type="text" class="form-control" id="MYinputNPWP" onchange="formatNpwp(this.value)" name="inputNPWP" placeholder="@lang('message.labelNPWP')" value="{{ old('inputNPWP') }}" required>
                            @error('inputNPWP')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-3" data-aos="fade-down">
                            <label class="form-check-label" for="RadioGender">@lang('message.labelGender')</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="RadioGender" id="RadioGender1" value="@lang('message.placeGender1')" {{ old('RadioGender') == "@lang('message.placeGender1')" ? 'checked' : '' }}>
                                <label class="form-check-label" for="RadioGender1">@lang('message.placeGender1')</label>
                            </div>
                            <div class="form-check" data-aos="fade-down">
                                <input class="form-check-input" type="radio" name="RadioGender" id="RadioGender2" value="@lang('message.placeGender2')" {{ old('RadioGender') == "@lang('message.placeGender2')" ? 'checked' : '' }}>
                                <label class="form-check-label" for="RadioGender2">@lang('message.placeGender2')</label>
                            </div>
                            @error('radioGender')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-3" data-aos="fade-down">
                            <label class="form-check-label" for="RadioMarital">@lang('message.labelMarital')</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="RadioMarital" id="RadioMarital1" value="@lang('message.placeMarital1')" {{ old('RadioMarital') == "@lang('message.placeMarital1')" ? 'checked' : '' }}>
                                <label class="form-check-label" for="RadioMarital1">@lang('message.placeMarital1')</label>
                            </div>
                            <div class="form-check" data-aos="fade-down">
                                <input class="form-check-input" type="radio" name="RadioMarital" id="RadioMarital2" value="@lang('message.placeMarital2')" {{ old('RadioMarital') == "@lang('message.placeMarital2')" ? 'checked' : '' }}>
                                <label class="form-check-label" for="RadioMarital2">@lang('message.placeMarital2')</label>
                            </div>
                            @error('radioMarital')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <hr>
                        <center>
                            <div class="" data-aos="zoom-in">
                                <i><h5>@lang('message.labelHome')</h5></i>
                            </div>
                        </center>
                        <hr>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputCountry" class="form-label">@lang('message.labelHomeCountry')</label>
                            <select id="inputCountry" name="inputCountry" class="form-select" required>
                                <option>@lang('message.placeHomeCountry')</option>
                                @foreach ($MyCountry as $country)
                                    <option value="{{ $country->name }}" data-values="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('inputCountry')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputProvince" class="form-label">@lang('message.labelHomeProvince')</label>
                            <select id="inputProvince" name="inputProvince" class="form-select" required>
                                <option>@lang('message.placeHomeProvince')</option>
                                @foreach ($MyProvince as $province)
                                    <option value="{{ $province->name }}" data-values="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                            @error('inputProvince')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputCity" class="form-label">@lang('message.labelHomeCity')</label>
                            <select id="inputCity" name="inputCity" class="form-select" required>
                                <option>@lang('message.placeHomeCity')</option>
                            </select>
                            @error('inputCity')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputKecamatan" class="form-label">@lang('message.labelHomeKecamatan')</label>
                            <select id="inputKecamatan" name="inputKecamatan" class="form-select" required>
                                <option>@lang('message.placeHomeKecamatan')</option>
                            </select>
                            @error('inputKecamatan')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputDesa" class="form-label">@lang('message.labelHomeDesa')</label>
                            <select id="inputDesa" name="inputDesa" class="form-select" required>
                                <option>@lang('message.placeHomeDesa')</option>
                            </select>
                            @error('inputDesa')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputRT" class="form-label">@lang('message.labelHomeRT')</label>
                            <input type="number" class="form-control" id="inputRT" name="inputRT" placeholder="@lang('message.placeHomeRT')" value="{{ old('inputRT') }}" required>
                            @error('inputRT')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputRW" class="form-label">@lang('message.labelHomeRW')</label>
                            <input type="number" class="form-control" id="inputRW" name="inputRW" placeholder="@lang('message.placeHomeRW')" value="{{ old('inputRW') }}" required>
                            @error('inputRW')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputPostCode" class="form-label">@lang('message.labelHomePostCode')</label>
                            <input type="text" class="form-control" id="inputPostCode" name="inputPostCode" placeholder="@lang('message.placeHomePostCode')" value="{{ old('inputPostCode') }}" required>
                            @error('inputPostCode')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-12" data-aos="fade-down">
                            <label for="inputAddress" class="form-label">@lang('message.labelHomeFull')</label>
                            <textarea class="form-control" id="inputAddress" name="inputAddress" placeholder="@lang('message.placeHomeFull')" value="{{ old('inputHomeFull') }}" required></textarea>
                            @error('inputAddress')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <hr>
                        <center>
                            <div class="" data-aos="zoom-in">
                                <i><h5>@lang('message.labelCurrent')</h5></i>
                            </div>
                        </center>
                        <hr>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputCurrentCountry" class="form-label">@lang('message.labelCurrentCountry')</label>
                            <select id="inputCurrentCountry" name="inputCurrentCountry" class="form-select"  required>
                                <option>@lang('message.placeCurrentCountry')</option>
                                @foreach ($MyCountry as $country)
                                    <option value="{{ $country->name }}" data-values="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('inputCurrentCountry')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputCurrentProvince" class="form-label">@lang('message.labelCurrentProvince')</label>
                            <select id="inputCurrentProvince" name="inputCurrentProvince" class="form-select" required>
                                <option>@lang('message.placeCurrentProvince')</option>
                                @foreach ($MyProvince as $province)
                                    <option value="{{ $province->name }}" data-values="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                            @error('inputCurrentProvince')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputCurrentCity" class="form-label">@lang('message.labelCurrentCity')</label>
                            <select id="inputCurrentCity" name="inputCurrentCity" class="form-select" required>
                                <option value="1">@lang('message.labelCurrentCity')</option>
                            </select>
                            @error('inputCurrentCity')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputCurrentKecamatan" class="form-label">@lang('message.labelCurrentCity')</label>
                            <select id="inputCurrentKecamatan" name="inputCurrentKecamatan" class="form-select" required>
                                <option>@lang('message.labelCurrentKecamatan')</option>
                            </select>
                            @error('inputCurrentKecamatan')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputCurrentDesa" class="form-label">@lang('message.labelCurrentCity')</label>
                            <select id="inputCurrentDesa" name="inputCurrentDesa" class="form-select" required>
                                <option>@lang('message.labelCurrentDesa')</option>
                            </select>
                            @error('inputCurrentDesa')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputCurrentRT" class="form-label">@lang('message.labelCurrentRT')</label>
                            <input type="number" class="form-control" id="inputCurrentRT" name="inputCurrentRT" placeholder="@lang('message.placeCurrentRT')" value="{{ old('inputCurrentRT') }}" required>
                            @error('inputCurrentRT')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputCurrentRW" class="form-label">@lang('message.labelCurrentRW')</label>
                            <input type="number" class="form-control" id="inputCurrentRW" name="inputCurrentRW" placeholder="@lang('message.placeCurrentRW')" value="{{ old('inputCurrentRW') }}" required>
                            @error('inputCurrentRW')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-4" data-aos="fade-down">
                            <label for="inputCurrentPostCode" class="form-label">@lang('message.labelCurrentPostCode')</label>
                            <input type="number" class="form-control" id="inputCurrentPostCode" name="inputCurrentPostCode" placeholder="@lang('message.placeCurrentPostCode')" value="{{ old('inputCurrentPostCode') }}" required>
                            @error('inputCurrentPostCode')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-12" data-aos="fade-down">
                            <label for="inputCurrentAddress" class="form-label">@lang('message.labelCurrentFull')</label>
                            <textarea class="form-control" id="inputCurrentAddress" name="inputCurrentAddress" placeholder="@lang('message.placeCurrentFull')" value="{{ old('inputCurrentAddress') }}" required></textarea>
                            @error('inputCurrentAddress')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
            </div>
        </div>
        <div id="secProcurement" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                {{-- <h2 class=" fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#procurement" aria-expanded="false" aria-controls="collapseExample">
                    @lang('message.section2')
                    <i class="bi bi-caret-right-fill" id="idProcurement"></i>
                </h2> --}}
                <div class="sec2 row justify-content-between bg-white pt-2 px-0" style="margin-left: 0.5px;">
                    <h5 class="col-10 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#procurement" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section2') 
                        <i class="bi bi-caret-right-fill" id="idProcurement" style="margin-left: 20px;"></i>
                    </h5>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="procurement">
                    <div class="col-md-6" data-aos="fade-down">
                        <label for="inputNamaSekolah" class="form-label">@lang('message.labelSchoolName')</label>
                        <input type="text" class="form-control" id="inputNamaSekolah" name="inputNamaSekolah[]" placeholder="@lang('message.placeSchoolName')" required>
                        @error('inputNamaSekolah')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3" data-aos="fade-down">
                        <label for="inputTahunLulus" class="form-label">@lang('message.labelSchoolGraduation')</label>
                        <input type="month" class="form-control" id="inputTahunLulus" name="inputTahunLulus[]" placeholder="@lang('message.placeSchoolGraduation')" required>
                        @error('inputTahunLulus')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <label for="inputJurusan" class="form-label">@lang('message.labelSchoolMajor')</label>
                        <input type="text" class="form-control" id="inputJurusan" name="inputJurusan[]" placeholder="@lang('message.placeSchoolMajor')" required>
                        @error('inputJurusan')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3" data-aos="fade-down">
                        <label for="inputAlamatSekolah" class="form-label">@lang('message.labelSchoolLocation')</label>
                        <input type="text" class="form-control" id="inputAlamatSekolah" name="inputAlamatSekolah[]" placeholder="@lang('message.labelSchoolLocation')" required>
                        @error('inputAlamatSekolah')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <hr>
                    <div class="col-12" data-aos="fade-down">
                        <a class="btn btn-outline-success col-12" id="tambah-form-akademik">@lang('message.buttonAcademic')</a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secFabrication" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                <div class="sec3 row justify-content-between bg-white pt-2 px-0" style="margin-left: 0.5px;">
                    <h5 class="col-10 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#fabrication" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section3') 
                        <i class="bi bi-caret-right-fill" id="idFabricatin" style="margin-left: 20px;"></i>
                    </h5>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="fabrication">
                    <div class="col-md-4" data-aos="fade-down">
                        <label for="inputStatusKeluarga" class="form-label">@lang('message.labelFamilyRelation')</label>
                        <select id="inputStatusKeluarga" name="inputStatusKeluarga[]" class="form-select" required>
                            <option selected>@lang('message.placeFamilyRelation1')</option>
                            <option>@lang('message.placeFamilyRelation2')</option>
                            <option>@lang('message.placeFamilyRelation3')</option>
                            <option>@lang('message.placeFamilyRelation4')</option>
                            <option>@lang('message.placeFamilyRelation5')</option>
                            <option>@lang('message.placeFamilyRelation6')</option>
                            <option>@lang('message.placeFamilyRelation7')</option>
                            <option>@lang('message.placeFamilyRelation8')</option>
                            <option>@lang('message.placeFamilyRelation9')</option>
                        </select>
                        @error('inputStatusKeluarga')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-4" data-aos="fade-down">
                        <label for="inputNamaKeluarga" class="form-label">@lang('message.labelFamilyName')</label>
                        <input type="text" class="form-control" id="inputNamaKeluarga" name="inputNamaKeluarga[]" placeholder="@lang('message.placeFamilyName')" required>
                        @error('inputNamaKeluarga')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-down">
                        <label for="inputBirthDayKeluarga" class="form-label">@lang('message.labelFamilyBirthday')</label>
                        <input type="date" class="form-control" id="inputBirthDayKeluarga" name="inputBirthDayKeluarga[]" placeholder="@lang('message.placeFamilyBirthday')" required>
                        @error('inputBirthDayKeluarga')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <label for="inputNoHPKeluarga" class="form-label">@lang('message.labelFamilyNoHP')</label>
                        <input type="text" class="form-control" id="inputNoHPKeluarga" name="inputNoHPKeluarga[]" placeholder="@lang('message.placeFamilyNoHP')" required>
                        @error('inputNoHPKeluarga')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-down">
                        <label for="inputStatusKeluarga" class="form-label">@lang('message.labelFamilyCohabit')</label>
                        <select id="inputStatusKeluarga" name="inputCohabit[]" class="form-select" required>
                            <option>@lang('message.placeFamilyCohabit1')</option>
                            <option>@lang('message.placeFamilyCohabit2')</option>
                        </select>
                        @error('inputStatusKeluarga')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <hr>
                    <div class="col-12" data-aos="fade-down">
                        <a class="btn btn-outline-success col-12" id="tambah-form-keluarga">@lang('message.buttonFamily')</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="secConstruction" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                {{-- <h2 class=" fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#construction" aria-expanded="false" aria-controls="collapseExample">
                    @lang('message.section4')
                    <i class="bi bi-caret-right-fill" id="idConstruction"></i>
                </h2> --}}
                <div class="sec4 row justify-content-between bg-white pt-2 px-0" style="margin-left: 0.5px;">
                    <h5 class="col-10 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#construction" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section4') 
                        <i class="bi bi-caret-right-fill" id="idConstruction" style="margin-left: 20px;"></i>
                    </h5>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="construction">
                    <div class="col-md-4" data-aos="fade-down">
                        <label for="inputNamaSertifikat" class="form-label">@lang('message.labelCertificateName')</label>
                        <input type="text" class="form-control" id="inputNamaSertifikat" name="inputNamaSertifikat[]" placeholder="@lang('message.placeCertificateName')" required>
                        @error('inputNamaSertifikat')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-4" data-aos="fade-down">
                        <label for="inputTanggalSertifikat" class="form-label">@lang('message.labelCertificateDate')</label>
                        <input type="date" class="form-control" id="inputTanggalSertifikat" name="inputTanggalSertifikat[]" placeholder="@lang('message.placeCertificateDate')" required>
                        @error('inputTanggalSertifikat')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3" data-aos="fade-down">
                        <label for="inputNamaPenyelenggara" class="form-label">@lang('message.labelCertificateAuthor')</label>
                        <input type="text" class="form-control" id="inputNamaPenyelenggara" name="inputNamaPenyelenggara[]" placeholder="@lang('message.placeCertificateAuthor')" required>
                        @error('inputNamaPenyelenggara')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <label for="inputNoSertifikat" class="form-label">@lang('message.labelCertificateNo')</label>
                        <input type="text" class="form-control" id="inputNoSertifikat" name="inputNoSertifikat[]" placeholder="@lang('message.placeCertificateNo')" required>
                        @error('inputNoSertifikat')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3" data-aos="fade-down">
                        <label for="inputLokasiSertifikat" class="form-label">@lang('message.labelCertificateLocation')</label>
                        <input type="text" class="form-control" id="inputLokasiSertifikat" name="inputLokasiSertifikat[]" placeholder="@lang('message.labelCertificateLocation')" required>
                        @error('inputLokasiSertifikat')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror   
                    </div>
                    <hr>
                    <div class="col-12" data-aos="fade-down">
                        <a class="btn btn-outline-success col-12" id="tambah-form-sertifikat">@lang('message.buttonCertificate')</a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secMaintenance" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                {{-- <h2 class=" fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance" aria-expanded="false" aria-controls="collapseExample">
                    @lang('message.section5')
                    <i class="bi bi-caret-right-fill" id="idMaintenance"></i>
                </h2> --}}
                <div class="sec5 row justify-content-between bg-white pt-2 px-0" style="margin-left: 0.5px;">
                    <h5 class="col-10 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section5') 
                        <i class="bi bi-caret-right-fill" id="idMaintenance" style="margin-left: 20px;"></i>
                    </h5>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="maintenance">
                    <div class="col-6" data-aos="fade-down">
                        <label for="inputNamaPerusahaan" class="form-label">@lang('message.labelCareerName')</label>
                        <input type="text" class="form-control" id="inputNamaPerusahaan" name="inputNamaPerusahaan[]" placeholder="@lang('message.placeCareerName')" required>
                        @error('inputNamaPerusahaan')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-6 mb-3" data-aos="fade-down">
                        <label for="inputPosisiPekerjaan" class="form-label">@lang('message.labelCareerPosition')</label>
                        <input type="text" class="form-control" id="inputPosisiPekerjaan" name="inputPosisiPekerjaan[]" placeholder="@lang('message.placeCareerPosition')" required>
                        @error('inputPosisiPekerjaan')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <label for="inputPeriodeDari" class="form-label">@lang('message.labelCareerPeriodeFrom')</label>
                        <input type="month" class="form-control" id="inputPeriodeDari" name="inputPeriodeDari[]" required>
                        @error('inputPeriodeDari')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3" data-aos="fade-down">
                        <label for="inputPeriodeSampai" class="form-label">@lang('message.labelCareerPeriodeTo')</label>
                        <input type="month" class="form-control" id="inputPeriodeSampai" name="inputPeriodeSampai[]" required>
                        @error('inputPeriodeSampai')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <hr>
                    <div class="col-12" data-aos="fade-down">
                        <a class="btn btn-outline-success col-12" id="tambah-form-karir">@lang('message.buttonCareer')</a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secMaintenance1" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                {{-- <h2 class=" fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance1" aria-expanded="false" aria-controls="collapseExample">
                    @lang('message.section6')
                    <i class="bi bi-caret-right-fill" id="idMaintenance1"></i>
                </h2> --}}
                <div class="sec6 row justify-content-between bg-white pt-2 px-0" style="margin-left: 0.5px;">
                    <h5 class="col-10 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance1" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section6') 
                        <i class="bi bi-caret-right-fill" id="idMaintenance1" style="margin-left: 20px;"></i>
                    </h5>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="maintenance1">
                    <div class="col-12" data-aos="fade-down">
                        <label for="inputMotivasi" class="form-label">@lang('message.labelMotivation1')</label>
                        <textarea class="form-control" id="inputMotivasi" name="inputMotivasi" placeholder="@lang('message.placeMotivation1')" required></textarea>
                        @error('inputMotivasi')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-12" data-aos="fade-down">
                        <label for="inputOthers" class="form-label">@lang('message.labelMotivation2')</label>
                        <textarea class="form-control" id="inputOthers" name="inputOthers" placeholder="@lang('message.placeMotivation2')" required></textarea>
                        @error('inputOthers')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secMaintenance2" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                {{-- <h2 class=" fs-5 text-primary mb-5" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance2" aria-expanded="false" aria-controls="collapseExample">
                    @lang('message.section7')
                    <i class="bi bi-caret-right-fill" id="idMaintenance2"></i>
                </h2> --}}
                <div class="sec7 row justify-content-between bg-white pt-2 px-0" style="margin-left: 0.5px;">
                    <h5 class="col-10 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance2" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section7') 
                        <i class="bi bi-caret-right-fill" id="idMaintenance2" style="margin-left: 20px;"></i>
                    </h5>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="maintenance2">
                    <div class="col-md-6" data-aos="fade-down">
                        <center>
                        <img src="{{URL ('images/No_Image_Available.jpg')}}" class="rounded" alt="preview" id="previewSKCK" width="140px" height="140px">
                    </center>
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <label for="mySKCK" class="form-label ms-3">@lang('message.labelSKCK')</label>
                        <input class="form-control" type="file" id="mySKCK" name="mySKCK" required>
                        @error('mySKCK')
                            <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-12 mt-5 mb-5" data-aos="fade-down">
            <button type="submit" class="btn btn-primary col-12 rounded">@lang('message.buttonRecruitment')</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        // Dropdown 1
        $('#engineering').on('show.bs.collapse', function() {
            hideOtherDropdowns('#engineering', '#idEngineering');
        }).on('hide.bs.collapse', function() {
            resetIcon('#idEngineering');
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
        $('#maintenance1').on('show.bs.collapse', function() {
            hideOtherDropdowns('#maintenance1', '#idmaintenance1');
        }).on('hide.bs.collapse', function() {
            resetIcon('#idmaintenance1');
        });
        $('#maintenance2').on('show.bs.collapse', function() {
            hideOtherDropdowns('#maintenance2', '#idmaintenance2');
        }).on('hide.bs.collapse', function() {
            resetIcon('#idmaintenance2');
        });

        function hideOtherDropdowns(target, icon) {
            $('.collapse').not(target).collapse('hide');
            $('.bi-caret-down-fill').not(icon).removeClass('bi-caret-down-fill').addClass('bi-caret-right-fill');
        }

        function resetIcon(icon) {
            $(icon).removeClass('bi-caret-down-fill').addClass('bi-caret-right-fill');
        }
        // Function to scroll to the top of the page
        function scrollToTop() {
            $('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        // Reset scroll position when dropdown is hidden
        $('.collapse').on('hidden.bs.collapse', function () {
            scrollToTop();
        });
    });

    const formFile = document.getElementById('inputFoto');
    const preview = document.getElementById('preview');
    formFile.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function() {
                preview.src = reader.result;
            });
            reader.readAsDataURL(file);
        }
    });
    
    const formFile2 = document.getElementById('mySKCK');
    const preview2 = document.getElementById('previewSKCK');
    formFile2.addEventListener('change', function() {
        const file2 = this.files[0];
        if (file2) {
            const reader2 = new FileReader();
            reader2.addEventListener('load', function() {
            preview2.src = reader2.result;
            });
            reader2.readAsDataURL(file2);
        }
    });

    $(document).ready(function() {
        var counterAcademic = 1;
        $('#tambah-form-akademik').click(function() {
            var formAcademic = `
                    <div class="col-md-6" data-aos="fade-down">
                        <label for="inputNamaSekolah" class="form-label">@lang('message.labelSchoolName')</label>
                        <input type="text" class="form-control" id="inputNamaSekolah" name="inputNamaSekolah[]" placeholder="@lang('message.placeSchoolName')" required>
                        @error('inputNamaSekolah')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3" data-aos="fade-down">
                        <label for="inputTahunLulus" class="form-label">@lang('message.labelSchoolGraduation')</label>
                        <input type="month" class="form-control" id="inputTahunLulus" name="inputTahunLulus[]" placeholder="@lang('message.placeSchoolGraduation')" required>
                        @error('inputTahunLulus')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <label for="inputJurusan" class="form-label">@lang('message.labelSchoolMajor')</label>
                        <input type="text" class="form-control" id="inputJurusan" name="inputJurusan[]" placeholder="@lang('message.placeSchoolMajor')" required>
                        @error('inputJurusan')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3" data-aos="fade-down">
                        <label for="inputAlamatSekolah" class="form-label">@lang('message.labelSchoolLocation')</label>
                        <input type="text" class="form-control" id="inputAlamatSekolah" name="inputAlamatSekolah[]" placeholder="@lang('message.labelSchoolLocation')" required>
                        @error('inputAlamatSekolah')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                <hr>
            `;
            $('#form-container-academic').append(formAcademic);
            counterAcademic++;
        });
    });

    $(document).ready(function() {
        var counterFamily = 1;
        var counterFamilyRadio = 1;
        $('#tambah-form-keluarga').click(function() {
            var formFamily = `
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputStatusKeluarga" class="form-label">@lang('message.labelFamilyRelation')</label>
                    <select id="inputStatusKeluarga" name="inputStatusKeluarga[]" class="form-select" required>
                        <option selected>@lang('message.placeFamilyRelation1')</option>
                        <option>@lang('message.placeFamilyRelation2')</option>
                        <option>@lang('message.placeFamilyRelation3')</option>
                        <option>@lang('message.placeFamilyRelation4')</option>
                        <option>@lang('message.placeFamilyRelation5')</option>
                        <option>@lang('message.placeFamilyRelation6')</option>
                        <option>@lang('message.placeFamilyRelation7')</option>
                        <option>@lang('message.placeFamilyRelation8')</option>
                        <option>@lang('message.placeFamilyRelation9')</option>
                    </select>
                    @error('inputStatusKeluarga')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputNamaKeluarga" class="form-label">@lang('message.labelFamilyName')</label>
                    <input type="text" class="form-control" id="inputNamaKeluarga" name="inputNamaKeluarga[]" placeholder="@lang('message.placeFamilyName')" required>
                    @error('inputNamaKeluarga')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-down">
                    <label for="inputBirthDayKeluarga" class="form-label">@lang('message.labelFamilyBirthday')</label>
                    <input type="date" class="form-control" id="inputBirthDayKeluarga" name="inputBirthDayKeluarga[]" placeholder="@lang('message.placeFamilyBirthday')" required>
                    @error('inputBirthDayKeluarga')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputNoHPKeluarga" class="form-label">@lang('message.labelFamilyNoHP')</label>
                    <input type="text" class="form-control" id="inputNoHPKeluarga" name="inputNoHPKeluarga[]" placeholder="@lang('message.placeFamilyNoHP')" required>
                    @error('inputNoHPKeluarga')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-down">
                    <label for="inputStatusKeluarga" class="form-label">@lang('message.labelFamilyCohabit')</label>
                    <select id="inputStatusKeluarga" name="inputCohabit[]" class="form-select" required>
                        <option>@lang('message.placeFamilyCohabit1')</option>
                        <option>@lang('message.placeFamilyCohabit2')</option>
                    </select>
                    @error('inputStatusKeluarga')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <hr>
            `;
            $('#form-container-family').append(formFamily);
            counterFamily++;
            counterFamilyRadio++;
        });
    });

    $(document).ready(function() {
        var counterCertificate = 1;
        $('#tambah-form-sertifikat').click(function() {
            var formCertificate = `
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputNamaSertifikat" class="form-label">@lang('message.labelCertificateName')</label>
                    <input type="text" class="form-control" id="inputNamaSertifikat" name="inputNamaSertifikat[]" placeholder="@lang('message.placeCertificateName')" required>
                    @error('inputNamaSertifikat')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputTanggalSertifikat" class="form-label">@lang('message.labelCertificateDate')</label>
                    <input type="date" class="form-control" id="inputTanggalSertifikat" name="inputTanggalSertifikat[]" placeholder="@lang('message.placeCertificateDate')" required>
                    @error('inputTanggalSertifikat')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-down">
                    <label for="inputNamaPenyelenggara" class="form-label">@lang('message.labelCertificateAuthor')</label>
                    <input type="text" class="form-control" id="inputNamaPenyelenggara" name="inputNamaPenyelenggara[]" placeholder="@lang('message.placeCertificateAuthor')" required>
                    @error('inputNamaPenyelenggara')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputNoSertifikat" class="form-label">@lang('message.labelCertificateNo')</label>
                    <input type="text" class="form-control" id="inputNoSertifikat" name="inputNoSertifikat[]" placeholder="@lang('message.placeCertificateNo')" required>
                    @error('inputNoSertifikat')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-down">
                    <label for="inputLokasiSertifikat" class="form-label">@lang('message.labelCertificateLocation')</label>
                    <input type="text" class="form-control" id="inputLokasiSertifikat" name="inputLokasiSertifikat[]" placeholder="@lang('message.labelCertificateLocation')" required>
                    @error('inputLokasiSertifikat')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror   
                </div>
                <hr>
            `;
            $('#form-container-certificate').append(formCertificate);
            counterCertificate++;
        });
    });
    
    $(document).ready(function() {
        var counterCareer = 1;
        $('#tambah-form-karir').click(function() {
            var formCareer = `
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputNamaPerusahaan" class="form-label">@lang('message.labelCareerName')</label>
                    <input type="text" class="form-control" id="inputNamaPerusahaan" name="inputNamaPerusahaan[]" placeholder="@lang('message.placeCareerName')" required>
                    @error('inputNamaPerusahaan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-down">
                    <label for="inputPosisiPekerjaan" class="form-label">@lang('message.labelCareerPosition')</label>
                    <input type="text" class="form-control" id="inputPosisiPekerjaan" name="inputPosisiPekerjaan[]" placeholder="@lang('message.placeCareerPosition')" required>
                    @error('inputPosisiPekerjaan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputPeriodeDari" class="form-label">@lang('message.labelCareerPeriodeFrom')</label>
                    <input type="month" class="form-control" id="inputPeriodeDari" name="inputPeriodeDari[]" required>
                    @error('inputPeriodeDari')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-down">
                    <label for="inputPeriodeSampai" class="form-label">@lang('message.labelCareerPeriodeTo')</label>
                    <input type="month" class="form-control" id="inputPeriodeSampai" name="inputPeriodeSampai[]" required>
                    @error('inputPeriodeSampai')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <hr>
            `;
            $('#form-container-career').append(formCareer);
            counterCareer++;
        });
    });
    $(function(){
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
    
        $(function(){
            $('#inputProvince').on('change', function(){
                let id_province = $('#inputProvince option:selected').data('values');
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getCity') }}",
                    data : {id_province:id_province},
                    cache : false,
                    success: function(msg){
                        $('#inputCity').html(msg);
                    },
                    error: function(data){
                        console.log('error:', data);
                    },
                })
            })
        });
        
        $(function(){
            $('#inputCity').on('change', function(){
                let id_city = $('#inputCity option:selected').data('values');
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getSubdistrict') }}",
                    data : {id_city:id_city},
                    cache : false,
                    success: function(msg){
                        $('#inputKecamatan').html(msg);
                    },
                    error: function(data){
                        console.log('error:', data);
                    },
                })
            })
        });
        
        $(function(){
            $('#inputKecamatan').on('change', function(){
                let id_district = $('#inputKecamatan option:selected').data('values');
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getVillage') }}",
                    data : {id_district:id_district},
                    cache : false,
                    success: function(msg){
                        $('#inputDesa').html(msg);
                    },
                    error: function(data){
                        console.log('error:', data);
                    },
                })
            })
        });

        $(function(){
            $('#inputCurrentProvince').on('change', function(){
                let id_province = $('#inputCurrentProvince option:selected').data('values');
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getCurrentCity') }}",
                    data : {id_province:id_province},
                    cache : false,
                    success: function(msg){
                        $('#inputCurrentCity').html(msg);
                    },
                    error: function(data){
                        console.log('error:', data);
                    },
                })
            })
        });
        
        $(function(){
            $('#inputCurrentCity').on('change', function(){
                let id_city = $('#inputCurrentCity option:selected').data('values');
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getCurrentSubdistrict') }}",
                    data : {id_city:id_city},
                    cache : false,
                    success: function(msg){
                        $('#inputCurrentKecamatan').html(msg);
                    },
                    error: function(data){
                        console.log('error:', data);
                    },
                })
            })
        });
        
        $(function(){
            $('#inputCurrentKecamatan').on('change', function(){
                let id_district = $('#inputCurrentKecamatan option:selected').data('values');
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getCurrentVillage') }}",
                    data : {id_district:id_district},
                    cache : false,
                    success: function(msg){
                        $('#inputCurrentDesa').html(msg);
                    },
                    error: function(data){
                        console.log('error:', data);
                    },
                })
            })
        });
    });

    // var inputCountry = document.getElementById('inputCountry');
    // var inputProvince = document.getElementById('inputProvince');
    // var inputCity = document.getElementById('inputCity');
    // var inputKecamatan = document.getElementById('inputKecamatan');
    // var inputDesa = document.getElementById('inputDesa');
    // var inputRT = document.getElementById('inputRT');
    // var inputRW = document.getElementById('inputRW');
    // var inputPostCode = document.getElementById('inputPostCode');

    // var inputCurrentCountry = document.getElementById('inputCurrentCountry');
    // var inputCurrentProvince = document.getElementById('inputCurrentProvince');
    // var inputCurrentCity = document.getElementById('inputCurrentCity');
    // var inputCurrentKecamatan = document.getElementById('inputCurrentKecamatan');
    // var inputCurrentDesa = document.getElementById('inputCurrentDesa');
    // var inputCurrentRT = document.getElementById('inputCurrentRT');
    // var inputCurrentRW = document.getElementById('inputCurrentRW');
    // var inputCurrentPostCode = document.getElementById('inputCurrentPostCode');
    // var gridCheck = document.getElementById('gridCheck');

    // gridCheck.addEventListener('change', function() {
    //     if (this.checked) {
    //         inputCurrentCountry.dataset.values = inputCountry.dataset.values;
    //         inputCurrentProvince.dataset.values = inputProvince.dataset.values;
    //         inputCurrentCity.dataset.values = inputCity.dataset.values;
    //         // inputCurrentCity.value = inputCity.options[inputCity.selectedIndex].getAttribute('data-values');
    //         inputCurrentKecamatan.dataset.values = inputKecamatan.dataset.values;
    //         inputCurrentDesa.dataset.values = inputDesa.dataset.values;
    //         inputCurrentRT.dataset.values = inputRT.dataset.values;
    //         inputCurrentRW.dataset.values = inputRW.dataset.values;
    //         inputCurrentPostCode.dataset.values = inputPostCode.dataset.values;
    //     } else {
    //         inputCurrentCountry.value = '';
    //         inputCurrentProvince.value = '';
    //         inputCurrentCity.value = '';
    //         inputCurrentKecamatan.value = '';
    //         inputCurrentDesa.value = '';
    //         inputCurrentRT.value = '';
    //         inputCurrentRW.value = '';
    //         inputCurrentPostCode.value = '';
    //     }
    // });
    
    function formatRupiah() {
        var rupiah = document.getElementById("inputSallary");
        // menghilangkan semua karakter kecuali angka
        var nilai = rupiah.value.replace(/[^\d]/g, "");
        // mengubah nilai menjadi format rupiah
        var result = "";
        while (nilai.length > 3) {
            result = "." + nilai.substr(nilai.length - 3) + result;
            nilai = nilai.slice(0, nilai.length - 3);
        }
        result = nilai + result;
        rupiah.value = "Rp " + result;
    }

    function formatHP() {
        var hpInput = document.getElementById("inputNoHP");
        var hpValue = hpInput.value;

        hpValue = hpValue.replace(/[^\d]/g, "");

        var formattedValue = "";
        for (var i = 0; i < hpValue.length; i++) {
            if (i == 4 || i == 8) {
            formattedValue += "-";
            }
            formattedValue += hpValue.charAt(i);
        }

        hpInput.value = formattedValue;
    }  

    var npwpInput = document.getElementById("MYinputNPWP"); 
    npwpInput.addEventListener("input", function(){
        var npwpValue = npwpInput.value;
        console.log(npwpValue);
        npwpValue = npwpValue.replace(/\D/g, '');
        npwpValue = npwpValue.substring(0, 15);
        npwpValue = npwpValue.replace(/(\d{2})(\d{1,3})?(\d{1,3})?(\d{1})(\d{1,3})?(\d{1,3})/, function(match, p1, p2, p3, p4, p5, p6) {
            var formatted = "";
            if (p1) {
                formatted = p1;
            }
            if (p2) {
                formatted += "." + p2;
            }
            if (p3) {
                formatted += "." + p3;
            }
            if (p4) {
                formatted += "." + p4;
            }
            if (p5) {
                formatted += "-" + p5;
            }
            if (p6) {
                formatted += "." + p6;
            }
            return formatted;
        });
        npwpInput.value = npwpValue;
    });
</script>
<br><br>
@endsection