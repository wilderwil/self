@extends('layouts.app')
@section('content')
<div class="contenedor" id="app">
<div class=" div-registro foto" >
<img id ="img-back" src="{{asset('img/datosAlumno.png')}}"/>    
</div>
<div class =" div-registro datos" >
    
<form method="POST" action="{{ route('register') }}" id="form-register" style="margin-top:-50px;">
                        @csrf
                        <div class="form-group row" style="padding-left:50px;margin-top:80px">
                        <h3 >{{ __('Ingreso Datos Alumno') }}</h3>
</div>



                        <div class="form-group row" >
                           

                            <div class="col-md-8 div-field offset-md-1">
                            <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row" >
                           

                           <div class="col-md-4 div-field offset-md-1">
                           <label for="date" class="col-form-label text-md-right">{{ __('Fecha') }}</label>
                               <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                               @error('date')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                           <div class="col-md-4 div-field ">
                             
                           <label for="course" class="col-form-label text-md-right">{{ __('Curso') }}</label>
                               <input id="course" type="text" class="form-control @error('course') is-invalid @enderror" name="course" value="{{ old('course') }}" required autocomplete="course" autofocus>
                               <courses></courses>
                               @error('course')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                       </div>
                       <div class="form-group row">
                       <div class="col-md-8 div-field offset-md-1">
                       <label class="col-form-label text-md-right ">{{ __('Actividades Extra Curriculares') }}</label>
                            
                           <activities></activities>
</div>
</div>
                        <div class="form-group row">
                          
                            <div class="col-md-8 div-field offset-md-1">
                            <label for="asignatura" class=" col-form-label text-md-right">{{ __('¿Cual es tu asignatura favorita?') }}</label>

                                <input id="asignatura" type="text" class="form-control @error('asignatura') is-invalid @enderror" name="asignatura" value="{{ old('asignatura') }}" required autocomplete="asignatura">

                                @error('asignatura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           
                            <div class="col-md-8 div-field offset-md-1">
                            <label for="profesor" class="col-form-label text-md-right">{{ __('¿Cual es tu profesor de confianza?') }}</label>

                                <input id="profesor" type="profesor" class="form-control @error('profesor') is-invalid @enderror" name="profesor" required autocomplete="profesor">

                                @error('profesor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                         
                            <div class="col-md-8 div-field offset-md-1">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirme ') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                       <div class="col-md-8 div-field offset-md-1">
                       <label class="col-form-label text-md-right ">{{ __('Datos de Interés') }}</label>
                            
                           <preferences></preferences>
</div>
</div>

                        <div class="form-group row " style="margin-top: 70px;">
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

        .body{
            background-image:none !important;
        }
        .contenedor{
            margin:0px;
            padding:0px;
            display: grid;
            grid-template-columns: 5fr 1fr;
            grid-gap: 2px;
            height: 100vh;
        }

        .div-registro.foto{
            margin:0px;
            padding:0px;
         /*   background-image: url('../img/datosAlumno.png');*/
        
        }
        .div-registro.datos{
            background-image: url('../img/KJLKL.png');
        }
#img-back{
    width:100%;
}
.form-group label, .form-group input{
    margin:0px;
    padding: 0px;
}
    </style>
@stop
@section('javascript')
<script src="{{ mix('js/app.js') }}" defer></script>
@stop