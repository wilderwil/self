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
.color-1{
    background:#FFD040;
}
.color-2{
    background: #84A82E;
}
.color-3{
    background: #CC0033;
}
.color-4{
    background: #3399FF;
}
</style>
@section('content')
<div class="container mt-5 pt-1 pl-5 pr-5" id="app">
<div class="row  centrada ">
    <h3>Programas Educacionales</h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, </p>
<div>
   <?php  foreach($programs as $program){ ?>
    <div class="row  centrada ">
        <a href="{{ route('profesor.program_detail',[$program->id]) }}">
        <div class="program color-{{$program->id}}"  > 
        <div class="centrado">Programa {{$program->name}}</div>
        <img src="{{asset('img/program-'.$program->id.'.png')}}" alt="" >
        </div>
        </a>
        </div>
   <?php  } ?>

   
@endsection

@section('js')
        <!-- Scripts
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script> console.log('Hi!'); </script> -->
@stop