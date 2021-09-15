@extends('adminlte::page')
@section('content')
<div class="container-fluid pt-3" id= "app">

   <chats  :role="{{ auth()->user()->roleName() }}" :user="{{ auth()->user() }} "></chats>
   
                                
  
</div>
@endsection
@section('js')
        <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
   
    <script> console.log('Hi!');
  //   document.getElementById('logout-form').submit();
     </script>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop