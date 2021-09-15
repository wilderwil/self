@extends('layouts.app')
<style>
    body{
        background-image:none important;
        background-image: url('../img/KJLKL.png');
    }
</style>
@section('content')
<div class="row">
    <div class="col-md-8" id="div-register">
        <img src="{{asset('img/div-register.png')}}" alt="" style="width:100%">
    </div>
    
    <div class="col-md-4" style="background:rgba(255, 255, 255, 0.7); height:805px">
  
    <form method="POST" action="{{ route('register') }}" id="form-register">
                        @csrf
                        <div class="form-group row" style="padding-left:50px;margin-top:80px">
                        <h3 >{{ __('Crear nueva cuenta') }}</h3>
</div>

                        <div class="form-group row" >
                        <div class="col-md-8 offset-md-1">
                            <div class="btn-group btn-group-toggle ">

                                <label class="btn btn-alumno active btn-alumno-default " style="width:150px">
                                    <input type="radio" name="role_id" value="3" autocomplete="off" onclick="{changeClass()}"> Alumno
                                </label>
                                <label class="btn btn-profesor btn-profesor-default" style="width:150px">
                                    <input type="radio" name="role_id" value="2" autocomplete="off" onclick="{changeClass()}"> Profesor
                                </label>
                            </div>
                            
                        </div></div>

                        <div class="form-group row" style="margin-top: 70px;">
                           

                            <div class="col-md-8 div-field offset-md-1">
                            <label for="name" class="col-form-label text-md-right">{{ __('Usuario') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          
                            <div class="col-md-8 div-field offset-md-1">
                            <label for="email" class=" col-form-label text-md-right">{{ __('Email') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           
                            <div class="col-md-8 div-field offset-md-1">
                            <label for="password" class="col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
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

                        <div class="form-group row " style="margin-top: 70px;">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary register register-default">
                                    {{ __('Crear mi cuenta') }}
                                </button>
                            </div>
                        </div>
                    </form>

</div>
@section('javascript')
<script>
    function changeClass(event) {
        var alumno = document.getElementsByClassName('btn-alumno')
        var profesor = document.getElementsByClassName('btn-profesor')
        var entrar = document.getElementsByClassName('register')
        if (document.getElementsByName('role_id')[0].checked) {
            alumno[0].classList.remove("btn-alumno-default", "btn-alumno-unselect")
            alumno[0].classList.add('btn-alumno-select')
            profesor[0].classList.remove('btn-profesor-default', "btn-profesor-select")
            profesor[0].classList.add('btn-profesor-unselect')
            entrar[0].classList.remove('register-default', 'register-profesor')
            entrar[0].classList.add('register-alumno')
            document.getElementById('svg-security').setAttribute("fill", "#3FA9F5")
            document.getElementById('svg-user').setAttribute("fill", "#3FA9F5")
        }
        if (document.getElementsByName('role_id')[1].checked) {
            alumno[0].classList.remove("btn-alumno-default", "btn-alumno-select")
            alumno[0].classList.add('btn-alumno-unselect')
            profesor[0].classList.remove('btn-profesor-unselect', 'btn-profesor-default')
            profesor[0].classList.add('btn-profesor-select')
            entrar[0].classList.remove('register-default', 'register-alumno')
            entrar[0].classList.add('register-profesor')
            document.getElementById('svg-security').setAttribute("fill", "#7AC943")
            document.getElementById('svg-user').setAttribute("fill", "#7AC943")
        }
    }
    /*
        document.getElementsByName('user_type').addEventListener('click',validar,false);
        document.getElementsByName('user_type').addEventListener('click',function (event) {
            console.log(event.target.value)
        if (event.target && event.target.matches("input[type='radio']")) {
            console.log(event.target.value)
        }})*/
</script>
@stop
@endsection
