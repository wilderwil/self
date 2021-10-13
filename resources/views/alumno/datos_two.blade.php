@extends('layouts.app')
@section('content')
<div class="contenedor" id="app">
<div class=" div-registro foto" >
<div class="row"> 
<div class="col-md-10 offset-md-1">
<div class="card-header">
                <h3 class="card-title">Striped Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >Hora</th>
                      <th>Lunes</th>
                      <th>Martes</th>
                      <th>Miércoles</th>
                      <th>Jueves</th>
                      <th>Viernes</th>
                      <th >Sábado</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>8:00</th>
                      <td>{{$horario[0][0]}}</td>
                      <td>{{$horario[0][1]}}</td>
                      <td>{{$horario[0][2]}}</td>
                      <td>{{$horario[0][3]}}</td>
                      <td>{{$horario[0][4]}}</td>
                      <td><dragcomponent :day_id="6" :hour_id="1" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>
                    <tr>
                      <th>8:45</th>
                      <td>{{$horario[1][0]}}</td>
                      <td>{{$horario[1][1]}}</td>
                      <td>{{$horario[1][2]}}</td>
                      <td>{{$horario[1][3]}}</td>
                      <td>{{$horario[1][4]}}</td>                      
                      <td><dragcomponent :day_id="6" :hour_id="2" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>                    <tr>
                      <th>9:30</th>
                      <td>{{$horario[2][0]}}</td>
                      <td>{{$horario[2][1]}}</td>
                      <td>{{$horario[2][2]}}</td>
                      <td>{{$horario[2][3]}}</td>
                      <td>{{$horario[2][4]}}</td>                        
                      <td><dragcomponent :day_id="6" :hour_id="3" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>                    <tr>
                      <th>10:30</th>
                      <td>{{$horario[3][0]}}</td>
                      <td>{{$horario[3][1]}}</td>
                      <td>{{$horario[3][2]}}</td>
                      <td>{{$horario[3][3]}}</td>
                      <td>{{$horario[3][4]}}</td>  
                      <td><dragcomponent :day_id="6" :hour_id="4" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>                    <tr>
                      <th>11:00</th>
                      <td>{{$horario[4][0]}}</td>
                      <td>{{$horario[4][1]}}</td>
                      <td>{{$horario[4][2]}}</td>
                      <td>{{$horario[4][3]}}</td>
                      <td>{{$horario[4][4]}}</td>  
                      <td><dragcomponent :day_id="6" :hour_id="5" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>
                    <tr>
                      <th>12:00</th>
                      <td>{{$horario[5][0]}}</td>
                      <td>{{$horario[5][1]}}</td>
                      <td>{{$horario[5][2]}}</td>
                      <td>{{$horario[5][3]}}</td>
                      <td>{{$horario[5][4]}}</td>  
                      <td><dragcomponent :day_id="6" :hour_id="6" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>
                    <tr>
                      <th>14:00</th>
                      <td>{{$horario[6][0]}}</td>
                      <td>{{$horario[6][1]}}</td>
                      <td>{{$horario[6][2]}}</td>
                      <td>{{$horario[6][3]}}</td>
                      <td>{{$horario[6][4]}}</td>  
                      <td><dragcomponent :day_id="6" :hour_id="8" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>
                    <tr>
                      <th>15:00</th>
                      <td>{{$horario[7][0]}}</td>
                      <td>{{$horario[7][1]}}</td>
                      <td>{{$horario[7][2]}}</td>
                      <td>{{$horario[7][3]}}</td>
                      <td>{{$horario[7][4]}}</td>  
                      <td><dragcomponent :day_id="6" :hour_id="9" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>
                    <tr>
                      <th>16:00</th>
                      <td>{{$horario[8][0]}}</td>
                      <td>{{$horario[8][1]}}</td>
                      <td>{{$horario[8][2]}}</td>
                      <td>{{$horario[8][3]}}</td>
                      <td>{{$horario[8][4]}}</td>  
                      <td><dragcomponent :day_id="6" :hour_id="10" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>
                    <tr>
                      <th>17:00</th>
                      <td>{{$horario[9][0]}}</td>
                      <td>{{$horario[9][1]}}</td>
                      <td>{{$horario[9][2]}}</td>
                      <td>{{$horario[9][3]}}</td>
                      <td>{{$horario[9][4]}}</td>  
                      <td><dragcomponent :day_id="6" :hour_id="11" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>
                    <tr>
                      <th>17:30</th>
                      <td><dragcomponent :day_id="1" :hour_id="12" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="2" :hour_id="12" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="3" :hour_id="12" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="4" :hour_id="12" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="5" :hour_id="12" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="6" :hour_id="12" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>
                    <tr>
                      <th>18:00</th>
                      <td><dragcomponent :day_id="1" :hour_id="13" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="2" :hour_id="13" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="3" :hour_id="13" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="4" :hour_id="13" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="5" :hour_id="13" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                      <td><dragcomponent :day_id="6" :hour_id="13" :user_id="{{ auth()->user()->id}}"></dragcomponent></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            
</div>
</div>
</div>

<div class =" div-registro datos" >
    
<form method="POST" action="alumno_complete" id="form-register" style="margin-top:-50px;">
                        @csrf
                        <div class="form-group row" style="padding-left:50px;margin-top:80px">
                        <h3 >{{ __('Ingreso Datos Alumno') }}</h3>
</div>



                        <div class="form-group row" >
                           

                            <div class="col-md-8 div-field offset-md-1">
                            <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $alumno->name }}"  autocomplete="name" autofocus>

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
                               <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $alumno->date }}"  autocomplete="date" autofocus>

                               @error('date')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                           <div class="col-md-4 div-field ">
                             
                           <label for="course_id" class="col-form-label text-md-right">{{ __('Curso') }}</label>
                           <input id="course_id" type="text" class="form-control @error('course_id') is-invalid @enderror" name="course_id" value="{{ $alumno->course_id }}"  autocomplete="date" autofocus>

                               @error('course_id')
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

                                <input id="asignatura" type="text" class="form-control @error('asignatura') is-invalid @enderror" name="asignatura" value="{{ $alumno->asignatura }}"  autocomplete="asignatura">

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

                                <input id="profesor" type="profesor" class="form-control @error('profesor') is-invalid @enderror" name="profesor" value="{{ $alumno->profesor }}" autocomplete="profesor">

                                @error('profesor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                         
                            <div class="col-md-8 div-field offset-md-1">
                            <label for="amigos" class="col-form-label text-md-right">{{ __('¿Cuales son tus compañer@s mas cercanos?') }}</label>

                                <input id="amigos" type="text" class="form-control" name="amigos" value="{{ $alumno->amigos }}" autocomplete="amigos">
                                @error('amigos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
        .foto {
            background-image: url(img/datosAlumno.png);
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
tbody{
    background:#D9EEFD;

    color: #000;
}
thead{background: #3FA9F5;
}
    </style>
@stop
@section('javascript')
<script>

 //document.getElementById('course_select').selectedOptions[0].value
</script>

@stop