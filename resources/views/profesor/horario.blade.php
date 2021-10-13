@extends('layouts.app')
@section('content')
<div class="contenedor" id="app">
<div class=" div-registro foto" >
<div class="row"> 
<div class="col-md-10 offset-md-1">
<div class="card-header">
                <h3 class="card-title">Horario Profesor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <?php echo $horario;?>
              </div>
              <!-- /.card-body -->
              
            
</div>
</div>
</div>

<div class =" div-registro datos" >
    
<form method="GET" action="profesor" id="form-register" style="margin-top:-50px;">
                        @csrf
                        <div class="form-group row" style="padding-left:50px;margin-top:80px">
                        <h3 >{{ __('Actividades Profesor') }}</h3>
</div>




                       <div class="form-group row">
                       <div class="col-md-8 div-field offset-md-1">
                            <operations></operations>

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