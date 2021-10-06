<?php

namespace App\Http\Controllers;

use App\Models\ActivityUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use App\Models\Alumno;
use App\Models\Horario;
class AlumnoController extends BaseController
{
    public function  __construct()
    {
        $this->middleware('auth');
     //   $this->middleware('isAdmin');
      //  $this->middleware('role');
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view ('alumno.datos_one');
    }
    public function save(Request $request){

       
       /* $validatedData = $request->validate([
            'course_id' => 'required',
            'name' => 'required',
            'asignatura' => 'required',
            'profesor' => 'required',
        ]);*/
        Validator::make($request->all(), [
            'course_id' => 'required',
            'name' => 'required',
            'asignatura' => 'required',
            'profesor' => 'required',
        ])->validate();
        $user_id = Auth()->user()->id;
        
        $alumno = new  Alumno();
        $alumno->course_id = $request->course_id;
        $alumno->date = $request->date;
        $alumno->name = $request->name;
        $alumno->asignatura = $request->asignatura;
        $alumno->profesor = $request->profesor;
        $alumno->user_id = $user_id;
        $alumno->amigos = $request->amigos;
        $alumno->save();
        $horario = new Horario ();
        $horario_view = $horario->get_horario_curso($alumno->course_id);
        return view ('alumno.datos_two',['alumno'=>$alumno,'horario'=>$horario_view]);
    
    }
    public function store(){
       return  ActivityUser::create([
            'user_id'=>request('user_id'),
            'hour_id' => request('hour_id'),
            'activity_id' => request('activity_id'),
            'day_id' => request('day_id')]);
    }
    public function destroy( ){
        
        $activityUser = new ActivityUser();
        $activityUser->where('user_id' ,'=', request('user_id'))
                     ->where('hour_id', '=' ,  request('hour_id'))
                     ->where('activity_id', '=' ,request('activity_id'))
                     ->where('day_id' ,'=',request('day_id'))->delete();
        //$activityUser->delete();
    }
}
