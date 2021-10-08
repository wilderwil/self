@extends('adminlte::page')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Asignaturas</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Create Asignatura') }}
                    <a href="{{ route('asignaturas.index') }}" class="float-right">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('asignaturas.update', $asignatura->id) }}">
                        @csrf
                        @method('PUT')
                        

                        <div class="form-group row">
                            <label for="code"
                                class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text"
                                    class="form-control @error('code') is-invalid @enderror" name="code"
                                    value="{{ old('code', $asignatura->code) }}" required>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asignatura"
                                class="col-md-4 col-form-label text-md-right">{{ __('Asignatura') }}</label>

                            <div class="col-md-6">
                                <input id="asignatura" type="text"
                                    class="form-control @error('asignatura') is-invalid @enderror" name="asignatura"
                                    value="{{ old('asignatura', $asignatura->asignatura) }}" required>

                                @error('asignatura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="course_id"
                                class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <select name="course_id" class="form-control" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}"
                                            {{ $course->id == $asignatura->course_id ? 'selected' : '' }}>
                                            {{ $course->course }}</option>
                                    @endforeach
                                </select>
                                @error('course_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="m-2 p-2">
                <form method="POST" action="{{ route('asignaturas.destroy', $asignatura->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete {{ $asignatura->asignatura }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection