<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable = ['asignatura_id','day_id','course_id','hour_id'];
    public function curso()
    {
        return $this->belongsTo(Course::class,'course_id');
    }
    public function get_horario_curso($id_curso){
      $hours =$this->where('course_id','=',$id_curso)->get();

     $users = $this->join('courses', 'horarios.course_id', '=', 'courses.id')
     ->join('days', 'horarios.day_id', '=', 'days.id')
     ->join('hours', 'horarios.hour_id', '=', 'hours.id')
     ->join('asignaturas', 'horarios.asignatura_id', '=','asignaturas.id')
     ->select('courses.course', 'hours.inicio', 'days.day','asignaturas.asignatura')
     ->where('horarios.course_id','=',1)
     ->orderBy('horarios.hour_id')
     ->orderBy('horarios.day_id')
     ->get();
     $row=0;
     $column=0;
     $horario=[];
     foreach( $users as $user){
       $horario[$row][$column] = $user->asignatura;
       $column = $column + 1;
       if( $column === 5){
       $column =0;
       $row = $row+1;
      }
       
     }
     return $horario;
    }

}
