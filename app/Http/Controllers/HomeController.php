<?php

namespace App\Http\Controllers;
use App\Models\Horario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view('admin');
       //return view('home');
     /* $horario = new Horario();
     $hours =$horario->where('course_id','=',1)->get();

     $users = DB::table('horarios')
     ->join('courses', 'horarios.course_id', '=', 'courses.id')
     ->join('days', 'horarios.day_id', '=', 'days.id')
     ->join('hours', 'horarios.hour_id', '=', 'hours.id')
     ->join('asignaturas', 'horarios.asignatura_id', '=','asignaturas.id')
     ->select('courses.course', 'hours.inicio', 'days.day','asignaturas.asignatura')
     ->where('horarios.course_id','=',1)
     ->orderBy('horarios.hour_id')
     ->orderBy('horarios.day_id')
     ->get();
     print_r($users);*/
       /* foreach( $hours as  $hour){
            echo $hour->asignatura_id;
        }*/

     }

}
