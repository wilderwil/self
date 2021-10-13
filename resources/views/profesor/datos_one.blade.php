@extends('layouts.app')
@section('content')
<div class="contenedor" id="app">
    <div class=" div-registro foto">
        <img id="img-back" src="{{asset('img/profesor.jpg')}}" />
    </div>
    <div class=" div-registro datos">

        <form method="POST" action="profesor_save" id="form-register" style="margin-top:-50px;">
            @csrf
            <div class="form-group row" style="padding-left:50px;margin-top:80px">
                <h3>{{ __('Ingreso Datos Profesor') }}</h3>
            </div>



            <div class="form-group row">


                <div class="col-md-8 div-field offset-md-1">
                    <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $alumno[0]->name ?? old('name') }}" autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">


                <div class="col-md-4 div-field offset-md-1">
                    <label for="date" class="col-form-label text-md-right">{{ __('Fecha') }}</label>
                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{$alumno[0]->date ?? old('date') }}" autocomplete="date" autofocus>

                    @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-4 div-field ">

                    <label for="course_id" class="col-form-label text-md-right">{{ __('Jefatura') }}</label>
                    <courses></courses>
                    @error('course_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-8 div-field offset-md-1">
                    <label for="rut" class=" col-form-label text-md-right">{{ __('Rut') }}</label>

                    <input id="rut" type="text" class="form-control @error('rut') is-invalid @enderror" name="rut" value="{{$profesor[0]->rut ?? old('rut') }}" autocomplete="rut">

                    @error('rut')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-8 div-field offset-md-1">
                    <label for="direction" class="col-form-label text-md-right">{{ __('Dirección') }}</label>

                    <input id="direction" type="text" class="form-control @error('direction') is-invalid @enderror" name="direction" value="{{$profesor[0]->direction ?? old('direction') }}" autocomplete="direction">

                    @error('direction')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-8 div-field offset-md-1">
                    <label for="comuna" class="col-form-label text-md-right">{{ __('Comuna') }}</label>
               <input id="comuna" type="text" class="form-control" name="comuna" value="{{$profesor[0]->comuna ?? old('comuna') }}" autocomplete="amigos">
                    @error('comuna')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-8 div-field offset-md-1">
                    <label for="phone" class="col-form-label text-md-right">{{ __('Phone') }}</label>
                   <input id="phone" type="text" class="form-control" name="phone" value="{{$profesor[0]->phone ?? old('phone') }}" autocomplete="amigos">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row " style="margin-top: 20px;">
                <div class="col-md-8 offset-md-6">
                    <button type="submit" class="btn btn-primary register-data">
                        {{ __('Siguiente') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop

@section ('css')
<style>
    .body {
        background-image: none !important;
    }

    .contenedor {
        margin: 0px;
        padding: 0px;
        display: flex;
        grid-gap: 2px;
        height: 100vh;
    }

    .div-registro.foto {
        margin: 0px;
        padding: 0px;
        /*   background-image: url('../img/datosAlumno.png');*/
        width: 60%;
        float: left;

    }

    .div-registro.datos {
        background-image: url('../img/KJLKL.png');
        float: left;
        width: 40%;
    }

    #img-back {
        width: 100%;
    }

    .form-group label,
    .form-group input {
        margin: 0px;
        padding: 0px;
    }
</style>
@stop
@section('javascript')
<!-- <script src="../js/domReady.js" defer></script> -->
<script>
    /* domReady(function(event) {
    document.getElementById('course_select').selectedOptions[0].value});*/

    // document.getElementById('course_select').selectedOptions[0].value
</script>

@stop