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
    label[for="btn8"],
    label[for="btn7"],
    label[for="btn6"],
    label[for="btn5"],
    label[for="btn4"],
    label[for="btn3"],
    label[for="btn2"],
    label[for="btn1"]{
        grid-column: 2;
        grid-row: 2;
        position: relative;
    }

    .face-8,
    .face-7,
    .face-6,
    .face-5,
    .face-4,
    .face-3,
    .face-2,   
    .face-1{
        width: 100%;
        height: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .face-8 .face-draw,
    .face-7 .face-draw,
    .face-6 .face-draw,
    .face-5 .face-draw,
    .face-4 .face-draw,
    .face-3 .face-draw,
    .face-2 .face-draw,
    .face-1 .face-draw{
        width: 40%;
        height: 70%;
    }
    .label-8,
    .label-7,
    .label-6,
    .label-5,
    .label-4,
    .label-3,
    .label-2,
    .label-1{
        width: 100%;
        height: 20%;
        font-size: 20px;
        text-align: center;
    }
    .face-draw img{
        width: 30px;
    }
    
.likert-draw{
  width: 100%;
  height: 40px;
  grid-column: 2/7;
  grid-row: 2;
  display:grid;
  place-items: center;
}

.likert-draw .static-bar{
  width: 100%;
  height: 1.7rem;
  border: 0.05rem solid blue;
  border-radius: 50px;
}

.likert-bar{
  width: 50%;
  height: 100%;
  border-radius: 50px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  background-color: green;
}

.likert-btn{
  border:0.1px solid blue;
  background-color: green;
  width: 49.48px;
  height: 46px;
  border-radius:100px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.likert-btn-decorate{
  border: 0.1px solid blue;
  background-color:  white;
  width: 23.67px;
  height: 22px;
  border-radius: 100px;
}
#btn7:checked ~ div .likert-bar,
#btn6:checked ~ div .likert-bar,
#btn8:checked ~ div .likert-bar,
#btn5:checked ~ div .likert-bar,
#btn4:checked ~ div .likert-bar,
#btn3:checked ~ div .likert-bar,
#btn2:checked ~ div .likert-bar,
#btn1:checked ~ div .likert-bar{
    width: 30%;
    transition-duration: 1s;
}
#btn8:checked ~ label .face-8 .face-draw img,
#btn7:checked ~ label .face-7 .face-draw img,
#btn6:checked ~ label .face-6 .face-draw img,
#btn5:checked ~ label .face-5 .face-draw img,
#btn4:checked ~ label .face-4 .face-draw img,
#btn3:checked ~ label .face-3 .face-draw img,
#btn2:checked ~ label .face-2 .face-draw img,
#btn1:checked ~ label .face-1 .face-draw img{
    color:red;
    transition-duration: 1s;

}
input[type="radio"]{display:none}
</style>
@section('content')
{{ Auth::user()->name }}
{{-- Minimal --}}
<x-adminlte-modal id="modalMin" title="Minimal" size="lg">
<div class="likert-draw">
  <div class="static-bar">
    <div class="likert-bar" >
      <div class="likert-btn" >
        <div class="likert-btn-decorate"></div>
      </div>
    </div>
  </div>
</div>
<input type="radio" id="btn1" name="btn" >
<label for="btn1">
    <div class="space-blank"></div>
    <div class="face-1">
        <div class="face-draw">
            <img src="{{asset('img/muy-feliz.png')}}">
        </div>
    </div>
    <div class="label-1">Muy Feliz</div>
</label>
<input type="radio" id="btn2" name="btn"  >
<label for="btn2">
    <div class="space-blank"></div>
    <div class="face-2">
        <div class="face-draw">
            <img src="{{asset('img/contento.png')}}">
        </div>
    </div>
    <div class="label-2">Contento</div>
</label>
<input type="radio" id="btn3" name="btn" >
<label for="btn3">
    <div class="space-blank"></div>
    <div class="face-3">
        <div class="face-draw">
            <img src="{{asset('img/feliz.png')}}">
        </div>
    </div>
    <div class="label-3">Feliz</div>
</label>
<input type="radio" id="btn4" name="btn" >
<label for="btn4">
    <div class="space-blank"></div>
    <div class="face-4">
        <div class="face-draw">
            <img src="{{asset('img/serio.png')}}">
        </div>
    </div>
    <div class="label-4">Serio</div>
</label>
<input type="radio" id="btn5" name="btn" >
<label for="btn5">
    <div class="space-blank"></div>
    <div class="face-5">
        <div class="face-draw">
            <img src="{{asset('img/enfermo.png')}}">
        </div>
    </div>
    <div class="label-5">Enfermo</div>
</label>
<input type="radio" id="btn6" name="btn" >
<label for="btn6">
    <div class="space-blank"></div>
    <div class="face-6">
        <div class="face-draw">
            <img src="{{asset('img/triste.png')}}">
        </div>
    </div>
    <div class="label-6">Triste</div>
</label>
<input type="radio" id="btn7" name="btn"  >
<label for="btn7">
    <div class="space-blank"></div>
    <div class="face-7">
        <div class="face-draw">
            <img src="{{asset('img/preocupado.png')}}">
        </div>
    </div>
    <div class="label-7">Preocupado</div>
</label>
<input type="radio" id="btn8" name="btn" >
<label for="btn8">
    <div class="space-blank"></div>
    <div class="face-8">
        <div class="face-draw">
            <img src="{{asset('img/muy-triste.png')}}">
        </div>
    </div>
    <div class="label-8">Muy Triste</div>
</label>
</x-adminlte-modal>
{{-- Example button to open modal --}}
<x-adminlte-button label="Open Modal" data-toggle="modal" data-target="#modalMin"/>

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
      

    </div>
@endsection

@section('js')
        <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script> console.log('Hi!'); </script>
@stop