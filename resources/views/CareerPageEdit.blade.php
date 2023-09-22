@extends('Layout/MainLayout')
@section('title','PT Achivon Prestasi Abadi')
@section('mycontent')

    <div class="modal fade" id="academicModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.buttonAcademic')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ url('/addAcademic') }}" method="post">
                        @csrf
                        <input type="number" class="form-control me-2" id="editNIK" name="editNIK" placeholder="@lang('message.placeNIK')" value="{{ $dataEmployee[0]->KTP }}" required readonly hidden>
                        <input type="text" class="form-control" id="idEmployee" name="idEmployee" value="{{ $dataEmployee[0]->id_employee }}" required readonly hidden>
                        <div class="col-md-6">
                            <label for="inputNamaSekolah" class="form-label">@lang('message.labelSchoolName')</label>
                            <input type="text" class="form-control" placeholder="@lang('message.placeSchoolName')" id="inputNamaSekolah" name="inputNamaSekolah" value="{{ old('inputNamaSekolah') }}" required>
                            @error('inputNamaSekolah')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputTahunLulus" class="form-label">@lang('message.labelSchoolGraduation')</label>
                            <input type="month" class="form-control" placeholder="@lang('message.placeSchoolGraduation')" id="inputTahunLulus" name="inputTahunLulus" value="{{ old('inputNamaSekolah') }}" required>
                            @error('inputTahunLulus')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputJurusan" class="form-label">@lang('message.labelSchoolMajor')</label>
                            <input type="text" class="form-control" placeholder="@lang('message.placeSchoolMajor')" id="inputJurusan" name="inputJurusan" value="{{ old('inputNamaSekolah') }}" required>
                            @error('inputJurusan')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputAlamatSekolah" class="form-label">@lang('message.labelSchoolLocation')</label>
                            <input type="text" class="form-control" placeholder="@lang('message.placeSchoolLocation')" id="inputAlamatSekolah" name="inputAlamatSekolah" value="{{ old('inputNamaSekolah') }}" required>
                            @error('inputAlamatSekolah')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                            <button type="submit" class="btn btn-primary">@lang('message.changeButton')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@foreach ($dataAcademic as $academic)
    <div class="modal fade" id="academicModalDetail{{ $academic->id_academic }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalDetail')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <div class="col-md-5">
                        <h6>@lang('message.labelSchoolName')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $academic->School_Name }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelSchoolGraduation')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $academic->Graduation }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelSchoolMajor')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $academic->major }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelSchoolLocation')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $academic->location }}</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach ($dataAcademic as $academic)
    <div class="modal fade" id="academicModalEdit{{ $academic->id_academic }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalUpdate')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ url('updateAcademic', $academic->id_academic) }}" method="post">
                        @csrf
                        <input type="number" class="form-control me-2" id="editNIK" name="editNIK" placeholder="@lang('message.placeNIK')" value="{{ $dataEmployee[0]->KTP }}" required readonly hidden>
                        
                        <input type="text" class="form-control" id="idAcademic" name="idAcademic" value="{{ $academic->id_academic }}" required readonly hidden>
                        <div class="col-md-6">
                            <label for="inputNamaSekolah" class="form-label">@lang('message.labelSchoolName')</label>
                            <input type="text" class="form-control" placeholder="@lang('message.placeSchoolName')" id="inputNamaSekolah" name="inputNamaSekolah" value="{{ old('inputNamaSekolah', $academic->School_Name) }}" required>
                            @error('inputNamaSekolah')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputTahunLulus" class="form-label">@lang('message.labelSchoolGraduation')</label>
                            <input type="month" class="form-control" placeholder="@lang('message.placeSchoolGraduation')" id="inputTahunLulus" name="inputTahunLulus" value="{{ old('inputNamaSekolah', $academic->Graduation) }}" required>
                            @error('inputTahunLulus')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputJurusan" class="form-label">@lang('message.labelSchoolMajor')</label>
                            <input type="text" class="form-control" placeholder="@lang('message.placeSchoolMajor')" id="inputJurusan" name="inputJurusan" value="{{ old('inputNamaSekolah', $academic->major) }}" required>
                            @error('inputJurusan')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputAlamatSekolah" class="form-label">@lang('message.labelSchoolLocation')</label>
                            <input type="text" class="form-control" placeholder="@lang('message.placeSchoolLocation')" id="inputAlamatSekolah" name="inputAlamatSekolah" value="{{ old('inputNamaSekolah', $academic->location) }}" required>
                            @error('inputAlamatSekolah')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                            <button type="submit" class="btn btn-primary">@lang('message.changeButton')</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endforeach
@foreach ($dataAcademic as $academic)
    <div class="modal fade" id="academicModalDelete{{ $academic->id_academic }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalDelete')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <center>
                        <div class="col-12">
                            <h6>@lang('message.modalDeleteContent')</h6><br>
                        </div>
                    </center>
                    <div class="col-md-5">
                        <h6>@lang('message.labelSchoolName')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $academic->School_Name }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelSchoolGraduation')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $academic->Graduation }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelSchoolMajor')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $academic->major }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelSchoolLocation')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $academic->location }}</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <form class="" action="{{ url('deleteAcademic', $academic->id_academic) }}" method="post">
                        @csrf
                        <input type="number" class="form-control me-2" id="deleteID" name="editNIK" placeholder="@lang('message.placeNIK')" value="{{ $academic->id_academic }}" required readonly hidden>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                        <button type="submit" class="btn btn-danger">@lang('message.deleteButton')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

{{-- Modal Family --}}
    <div class="modal fade" id="familyModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.buttonFamily')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ url('addFamily') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" id="idEmployee" name="idEmployee" value="{{ $dataEmployee[0]->id_employee }}" required readonly hidden>
                        <div class="col-md-4">
                            <label for="inputStatusKeluarga" class="form-label">@lang('message.labelFamilyRelation')</label>
                            <select id="inputStatusKeluarga" name="inputStatusKeluarga" class="form-select" required>
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
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="inputNamaKeluarga" class="form-label">@lang('message.labelFamilyName')</label>
                            <input type="text" class="form-control" placeholder="@lang('message.placeFamilyName')" id="inputNamaKeluarga" name="inputNamaKeluarga" value="{{ old('inputNamaKeluarga') }}" required>
                            @error('inputNamaKeluarga')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="inputBirthDayKeluarga" class="form-label">@lang('message.labelFamilyBirthday')</label>
                            <input type="date" class="form-control" id="inputBirthDayKeluarga" name="inputBirthDayKeluarga" placeholder="@lang('message.placeFamilyBirthday')" value="{{ old('inputBirthDayKeluarga') }}" required>
                            @error('inputBirthDayKeluarga')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputNoHPKeluarga" class="form-label">@lang('message.labelFamilyNoHP')</label>
                            <input type="text" class="form-control" id="inputNoHPKeluarga" name="inputNoHPKeluarga" placeholder="@lang('message.placeFamilyNoHP')" value="{{ old('inputNoHPKeluarga') }}" required>
                            @error('inputNoHPKeluarga')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label" for="RadioGender">@lang('message.labelFamilyCohabit')</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="RadioCohabit" id="RadioCohabit1">
                                <label class="form-check-label" for="RadioCohabit1">@lang('message.placeFamilyCohabit1')</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="RadioCohabit" id="RadioCohabit2">
                                <label class="form-check-label" for="RadioCohabit2">@lang('message.placeFamilyCohabit2')</label>
                            </div>
                            @error('radioCohabit')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                            <button type="submit" class="btn btn-primary">@lang('message.changeButton')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@foreach ($dataFamily as $family)
    <div class="modal fade" id="familyModalDetail{{ $family->id_family }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalDetailFamily')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyRelation')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $family->hubungan }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyName')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $family->name }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyBirthday')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $family->Birthday }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyNoHP')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $family->No_HP }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyCohabit')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $family->cohabit }}</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach ($dataFamily as $family)
    <div class="modal fade" id="familyModalEdit{{ $family->id_family }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalUpdateFamily')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ url('updateFamily', $family->id_family) }}" method="post">
                        @csrf
                        <input type="text" class="form-control" id="idFamily" name="idFamily" value="{{ $family->id_family }}" required readonly hidden>
                        <div class="col-md-4">
                            <label for="inputStatusKeluarga" class="form-label">@lang('message.labelFamilyRelation')</label>
                            <select id="inputStatusKeluarga" name="inputStatusKeluarga" class="form-select" required>
                                <option>{{ $family->hubungan }}</option>
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
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="inputNamaKeluarga" class="form-label">@lang('message.labelFamilyName')</label>
                            <input type="text" class="form-control" placeholder="@lang('message.placeFamilyName')" id="inputNamaKeluarga" name="inputNamaKeluarga" value="{{ $family->name }}" required>
                            @error('inputNamaKeluarga')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="inputBirthDayKeluarga" class="form-label">@lang('message.labelFamilyBirthday')</label>
                            <input type="date" class="form-control" id="inputBirthDayKeluarga" name="inputBirthDayKeluarga" placeholder="@lang('message.placeFamilyBirthday')" value="{{ $family->Birthday }}" required>
                            @error('inputBirthDayKeluarga')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputNoHPKeluarga" class="form-label">@lang('message.labelFamilyNoHP')</label>
                            <input type="text" class="form-control" id="inputNoHPKeluarga" name="inputNoHPKeluarga" placeholder="@lang('message.placeFamilyNoHP')" value="{{ $family->No_HP }}" required>
                            @error('inputNoHPKeluarga')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label" for="RadioGender">@lang('message.labelFamilyCohabit')</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="RadioCohabit" id="RadioCohabit1" value="@lang('message.placeFamilyCohabit1')" {{ old('RadioCohabit') == "@lang('message.placeFamilyCohabit1')" ? 'checked' : '' }}>
                                <label class="form-check-label" for="RadioCohabit1">@lang('message.placeFamilyCohabit1')</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="RadioCohabit" id="RadioCohabit2" value="@lang('message.placeFamilyCohabit2')" {{ old('RadioCohabit') == "@lang('message.placeFamilyCohabit2')" ? 'checked' : '' }}>
                                <label class="form-check-label" for="RadioCohabit2">@lang('message.placeFamilyCohabit2')</label>
                            </div>
                            @error('radioCohabit')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                            <button type="submit" class="btn btn-primary">@lang('message.changeButton')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach ($dataFamily as $family)
    <div class="modal fade col-10" id="familyModalDelete{{ $family->id_family }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalDeleteFamily')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <center>
                        <div class="col-12">
                            <h6>@lang('message.modalDeleteContent')</h6><br>
                        </div>
                    </center>
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyRelation')</h6>
                    </div>                        <div class="col-md-7">
                        <h6>: {{ $family->hubungan }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyName')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $family->name }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyBirthday')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $family->Birthday }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyNoHP')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $family->No_HP }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelFamilyCohabit')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $family->cohabit }}</h6>
                    </div>
                </div>
                <form action="{{ url('deleteFamily', $family->id_family) }}" method="post">
                    @csrf
                    <div class="modal-footer">
                        <input type="number" class="form-control me-2" id="deleteID" name="editNIK" placeholder="@lang('message.placeNIK')" value="{{ $family->id_family }}" required readonly hidden>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                        <button type="submit" class="btn btn-danger">@lang('message.deleteButton')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

{{-- Modal Certificate --}}
    <div class="modal fade" id="certificateModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.buttonCertificate')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <form class="row g-3" action="{{ url('addCertificate') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" id="idEmployee" name="idEmployee" value="{{ $dataEmployee[0]->id_employee }}" required readonly hidden>
                        <div class="col-md-4">
                            <label for="inputNamaSertifikat" class="form-label">@lang('message.labelCertificateName')</label>
                            <input type="text" class="form-control" id="inputNamaSertifikat" name="inputNamaSertifikat" placeholder="@lang('message.placeCertificateName')" value="" required>
                            @error('inputNamaSertifikat')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="inputTanggalSertifikat" class="form-label">@lang('message.labelCertificateDate')</label>
                            <input type="date" class="form-control" id="inputTanggalSertifikat" name="inputTanggalSertifikat" placeholder="@lang('message.placeCertificateDate')" value="" required>
                            @error('inputTanggalSertifikat')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="inputNamaPenyelenggara" class="form-label">@lang('message.labelCertificateAuthor')</label>
                            <input type="text" class="form-control" id="inputNamaPenyelenggara" name="inputNamaPenyelenggara" placeholder="@lang('message.placeCertificateAuthor')" value="" required>
                            @error('inputNamaPenyelenggara')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputNoSertifikat" class="form-label">@lang('message.labelCertificateNo')</label>
                            <input type="text" class="form-control" id="inputNoSertifikat" name="inputNoSertifikat" placeholder="@lang('message.placeCertificateNo')" value="" required>
                            @error('inputNoSertifikat')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputLokasiSertifikat" class="form-label">@lang('message.labelCertificateLocation')</label>
                            <input type="text" class="form-control" id="inputLokasiSertifikat" name="inputLokasiSertifikat" placeholder="@lang('message.placeCertificateLocation')" value="" required>
                            @error('inputLokasiSertifikat')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                            <button type="submit" class="btn btn-primary">@lang('message.changeButton')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@foreach ($dataCertificate as $certificate)
    <div class="modal fade" id="certificateModalDetail{{ $certificate->id_certificate }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalDetailCertificate')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateName')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->name_certificate }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateDate')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->acquisition }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateAuthor')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->name_authority }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateLocation')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->location }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateNo')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->no_certificate }}</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach ($dataCertificate as $certificate)
    <div class="modal fade" id="certificateModalEdit{{ $certificate->id_certificate }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalUpdateCertificate')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <form class="row g-3" action="{{ url('updateCertificate', $certificate->id_certificate) }}" method="post">
                        @csrf
                        <input type="text" class="form-control" id="idFamily" name="idFamily" value="{{ $certificate->id_certificate }}" required readonly hidden>
                        <div class="col-md-4">
                            <label for="inputNamaSertifikat" class="form-label">@lang('message.labelCertificateName')</label>
                            <input type="text" class="form-control" id="inputNamaSertifikat" name="inputNamaSertifikat" placeholder="@lang('message.placeCertificateName')" value="{{ $certificate->name_certificate }}" required>
                            @error('inputNamaSertifikat')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="inputTanggalSertifikat" class="form-label">@lang('message.labelCertificateDate')</label>
                            <input type="date" class="form-control" id="inputTanggalSertifikat" name="inputTanggalSertifikat" placeholder="@lang('message.placeCertificateDate')" value="{{ $certificate->acquisition }}" required>
                            @error('inputTanggalSertifikat')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="inputNamaPenyelenggara" class="form-label">@lang('message.labelCertificateAuthor')</label>
                            <input type="text" class="form-control" id="inputNamaPenyelenggara" name="inputNamaPenyelenggara" placeholder="@lang('message.placeCertificateAuthor')" value="{{ $certificate->name_authority }}" required>
                            @error('inputNamaPenyelenggara')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputNoSertifikat" class="form-label">@lang('message.labelCertificateNo')</label>
                            <input type="text" class="form-control" id="inputNoSertifikat" name="inputNoSertifikat" placeholder="@lang('message.placeCertificateNo')" value="{{ $certificate->no_certificate }}" required>
                            @error('inputNoSertifikat')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputLokasiSertifikat" class="form-label">@lang('message.labelCertificateLocation')</label>
                            <input type="text" class="form-control" id="inputLokasiSertifikat" name="inputLokasiSertifikat" placeholder="@lang('message.placeCertificateLocation')" value="{{ $certificate->location }}" required>
                            @error('inputLokasiSertifikat')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                            <button type="submit" class="btn btn-primary">@lang('message.changeButton')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach ($dataCertificate as $certificate)
    <div class="modal fade" id="certificateModalDelete{{ $certificate->id_certificate }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalDeleteCertificate')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <center>
                        <div class="col-12">
                            <h6>@lang('message.modalDeleteContent')</h6><br>
                        </div>
                    </center>
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateName')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->name_certificate }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateDate')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->acquisition }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateAuthor')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->name_authority }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateLocation')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->location }}</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>@lang('message.labelCertificateNo')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $certificate->no_certificate }}</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="{{ url('deleteCertificate', $certificate->id_certificate) }}" method="post">
                        @csrf
                        <input type="number" class="form-control me-2" id="deleteID" name="editNIK" placeholder="@lang('message.placeNIK')" value="{{ $certificate->id_certificate }}" required readonly hidden>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                        <button type="submit" class="btn btn-danger">@lang('message.deleteButton')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

{{-- Modal Summary --}}
    <div class="modal fade" id="summaryModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.buttonCareer')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <form class="row g-3" action="{{ url('addSummary') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" id="idEmployee" name="idEmployee" value="{{ $dataEmployee[0]->id_employee }}" required readonly hidden>
                        <div class="col-md-6">
                            <label for="inputNamaPerusahaan" class="form-label">@lang('message.labelCareerName')</label>
                            <input type="text" class="form-control" id="inputNamaPerusahaan" name="inputNamaPerusahaan" placeholder="@lang('message.placeCareerName')" value="" required>
                            @error('inputNamaPerusahaan')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPosisiPekerjaan" class="form-label">@lang('message.labelCareerPosition')</label>
                            <input type="text" class="form-control" id="inputPosisiPekerjaan" name="inputPosisiPekerjaan" placeholder="@lang('message.placeCareerPosition')" value="" required>
                            @error('inputPosisiPekerjaan')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPeriodeDari" class="form-label">@lang('message.labelCareerPeriodeFrom')</label>
                            <input type="month" class="form-control" placeholder="@lang('message.labelCareerPeriodeFrom')" id="inputPeriodeDari" name="inputPeriodeDari" value="" required>
                            @error('inputPeriodeDari')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPeriodeSampai" class="form-label">@lang('message.labelCareerPeriodeTo')</label>
                            <input type="month" class="form-control" placeholder="@lang('message.placeCareerPeriodeTo')" id="inputPeriodeSampai" name="inputPeriodeSampai" value="" required>
                            @error('inputPeriodeSampai')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                            <button type="submit" class="btn btn-primary">@lang('message.changeButton')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@foreach ($dataSummary as $summary)
    <div class="modal fade" id="summaryModalDetail{{ $summary->id_summary }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalDetailCareer')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerName')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->company_name }}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerPosition')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->job_position }}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerPeriodeFrom')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->period }}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerPeriodeTo')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->period_to }}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerLength')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->career }}</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach ($dataSummary as $summary)
    <div class="modal fade" id="summaryModalEdit{{ $summary->id_summary }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalUpdateCareer')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <form class="row g-3" action="{{ url('updateSummary'), $summary->id_summary }}" method="post">
                        @csrf
                        <input type="text" class="form-control" id="idFamily" name="idFamily" value="{{ $summary->id_summary }}" required readonly hidden>
                        <div class="col-md-6">
                            <label for="inputNamaPerusahaan" class="form-label">@lang('message.labelCareerName')</label>
                            <input type="text" class="form-control" id="inputNamaPerusahaan" name="inputNamaPerusahaan" placeholder="@lang('message.placeCareerName')" value="{{ $summary->company_name }}" required>
                            @error('inputNamaPerusahaan')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPosisiPekerjaan" class="form-label">@lang('message.labelCareerPosition')</label>
                            <input type="text" class="form-control" id="inputPosisiPekerjaan" name="inputPosisiPekerjaan" placeholder="@lang('message.placeCareerPosition')" value="{{ $summary->job_position }}" required>
                            @error('inputPosisiPekerjaan')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPeriodeDari" class="form-label">@lang('message.labelCareerPeriodeFrom')</label>
                            <input type="month" class="form-control" placeholder="@lang('message.labelCareerPeriodeFrom')" id="inputPeriodeDari" name="inputPeriodeDari" value="{{ $summary->period }}" required>
                            @error('inputPeriodeDari')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPeriodeSampai" class="form-label">@lang('message.labelCareerPeriodeTo')</label>
                            <input type="month" class="form-control" placeholder="@lang('message.placeCareerPeriodeTo')" id="inputPeriodeSampai" name="inputPeriodeSampai" value="{{ $summary->period_to }}" required>
                            @error('inputPeriodeSampai')
                                <div id="validationServerUsernameFeedback" class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                            <button type="submit" class="btn btn-primary">@lang('message.changeButton')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach ($dataSummary as $summary)
    <div class="modal fade" id="summaryModalDelete{{ $summary->id_summary }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('message.modalDeleteCareer')</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <center>
                        <div class="col-12">
                            <h6>@lang('message.modalDeleteContent')</h6><br>
                        </div>
                    </center>
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerName')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->company_name }}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerPosition')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->job_position }}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerPeriodeFrom')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->period }}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerPeriodeTo')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->period_to }}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>@lang('message.labelCareerLength')</h6>
                    </div>
                    <div class="col-md-7">
                        <h6>: {{ $summary->career }}</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="{{ url('deleteSummary'), $summary->id_summary }}" method="post">
                        @csrf
                        <input type="number" class="form-control me-2" id="deleteID" name="editNIK" placeholder="@lang('message.placeNIK')" value="{{ $summary->id_summary }}" required readonly hidden>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                        <button type="submit" class="btn btn-primary">@lang('message.deleteButton')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="container card rounded-top-1 col-8 px-5 pb-5 " style="--bs-bg-opacity: .9;">
    <div class="welcomeCareer row justify-content-between bg-white pt-3 px-0" style="margin-left: 0.5px;">
        <div class="col-1"></div>
        <h5 class="col-10 text-center text-primary">@lang('message.welcomeCareer')</h5>
        <a class="btn-close col-1" aria-label="Close" href="{{ url('/recruitment/editdata') }}"></a>
        <hr class="p-0">
    </div>
    <form method="post" action="{{ url('careerupdate') }}" class="">
        @csrf
        <div id="secEngineering" class="about" style="--bs-bg-opacity: .9;">
            <div class="sec1 row justify-content-start bg-white m-0 py-0 px-0" style="margin-left: 0.5px;">
                <h6 class="col-12 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#engineering" aria-expanded="false" aria-controls="collapseExample">
                    @lang('message.section1') 
                    <i class="bi bi-caret-right-fill" id="idEngineer" style="margin-left: 2cm;"></i>
                </h6>
                <hr class="p-0">
            </div>
            <div class="collapse row g-3 mx-1" id="engineering">
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputPosition" class="form-label @error ('inputPosition') is-invalid @enderror">@lang('message.labelPosition')</label>
                        <select id="inputPosition" name="inputPosition" class="form-select" value="{{ $dataEmployee[0]->Applying_A }}" required>
                        <option>{{ $dataEmployee[0]->Applying_A }}</option>
                        @foreach ($MyJob as $job)
                            <option>{{ $job->name_job }}</option>
                        @endforeach
                    </select>
                    @error('inputPosition')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputDiscipline" class="form-label @error ('inputDiscipline') is-invalid @enderror">@lang('message.labelDiscipline')</label>
                    <select id="inputDiscipline" name="inputDiscipline" class="form-select" value="{{ old('inputDiscipline') }}" required>
                        <option>@lang('message.placeDiscipline')</option>
                        @foreach ( $MyJob as $job)
                        <option>{{ $job->name_job }}</option>
                        @endforeach
                    </select>
                    @error('inputDiscipline')
                        <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputSallary" class="form-label">@lang('message.labelSallary')</label>
                    <input type="text" class="form-control" id="inputSallary" onkeyup="formatRupiah()" name="inputSallary" placeholder="@lang('message.placeSallary')" value="{{ $dataEmployee[0]->D_Salary }}" required>
                    @error('inputSallary')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <center>
                        <img src="data:image/png;base64,{{ $dataFoto[0]->photo }}" class="rounded" id="preview" width="120px" height="140px" onclick="showPreview(this)">
                    </center>
                </div>    
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputFoto" class="form-label ms-3">@lang('message.labelPhoto')</label>
                    <input class="form-control" type="file" id="inputFoto" name="inputFoto" required>
                    @error('inputFoto')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputNIK" class="form-label">@lang('message.labelNIK')</label>
                    <input type="text" class="form-control" id="inputNIK" name="inputNIK" placeholder="@lang('message.placeNIK')" value="{{ $dataEmployee[0]->KTP }}" required>
                    @error('inputNIK')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputName" class="form-label">@lang('message.labelName')</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="@lang('message.placeName')" value="{{ $dataEmployee[0]->Nama }}" required>
                    @error('inputName')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputBirthPlace" class="form-label">@lang('message.labelBirthPlace')</label>
                    <input type="text" class="form-control" id="inputBirthPlace" name="inputBirthPlace" placeholder="@lang('message.placeBirthPlace')" value="{{ $dataEmployee[0]->b_place }}" required>
                    @error('inputBirthPlace')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputBirthDay" class="form-label">@lang('message.labelBirthDay')</label>
                    <input type="date" class="form-control" id="inputBirthDay" name="inputBirthDay" placeholder="@lang('message.placeBirthDay')" value="{{ $dataEmployee[0]->birthday }}" required>
                    @error('inputBirthDay')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputNoHP" class="form-label">@lang('message.labelNoHP')</label>
                    <input type="text" class="form-control" id="inputNoHP" onkeyup="formatHP()" name="inputNoHP" placeholder="@lang('message.placeNoHP')" value="{{ $dataEmployee[0]->No_HP }}" required>
                    @error('inputNoHP')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputEmail" class="form-label">@lang('message.labelEmail')</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="@lang('message.placeEmail')" value="{{ $dataEmployee[0]->email }}" required>
                    @error('inputEmail')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputBPJSKesehatan" class="form-label">@lang('message.labelBPJSSehat')</label>
                    <input type="number" class="form-control" id="inputBPJSKesehatan" name="inputBPJSKesehatan" placeholder="@lang('message.placeBPJSSehat')" value="{{ $dataEmployee[0]->BPJS }}" required>
                    @error('inputBPJSKesehatan')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-down">
                    <label for="inputBPJSKetenagakerjaan" class="form-label">@lang('message.labelBPJSKerja')</label>
                    <input type="number" class="form-control" id="inputBPJSKetenagakerjaan" name="inputBPJSKetenagakerjaan" placeholder="@lang('message.placeBPJSKerja')" value="{{ $dataEmployee[0]->bpjs_ket }}" required>
                    @error('inputBPJSKetenagakerjaan')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputNPWP" class="form-label">@lang('message.labelNPWP')</label>
                    <input type="text" class="form-control" id="inputNPWP" onchange="formatNpwp(this.value)" name="inputNPWP" placeholder="@lang('message.labelNPWP')" value="{{ $dataEmployee[0]->NPWP }}" required>
                    @error('inputNPWP')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputReligion" class="form-label @error ('inputReligion') is-invalid @enderror">@lang('message.labelReligion')</label>
                    <select id="inputReligion" name="inputReligion" class="form-select" value="{{ old('inputReligion') }}" required>
                        @if ($dataEmployee[0]->religion == "Islam")
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Khonghuchu</option>
                        @elseif ($dataEmployee[0]->religion == "Kristen")
                        <option>Kristen</option>
                        <option>Islam</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Khonghuchu</option>
                        @elseif ($dataEmployee[0]->religion == "Hindu")
                        <option>Hindu</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Budha</option>
                        <option>Khonghuchu</option>
                        @elseif ($dataEmployee[0]->religion == "Budha")
                        <option>Budha</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Khonghuchu</option>
                        @elseif ($dataEmployee[0]->religion == "Khonghuchu")
                        <option>Khonghuchu</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        @endif
                    </select>
                    @error('inputReligion')
                        <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-3" data-aos="fade-down">
                    <label class="form-check-label" for="RadioGender">@lang('message.labelGender')</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="RadioGender" id="RadioGender1" value="@lang('message.placeGender1')" {{ $dataEmployee[0]->sex == "Pria" || $dataEmployee[0]->sex == "Man" ? 'checked' : '' }}>
                        <label class="form-check-label" for="RadioGender1">@lang('message.placeGender1')</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="RadioGender" id="RadioGender2" value="@lang('message.placeGender2')" {{ $dataEmployee[0]->sex == "Wanita" || $dataEmployee[0]->sex == "Woman" ? 'checked' : '' }}>
                        <label class="form-check-label" for="RadioGender2">@lang('message.placeGender2')</label>
                    </div>
                    @error('radioGender')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-3" data-aos="fade-down">
                    <label class="form-check-label" for="RadioMarital">@lang('message.labelMarital')</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="RadioMarital" id="RadioMarital1" value="@lang('message.placeMarital1')" {{ $dataEmployee[0]->marital == "Lajang" || $dataEmployee[0]->sex == "Single" ? 'checked' : '' }}>
                        <label class="form-check-label" for="RadioMarital1">@lang('message.placeMarital1')</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="RadioMarital" id="RadioMarital2" value="@lang('message.placeGender2')" {{ $dataEmployee[0]->sex == "Sudah Menikah" || $dataEmployee[0]->sex == "Married" ? 'checked' : '' }}>
                        <label class="form-check-label" for="RadioMarital2">@lang('message.placeMarital2')</label>
                    </div>
                    @error('radioMarital')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
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
                        <option>{{ $dataAddress[0]->h_negara }}<option>
                        @foreach ($MyCountry as $country)
                            <option>{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('inputCountry')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputProvince" class="form-label">@lang('message.labelHomeProvince')</label>
                    <select id="inputProvince" name="inputProvince" class="form-select" required>
                        <option>{{ $dataAddress[0]->h_prov }}</option>
                        @foreach ($MyState as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                    @error('inputProvince')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputCity" class="form-label">@lang('message.labelHomeCity')</label>
                    <select id="inputCity" name="inputCity" class="form-select" required>
                        <option>{{ $dataAddress[0]->h_kab }}</option>
                    </select>
                    @error('inputCity')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputKecamatan" class="form-label">@lang('message.labelHomeKecamatan')</label>
                    <select id="inputKecamatan" name="inputKecamatan" class="form-select" required>
                        <option>{{ $dataAddress[0]->h_kab }}</option>
                        
                    </select>
                    @error('inputKecamatan')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputDesa" class="form-label">@lang('message.labelHomeDesa')</label>
                    <select id="inputDesa" name="inputDesa" class="form-select" required>
                        <option>{{ $dataAddress[0]->h_kab }}</option>
                        
                    </select>
                    @error('inputDesa')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12" data-aos="fade-down">
                    <label for="inputAddress" class="form-label">@lang('message.labelHomeFull')</label>
                    <textarea class="form-control" id="inputAddress" name="inputAddress" placeholder="@lang('message.placeHomeFull')" value="{{ $dataAddress[0]->full_home }}" required>{{ $dataAddress[0]->full_home }}</textarea>
                    @error('inputAddress')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
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
                        <option>{{ $dataAddress[0]->c_negara }}</option>
                        @foreach ($MyCountry as $country)
                            <option>{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('inputCurrentCountry')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputCurrentProvince" class="form-label">@lang('message.labelCurrentProvince')</label>
                    <select id="inputCurrentProvince" name="inputCurrentProvince" class="form-select" required>
                        <option>{{ $dataAddress[0]->c_prov }}</option>
                        @foreach ($MyState as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('inputCurrentProvince')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4" data-aos="fade-down">
                    <label for="inputCurrentCity" class="form-label">@lang('message.labelCurrentCity')</label>
                    <select id="inputCurrentCity" name="inputCurrentCity" class="form-select" required>
                        <option>{{ $dataAddress[0]->c_kab }}</option>
                    </select>
                    @error('inputCurrentCity')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputCurrentKecamatan" class="form-label">@lang('message.labelCurrentCity')</label>
                    <select id="inputCurrentKecamatan" name="inputCurrentKecamatan" class="form-select" required>
                        <option>{{ $dataAddress[0]->c_kab }}</option>
                    </select>
                    @error('inputCurrentKecamatan')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <label for="inputCurrentDesa" class="form-label">@lang('message.labelCurrentCity')</label>
                    <select id="inputCurrentDesa" name="inputCurrentDesa" class="form-select" required>
                        <option>{{ $dataAddress[0]->c_kab }}</option>
                    </select>
                    @error('inputCurrentDesa')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12" data-aos="fade-down">
                    <label for="inputCurrentAddress" class="form-label">@lang('message.labelCurrentFull')</label>
                    <textarea class="form-control" id="inputCurrentAddress" name="inputCurrentAddress" placeholder="@lang('message.placeCurrentFull')" value="{{ $dataAddress[0]->full_current }}" required>{{ $dataAddress[0]->full_current }}</textarea>
                    @error('inputCurrentAddress')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <hr>
            </div>
        </div>
        <div id="secProcurement" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                <div class="sec2 row justify-content-start bg-white m-0 py-0 px-0" style="margin-left: 0.5px;">
                    <h6 class="col-12 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#procurement" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section2') 
                        <i class="bi bi-caret-right-fill" id="idProcurement" style="margin-left: 1.2cm;"></i>
                    </h6>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="procurement">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class=" btn btn-md btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#academicModalAdd">@lang('message.buttonAcademic')</button>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-center" scope="col">@lang('message.labelSchoolName')</th>
                                <th class="text-center" scope="col">@lang('message.labelSchoolGraduation')</th>
                                <th class="text-center" scope="col">@lang('message.aksi')</th>
                            </tr>
                        </thead>
                        <tbody id="tableAcademic">
                            @foreach ($dataAcademic as $academic)
                            <tr data-aos="fade-down">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $academic->School_Name }}</td>
                                <td>{{ $academic->Graduation }}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#academicModalDetail{{ $academic->id_academic }}">Detail</button>
                                    <button type="button" class="btn btn-sm btn-outline-success mb-2" data-bs-toggle="modal" data-bs-target="#academicModalEdit{{ $academic->id_academic }}">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#academicModalDelete{{ $academic->id_academic }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row" id="form-container-academic">
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secFabrication" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                <div class="sec3 row justify-content-start bg-white m-0 py-0 px-0" style="margin-left: 0.5px;">
                    <h6 class="col-12 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#fabrication" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section3') 
                        <i class="bi bi-caret-right-fill" id="idFabricatin" style="margin-left: 3.3cm;"></i>
                    </h6>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="fabrication">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-md btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#familyModalAdd">@lang('message.buttonFamily')</button>
                    </div>
                    <div class="row" id="form-container-family">
                        <table class="table table-hover table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">@lang('message.labelFamilyRelation')</th>
                                    <th class="text-center" scope="col">@lang('message.labelFamilyName')</th>
                                    <th class="text-center" scope="col">@lang('message.aksi')</th>
                                </tr>
                            </thead>
                            <tbody id="tableFamily">
                                @foreach ($dataFamily as $family)
                                <tr data-aos="fade-down">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $family->hubungan }}</td>
                                    <td>{{ $family->name }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#familyModalDetail{{ $family->id_family }}">Detail</button>
                                        <button type="button" class="btn btn-sm btn-outline-success mb-2" data-bs-toggle="modal" data-bs-target="#familyModalEdit{{ $family->id_family }}">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#familyModalDelete{{ $family->id_family }}">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secConstruction" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                <div class="sec4 row justify-content-start bg-white m-0 py-0 px-0" style="margin-left: 0.5px;">
                    <h6 class="col-12 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#construction" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section4') 
                        <i class="bi bi-caret-right-fill" id="idConstruction" style="margin-left: 1.6cm;"></i>
                    </h6>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="construction">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-md btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#certificateModalAdd">@lang('message.buttonCertificate')</button>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-center" scope="col">@lang('message.labelCertificateName')</th>
                                <th class="text-center" scope="col">@lang('message.labelCertificateDate')</th>
                                <th class="text-center" scope="col">@lang('message.aksi')</th>
                            </tr>
                        </thead>
                        <tbody id="tableCertificate">
                            @foreach ($dataCertificate as $certificate)
                            <tr data-aos="fade-down">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $certificate->name_certificate }}</td>
                                <td>{{ $certificate->acquisition }}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#certificateModalDetail{{ $certificate->id_certificate }}">Detail</button>
                                    <button type="button" class="btn btn-sm btn-outline-success mb-2" data-bs-toggle="modal" data-bs-target="#certificateModalEdit{{ $certificate->id_certificate }}">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#certificateModalDelete{{ $certificate->id_certificate }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row" id="form-container-certificate">
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secMaintenance" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                <div class="sec5 row justify-content-start bg-white m-0 py-0 px-0" style="margin-left: 0.5px;">
                    <h6 class="col-12 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section5') 
                        <i class="bi bi-caret-right-fill" id="idMaintenance" style="margin-left: 1.3cm;"></i>
                    </h6>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="maintenance">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-md btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#summaryModalAdd">@lang('message.buttonCareer')</button>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" scope="col">No</th>
                                <th class="text-center" scope="col">@lang('message.labelCareerName')</th>
                                <th class="text-center" scope="col">@lang('message.labelCareerPosition')</th>
                                <th class="text-center" scope="col text-center">@lang('message.aksi')</th>
                            </tr>
                        </thead>
                        <tbody id="tableCareer">
                            @foreach ($dataSummary as $summary)
                            <tr data-aos="fade-down">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $summary->company_name }}</td>
                                <td>{{ $summary->job_position }}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#summaryModalDetail{{ $summary->id_summary }}">Detail</button>
                                    <button type="button" class="btn btn-sm btn-outline-success mb-2" data-bs-toggle="modal" data-bs-target="#summaryModalEdit{{ $summary->id_summary }}">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#summaryModalDelete{{ $summary->id_summary }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row" id="form-container-career">
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secMaintenance1" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                <div class="sec6 row justify-content-start bg-white m-0 py-0 px-0" style="margin-left: 0.5px;">
                    <h6 class="col-12 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance1" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section6') 
                        <i class="bi bi-caret-right-fill" id="idMaintenance1" style="margin-left: 2.7cm;"></i>
                    </h6>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="maintenance1">
                    <div class="col-12" data-aos="fade-down">
                        <label for="inputMotivasi" class="form-label">@lang('message.labelMotivation1')</label>
                        <textarea class="form-control" id="inputMotivasi" name="inputMotivasi" placeholder="@lang('message.placeMotivation1')" value="{{ $dataMotivation[0]->motivation1 }}" required>{{ $dataMotivation[0]->motivation1 }}</textarea>
                        @error('inputMotivasi')
                            <div id="validationServerUsernameFeedback" class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12" data-aos="fade-down">
                        <label for="inputOthers" class="form-label">@lang('message.labelMotivation2')</label>
                        <textarea class="form-control" id="inputOthers" name="inputOthers" placeholder="@lang('message.placeMotivation2')" value="{{ $dataMotivation[0]->motivation2 }}" required>{{ $dataMotivation[0]->motivation2 }}</textarea>
                        @error('inputOthers')
                            <div id="validationServerUsernameFeedback" class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secMaintenance2" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                <div class="sec7 row justify-content-start bg-white m-0 py-0 px-0" style="margin-left: 0.5px;">
                    <h6 class="col-12 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance2" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.section7') 
                        <i class="bi bi-caret-right-fill" id="idMaintenance2" style="margin-left: 4.7cm;"></i>
                    </h6>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="maintenance2">
                    <div class="col-md-6" data-aos="fade-down">
                        <center>
                            <img src="data:image/png;base64,{{ $dataSkck[0]->photo }}" class="rounded" alt="preview" id="previewSKCK" width="140px" height="140px">
                        </center>
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <label for="mySKCK" class="form-label ms-3">@lang('message.labelSKCK')</label>
                        <input class="form-control" type="file" id="mySKCK" name="mySKCK" required>
                        @error('mySKCK')
                            <div id="validationServerUsernameFeedback" class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div id="secMaintenance3" class="about" style="--bs-bg-opacity: .9;">
            <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                <div class="sec8 row justify-content-start bg-white m-0 py-0 px-0" style="margin-left: 0.5px;">
                    <h6 class="col-12 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#maintenance3" aria-expanded="false" aria-controls="collapseExample">
                        @lang('message.buttonRecruitment') 
                        <i class="bi bi-caret-right-fill" style="margin-left: 5.1cm;" id="idMaintenance3"></i>
                    </h6>
                    <hr class="p-0">
                </div>
                <div class="collapse row g-3 mx-1" id="maintenance3">
                    <div class="col-12 mt-4 mb-5" data-aos="fade-down">
                        <center>
                            <button type="submit" class="btn mb-1 btn-outline-primary col-11 rounded">@lang('message.buttonRecruitment')</button>
                            <button type="submit" class="btn btn-success col-11 rounded">@lang('message.buttonEditSave')</button>
                        </center>
                    </div>
                </div>
            </div>
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

        $('#maintenance3').on('show.bs.collapse', function() {
            hideOtherDropdowns('#maintenance3', '#idmaintenance3');
        }).on('hide.bs.collapse', function() {
            resetIcon('#idmaintenance3');
        });

        function hideOtherDropdowns(target, icon) {
            $('.collapse').not(target).collapse('hide');
            $('.bi-caret-down-fill').not(icon).removeClass('bi-caret-down-fill').addClass('bi-care-right-fill');
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
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="inputNamaSekolah" class="form-label">@lang('message.labelSchoolName')</label>
                        <input type="text" class="form-control" id="inputNamaSekolah" name="inputNamaSekolah[]" placeholder="@lang('message.placeSchoolName')" required>
                        @error('inputNamaSekolah')
                            <div id="validationServerUsernameFeedback" class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputTahunLulus" class="form-label">@lang('message.labelSchoolGraduation')</label>
                        <input type="month" class="form-control" id="inputTahunLulus" name="inputTahunLulus[]" placeholder="@lang('message.placeSchoolGraduation')" required>
                        @error('inputTahunLulus')
                            <div id="validationServerUsernameFeedback" class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputJurusan" class="form-label">@lang('message.labelSchoolMajor')</label>
                        <input type="text" class="form-control" id="inputJurusan" name="inputJurusan[]" placeholder="@lang('message.placeSchoolMajor')" required>
                        @error('inputJurusan')
                            <div id="validationServerUsernameFeedback" class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputAlamatSekolah" class="form-label">@lang('message.labelSchoolLocation')</label>
                        <input type="text" class="form-control" id="inputAlamatSekolah" name="inputAlamatSekolah[]" placeholder="@lang('message.labelSchoolLocation')" required>
                        @error('inputAlamatSekolah')
                            <div id="validationServerUsernameFeedback" class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-danger">Remove</button>
                    </div>
                </div>
                <hr>
            `;
            $('#form-container-academic').append(formAcademic);
                counterAcademic++;
            });
        $(document).on('click', '.remove-form', function() {
            $(this).closest('.form-row').remove();
        });
    });

    $(document).ready(function() {
        var counterFamily = 1;
        var counterFamilyRadio = 1;
        $('#tambah-form-keluarga').click(function() {
            var formFamily = `
                <div class="col-md-4">
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
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputNamaKeluarga" class="form-label">@lang('message.labelFamilyName')</label>
                    <input type="text" class="form-control" id="inputNamaKeluarga" name="inputNamaKeluarga[]" placeholder="@lang('message.placeFamilyName')" required>
                    @error('inputNamaKeluarga')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-4">
                    <label for="inputBirthDayKeluarga" class="form-label">@lang('message.labelFamilyBirthday')</label>
                    <input type="date" class="form-control" id="inputBirthDayKeluarga" name="inputBirthDayKeluarga[]" placeholder="@lang('message.placeFamilyBirthday')" required>
                    @error('inputBirthDayKeluarga')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="col-md-6">
                    <label for="inputNoHPKeluarga" class="form-label">@lang('message.labelFamilyNoHP')</label>
                    <input type="text" class="form-control" id="inputNoHPKeluarga" name="inputNoHPKeluarga[]" placeholder="@lang('message.placeFamilyNoHP')" required>
                    @error('inputNoHPKeluarga')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-4">
                    <label for="inputStatusKeluarga" class="form-label">@lang('message.labelFamilyCohabit')</label>
                    <select id="inputStatusKeluarga" name="inputCohabit[]" class="form-select" required>
                        <option>@lang('message.placeFamilyCohabit1')</option>
                        <option>@lang('message.placeFamilyCohabit2')</option>
                    </select>
                    @error('inputStatusKeluarga')
                        <div id="validationServerUsernameFeedback" class="text-danger">
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
                <div class="col-md-4">
                    <label for="inputNamaSertifikat" class="form-label">@lang('message.labelCertificateName')</label>
                    <input type="text" class="form-control" id="inputNamaSertifikat" name="inputNamaSertifikat[]" placeholder="@lang('message.placeCertificateName')" required>
                    @error('inputNamaSertifikat')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputTanggalSertifikat" class="form-label">@lang('message.labelCertificateDate')</label>
                    <input type="date" class="form-control" id="inputTanggalSertifikat" name="inputTanggalSertifikat[]" placeholder="@lang('message.placeCertificateDate')" required>
                    @error('inputTanggalSertifikat')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="inputNamaPenyelenggara" class="form-label">@lang('message.labelCertificateAuthor')</label>
                    <input type="text" class="form-control" id="inputNamaPenyelenggara" name="inputNamaPenyelenggara[]" placeholder="@lang('message.placeCertificateAuthor')" required>
                    @error('inputNamaPenyelenggara')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNoSertifikat" class="form-label">@lang('message.labelCertificateNo')</label>
                    <input type="text" class="form-control" id="inputNoSertifikat" name="inputNoSertifikat[]" placeholder="@lang('message.placeCertificateNo')" required>
                    @error('inputNoSertifikat')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputLokasiSertifikat" class="form-label">@lang('message.labelCertificateLocation')</label>
                    <input type="text" class="form-control" id="inputLokasiSertifikat" name="inputLokasiSertifikat[]" placeholder="@lang('message.labelCertificateLocation')" required>
                    @error('inputLokasiSertifikat')
                        <div id="validationServerUsernameFeedback" class="text-danger">
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
                <div class="col-md-6">
                    <label for="inputNamaPerusahaan" class="form-label">@lang('message.labelCareerName')</label>
                    <input type="text" class="form-control" id="inputNamaPerusahaan" name="inputNamaPerusahaan[]" placeholder="@lang('message.placeCareerName')" required>
                    @error('inputNamaPerusahaan')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputPosisiPekerjaan" class="form-label">@lang('message.labelCareerPosition')</label>
                    <input type="text" class="form-control" id="inputPosisiPekerjaan" name="inputPosisiPekerjaan[]" placeholder="@lang('message.placeCareerPosition')" required>
                    @error('inputPosisiPekerjaan')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputPeriodeDari" class="form-label">@lang('message.labelCareerPeriodeFrom')</label>
                    <input type="month" class="form-control" id="inputPeriodeDari" name="inputPeriodeDari[]" required>
                    @error('inputPeriodeDari')
                        <div id="validationServerUsernameFeedback" class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputPeriodeSampai" class="form-label">@lang('message.labelCareerPeriodeTo')</label>
                    <input type="month" class="form-control" id="inputPeriodeSampai" name="inputPeriodeSampai[]" required>
                    @error('inputPeriodeSampai')
                        <div id="validationServerUsernameFeedback" class="text-danger">
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

    $(function() {
        $('#inputBirthDay').datepicker({
            dateFormat: 'dd-mmm-yyyy',
            showOtherMonths: true,
            selectOtherMonths: true
        });
    });

    $(function(){
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });

        $(function(){
            $('#inputProvince').on('change', function(){
                let id_province = $('#inputProvince').val();
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getUpdateCity') }}",
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
                let id_city = $('#inputCity').val();
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getUpdateSubdistrict') }}",
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
                let id_district = $('#inputKecamatan').val();
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getUpdateVillage') }}",
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
                let id_province = $('#inputCurrentProvince').val();
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getUpdateCurrentCity') }}",
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
                let id_city = $('#inputCurrentCity').val();
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getUpdateCurrentSubdistrict') }}",
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
                let id_district = $('#inputCurrentKecamatan').val();
                $.ajax({
                    type : 'POST',
                    url : "{{ route('getUpdateCurrentVillage') }}",
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

    var npwpInput = document.getElementById("inputNPWP");
    npwpInput.addEventListener("input", function(){
        var npwpValue = npwpInput.value;
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

    function showPreview() {
        var image = document.getElementById('preview');
        var imageUrl = image.getAttribute('src');
    
        // Membuat elemen <img> baru untuk pratinjau
        var previewImage = document.createElement('img');
        previewImage.src = imageUrl;
    
        // Membuat elemen <div> sebagai kontainer pratinjau
        var previewContainer = document.createElement('div');
        previewContainer.classList.add('preview-container');
        previewContainer.appendChild(previewImage);
    
        // Menampilkan pratinjau menggunakan overlay atau lightbox
        // Anda dapat menggunakan library seperti Bootstrap Modal atau Lightbox
        // atau mengimplementasikan gaya kustom sesuai kebutuhan Anda.
        // Di sini, saya akan menambahkan pratinjau ke akhir body.
        document.body.appendChild(previewContainer);
    
        // Mengatur fungsi saat pratinjau diklik untuk menutup pratinjau
        previewContainer.onclick = function() {
            document.body.removeChild(previewContainer);
        };
    }

    function showPreview(image) {
    var imageUrl = 'data:image/png;base64,' + image;
    
    // Membuat elemen <img> baru untuk pratinjau
    var previewImage = document.createElement('img');
    previewImage.src = imageUrl;
    
    // Membuat elemen <div> sebagai kontainer pratinjau
    var previewContainer = document.createElement('div');
    previewContainer.classList.add('preview-container');
    previewContainer.appendChild(previewImage);
    
    // Menampilkan pratinjau menggunakan overlay atau lightbox
    // Anda dapat menggunakan library seperti Bootstrap Modal atau Lightbox
    // atau mengimplementasikan gaya kustom sesuai kebutuhan Anda.
    // Di sini, saya akan menambahkan pratinjau ke akhir body.
    document.body.appendChild(previewContainer);
    
    // Mengatur fungsi saat pratinjau diklik untuk menutup pratinjau
    previewContainer.onclick = function() {
        document.body.removeChild(previewContainer);
        };
    }
</script>
@endsection