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
use App\Models\Program;
use App\Models\User;

class AlumnoController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
     //   $this->middleware('isAdmin');
      //  $this->middleware('role');
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
       $alumno =Alumno::Where('user_id',Auth()->user()->id)->get();
       if(count($alumno)>0 ) {
            if(!$alumno[0]->complete){
                return view ('alumno.datos_one',compact('alumno'));
            }
            return view("home");
       }else{
        return view ('alumno.datos_one');
       }
            
        
    }
    public function complete(Request $request){
        Alumno::where('user_id','=',Auth()->user()->id)->update(['complete'=>1]);
        return view('home');
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
        
        
        $alumno_find =Alumno::Where('user_id',Auth()->user()->id)->get();
        $alumno = new  Alumno(); 
        if(!isset($alumno_find[0]->id)){ 
           
            $alumno->course_id = $request->course_id;
            $alumno->date = $request->date;
            $alumno->name = $request->name;
            $alumno->asignatura = $request->asignatura;
            $alumno->profesor = $request->profesor;
            $alumno->user_id = $user_id;
            $alumno->amigos = $request->amigos;
            $alumno->save();
        }
        else{ 
            $update['course_id'] = $request->course_id;
            $update['date' ]= $request->date;
            $update['name'] = $request->name;
            $update['asignatura'] = $request->asignatura;
            $update['profesor'] = $request->profesor;
            $update['user_id'] = $user_id;
            $update['amigos'] = $request->amigos;
            $alumno->where('user_id','=',$update['user_id'])->update($update);
            $alumno = (object)$update;
            ActivityUser::where('user_id','=',$update['user_id'])->delete();
        }
       
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
    public function programs(){
        $programs = Program::all();
        return view('alumno.programs',compact('programs'));
    }
    public function program_detail(Request $request){
        $program_id = $request->id;
        $program = Program::find($program_id);
        return view('alumno.program_detail',compact('program'));      
    }
}
