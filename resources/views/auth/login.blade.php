@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 offset-md-1">
            <div class="card card-login">


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 div-logo offset-md-2">
                                <img id="logo-self" src="{{ asset('img/logo-self.png') }}" alt="">
                            </div>

                        </div>
                        <div class="form-group row" style="justify-content: center;">
                            <div class="btn-group btn-group-toggle ">

                                <label class="btn btn-alumno active btn-alumno-default">
                                    <input type="radio" name="user_type" value="alumno" autocomplete="off" onclick="{changeClass()}"> Alumno
                                </label>
                                <label class="btn btn-profesor btn-profesor-default">
                                    <input type="radio" name="user_type" value="profesor" autocomplete="off" onclick="{changeClass()}"> Profesor
                                </label>
                            </div>
                        </div>

                        <div class="form-group row row-login">
                            <div class="col-md-2">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="svg-user" d="M20.5 0.916626C9.69002 0.916626 0.916687 9.68996 0.916687 20.5C0.916687 31.31 9.69002 40.0833 20.5 40.0833C31.31 40.0833 40.0834 31.31 40.0834 20.5C40.0834 9.68996 31.31 0.916626 20.5 0.916626ZM20.5 6.79163C23.7509 6.79163 26.375 9.41579 26.375 12.6666C26.375 15.9175 23.7509 18.5416 20.5 18.5416C17.2492 18.5416 14.625 15.9175 14.625 12.6666C14.625 9.41579 17.2492 6.79163 20.5 6.79163ZM20.5 34.6C15.6042 34.6 11.2763 32.0933 8.75002 28.2941C8.80877 24.397 16.5834 22.2625 20.5 22.2625C24.3971 22.2625 32.1913 24.397 32.25 28.2941C29.7238 32.0933 25.3959 34.6 20.5 34.6Z" fill="#C4C4C4" />
                                </svg>
                            </div>

                            <div class="col-md-10">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Usuario" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row row-login">
                            <div class="col-md-2">

                                <svg width="31" height="39" viewBox="0 0 31 39" xmlns="http://www.w3.org/2000/svg">
                                    <path id="svg-security" d="M27.125 13H25.1875V9.28571C25.1875 4.16 20.8475 0 15.5 0C10.1525 0 5.8125 4.16 5.8125 9.28571V13H3.875C1.74375 13 0 14.6714 0 16.7143V35.2857C0 37.3286 1.74375 39 3.875 39H27.125C29.2563 39 31 37.3286 31 35.2857V16.7143C31 14.6714 29.2563 13 27.125 13ZM15.5 29.7143C13.3687 29.7143 11.625 28.0429 11.625 26C11.625 23.9571 13.3687 22.2857 15.5 22.2857C17.6313 22.2857 19.375 23.9571 19.375 26C19.375 28.0429 17.6313 29.7143 15.5 29.7143ZM9.6875 13V9.28571C9.6875 6.20286 12.2838 3.71429 15.5 3.71429C18.7162 3.71429 21.3125 6.20286 21.3125 9.28571V13H9.6875Z" fill="#c4c4c4" />
                                </svg>
                            </div>
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-3  " style="text-align: right;">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                        <!--
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
-->
                        <div class="form-group row mb-0">
                            <div class="col-md-12" style="text-align:center">
                                <button type="submit" class="btn btn-primary sign-up sign-up-default">
                                    {{ __('Entrar') }}
                                </button>


                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12" style="text-align:center">
                                @if (Route::has('register'))
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Registrarse') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
        
    </div>
   
    @endsection
    @section('javascript')
<script>
    function changeClass(event) {
        var alumno = document.getElementsByClassName('btn-alumno')
        var profesor = document.getElementsByClassName('btn-profesor')
        var entrar = document.getElementsByClassName('sign-up')
        if (document.getElementsByName('user_type')[0].checked) {
            alumno[0].classList.remove("btn-alumno-default", "btn-alumno-unselect")
            alumno[0].classList.add('btn-alumno-select')
            profesor[0].classList.remove('btn-profesor-default', "btn-profesor-select")
            profesor[0].classList.add('btn-profesor-unselect')
            entrar[0].classList.remove('sign-up-default', 'sign-up-profesor')
            entrar[0].classList.add('sign-up-alumno')
            document.getElementById('svg-security').setAttribute("fill", "#3FA9F5")
            document.getElementById('svg-user').setAttribute("fill", "#3FA9F5")
        }
        if (document.getElementsByName('user_type')[1].checked) {
            alumno[0].classList.remove("btn-alumno-default", "btn-alumno-select")
            alumno[0].classList.add('btn-alumno-unselect')
            profesor[0].classList.remove('btn-profesor-unselect', 'btn-profesor-default')
            profesor[0].classList.add('btn-profesor-select')
            entrar[0].classList.remove('sign-up-default', 'sign-up-alumno')
            entrar[0].classList.add('sign-up-profesor')
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
