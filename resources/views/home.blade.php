@extends('adminlte::page')
<style>
    body{
        background: #fff !important;
    }
    .banner-informativo{
         background: #E0DCDC;
         margin: 15px 0px;

    }
  /*  .container{width:920px !important;}*/
    .centrada{
        justify-content: space-between;
    }
</style>
@section('content')
<div class="container mt-5 pt-1 pl-5 pr-5" id="app">
    <div class="row  centrada ">
    
        <div class="">
            <img src="{{asset('img/Creatividad.png')}}" alt="" >
        </div>
        <div class="">
        <img src="{{asset('img/Medioambiental.png')}}" alt="">
        </div>
        <div class="">
        <img src="{{asset('img/Bienestar.png')}}" alt="">
        </div>
        <div class="">
        <img src="{{asset('img/socioemocional.png')}}" alt="">
        </div>



    </div>
    <div class="row   " >
            <div class="col-md-12 justify-content-center align-items-center banner-informativo" style="width:920px; height:253px">
                Banner informativo
            </div>
        </div>
        <div class="row   " >
            <div class="col-md-12 justify-content-center align-items-center banner-informativo" style="width:920px; height:253px">
                Banner informativo 2
            </div>
        </div>
        <drag></drag>

    </div>
@endsection

@section('js')
        <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script> console.log('Hi!'); </script>
@stop