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
    .program{
        width:80%;
        margin:15px;
        border-radius:20px;
        position: relative;
        display: inline-block;
        text-align: center;

    }
    .program img{
        opacity: 0.6;  
        width: 100%;
        border-radius: 20px;
    }

.centrado{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-weight: bold;
    font-family: 'Roboto';
font-style: 'Black Italic';
font-size: 25px;
color:#fff;

}
.centrada h3, .centrada p{
    color: #525252;

}
</style>
@section('content')
<div class="container mt-5 pt-1 pl-5 pr-5" id="app">
<div class="row  centrada ">
    <h3>Programas Educacionales</h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, </p>
<div>
    <div class="row  centrada ">
        <a href="{{ route('program_detail') }}">
        <div class="program" style="background:#FFD040" > 
        <div class="centrado">Programa Creatividad & Artes</div>
            <img src="{{asset('img/creatividad_wide.png')}}" alt="" >
        </div>
        </a>
</div>
<div class="row  centrada ">
        <div class="program" style="background:#84A82E">
        <div class="centrado">Programa Medioambiental</div>
        <img src="{{asset('img/medioambiental_wide.png')}}" alt="">
        </div>
        </div>
<div class="row  centrada ">
        <div class="program"  style="background:#CC0033">
        <div class="centrado">Programa Bienestar & Salud</div>
        <img src="{{asset('img/bienestar_wide.png')}}" alt="">
        </div>
        </div>
<div class="row  centrada ">
        <div class="program"  style="background:#3399FF">
        <div class="centrado">Programa Socioemocional</div>
        <img src="{{asset('img/socioemocional_wide.png')}}" alt="">
        </div>



    </div>
   
@endsection

@section('js')
        <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script> console.log('Hi!'); </script>
@stop