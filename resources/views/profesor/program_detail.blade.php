@extends('adminlte::page')
<style>
    body{
        background: #fff !important;
    }

.embed-responsive {
    border-radius: 15px;
}
</style>
@section('content')
<div class="container mt-5 pt-1 pl-5 pr-5" id="app">
<div class="row  centrada ">
    <h3>Programa {{$program->name}}</h3>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, </p>
</div>

    <div class="row">
        <div class="col-sm-6">
          <file-upload-component :user_id="{{Auth()->user()->id}}" :program_id="{{$program->id}}"></file-upload-component>
        </div>

        <div class="col-sm-5 offset-sm-1">
          <link-youtube-store-component :user_id="{{Auth()->user()->id}}" :program_id="{{$program->id}}"></link-youtube-store-component>
        </div>
    </div>
</div>
@endsection

@section('js')
        <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script> console.log('Hi!'); </script>
@stop