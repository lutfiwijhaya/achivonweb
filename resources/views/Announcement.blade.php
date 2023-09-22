@extends('Layout.MainLayout')
@section('title', 'PT Achivon Prestasi Abadi')
@section('mycontent')
    <br>
    <section id="Resorce" class="about" style="--bs-bg-opacity: .8;">
        <div class="container" data-aos="fade-up">
            <div class="row g-3">
                <div class="col-12">
                    <h3 class="text-primary">@lang('message.jobVacancies')</h3>
                    <hr>
                </div>
                <form action="" method="post">
                    <div class="row g-3">
                        <div class="col-md-3" data-aos="fade-down">
                            <label for="inputLocation"
                                class="form-label @error('inputLocation') is-invalid @enderror">@lang('message.jobVacancies3')</label>
                            <select id="inputLocation" name="inputLocation" class="form-select"
                                value="{{ old('inputLocation') }}" required>
                                <option>@lang('message.jobVacancies3.1')</option>

                            </select>
                            @error('inputLocation')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <label for="inputJobTitle" class="form-label">@lang('message.jobVacancies1')</label>
                            <input type="text" class="form-control" id="inputJobTitle" name="inputJobTitle"
                                placeholder="@lang('message.jobVacancies1')" value="{{ old('inputJobTitle') }}" required>
                            @error('inputJobTitle')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-3" data-aos="fade-down">
                            <label for="inputSort"
                                class="form-label @error('inputSort') is-invalid @enderror">@lang('message.jobVacancies5')</label>
                            <select id="inputSort" name="inputSort" class="form-select" value="{{ old('inputSort') }}"
                                required>
                                <option>@lang('message.jobVacancies5.1')</option>
                            </select>
                            @error('inputSort')
                                <div class="text-danger ms-3"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-12 row justify-content-center mt-2" data-aos="fade-down">
                            <button type="submit"
                                class="btn btn-outline-primary col-2 rounded ms-4">@lang('message.jobVacancies7')</button>
                            {{-- <div class="col-1"></div> --}}
                            <button type="submit"
                                class="btn btn-outline-info col-2 rounded ms-4">@lang('message.jobVacancies8')</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="col-12 card">
                    <table class="table table-hover">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">No</th>
                                <th scope="col">@lang('message.jobVacancies1')</th>
                                <th scope="col">@lang('message.jobVacancies3')</th>
                                <th scope="col">@lang('message.jobVacancies4')</th>
                                <th scope="col">@lang('message.jobVacancies6')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobVacancy as $job)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $job->name_job }}</td>
                                    <td>{{ $job->job_location }}</td>
                                    <td>{{ $job->experience }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-primary mb-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#jobModalDetail{{ $job->id_job }}">@lang('message.jobVacancies6')</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @foreach ($jobVacancy as $job)
        <div class="modal fade" id="jobModalDetail{{ $job->id_job }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $job->name_job }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row g-3">
                        <div class="col-md-4">
                            <h6>@lang('message.jobVacancies1')</h6>
                        </div>
                        <div class="col-md-8">
                            <h6>: {{ $job->name_job }}</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>@lang('message.jobVacancies3')</h6>
                        </div>
                        <div class="col-md-8">
                            <h6>: {{ $job->job_location }}</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>@lang('message.jobVacancies4')</h6>
                        </div>
                        <div class="col-md-8">
                            <h6>: {{ $job->experience }}</h6>
                        </div>
                        <div class="col-md-4">
                            <h6>@lang('message.jobVacancies9')</h6>
                        </div>
                        <div class="col-md-8">
                            <h6>:</h6>
                        </div>
                        <div class="col-md-12">
                            <h6>@lang('message.jobVacancies10')</h6>
                        </div>
                        <div class="col-md-12">
                            <p style="white-space: pre-line;">
                                @foreach ($myDiscipline as $discipline)
                                    @if ($discipline->id_job == $job->id_job)
                                        @php
                                            $desc = trim($discipline->job_description);
                                        @endphp
                                        {{ trim($desc) }}
                                    @endif
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.closeButton')</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
