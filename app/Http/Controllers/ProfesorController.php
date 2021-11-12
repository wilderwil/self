<?php

namespace App\Http\Controllers;
use App\Models\ActivityUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Horario;
use App\Models\Hour;
use App\Models\Profesor;
use App\Models\User;
use App\Models\OperationsProfesor;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfesorController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
     //   $this->middleware('isAdmin');
      //  $this->middleware('role');
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){ 
        
       $profesor =Profesor::Where('user_id',Auth()->user()->id)->get();
       if(count($profesor)>0 ) {
            if(!$profesor[0]->complete){
                return view ('profesor.datos_one',compact('profesor'));
            }
            return view("home");
       }else{
        return view ('profesor.datos_one');
       }
            
        
    }
    public function complete(Request $request){
        Profesor::where('user_id','=',Auth()->user()->id)->update(['complete'=>1]);
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
            'date'=>'required',
            'rut' => 'required',
            'direction' => 'required',
            'comuna' => 'required',
            'phone' => 'required',
           
             
        ])->validate();  
        $user_id = Auth()->user()->id;
        
        
        $profesor_find =Profesor::Where('user_id',Auth()->user()->id)->get();
        $profesor = new  Profesor(); 
        if(!isset($profesor_find[0]->id)){ 
           
            $profesor->jefatura_id = $request->course_id;
            $profesor->date = $request->date;
            $profesor->name = $request->name;
            $profesor->rut = $request->rut;
            $profesor->direction = $request->direction;
            $profesor->user_id = $user_id;
            $profesor->comuna = $request->comuna;
            $profesor->phone = $request->phone;
            $profesor->complete = 1;
            $profesor->save();
        }
        else{ 
            $update['jefatura_id'] = $request->course_id;
            $update['date' ]= $request->date;
            $update['name'] = $request->name;
            $update['rut'] = $request->rut;
            $update['direction'] = $request->direction;
            $update['user_id'] = $user_id;
            $update['comuna'] = $request->comuna;
            $update['phone'] = $request->phone;
            $update['complete'] = 1;
            $profesor->where('user_id','=',$update['user_id'])->update($update);
            $profesor = (object)$update;
         }
       
         return view ('home');
    
    }
    public function store(){
       return  ActivityUser::create([
            'user_id'=>request('user_id'),
            'hour_id' => request('hour_id'),
            'activity_id' => request('activity_id'),
            'day_id' => request('day_id')]);
    }
    public function destroy( ){
        
        $operationProfesor = new OperationsProfesor();
        $operationProfesor->where('user_id' ,'=', request('user_id'))
                     ->where('hour_id', '=' ,  request('hour_id'))
                     ->where('operation_id', '=' ,request('operation_id'))
                     ->where('day_id' ,'=',request('day_id'))->delete();
        //$activityUser->delete();
    }
    public function fill(){
      
        
         if(Auth()->user()->hasRole('Profesor')){ 
        $horarios = Horario::join('asignatura_profesores', 'asignatura_profesores.asignatura_id', '=', 'horarios.asignatura_id')
              ->join('courses', 'horarios.course_id', '=', 'courses.id')
              ->where('asignatura_profesores.profesor_id',Auth()->user()->id)
              ->orderBy('horarios.day_id')
              ->orderBy('horarios.hour_id')
              ->get(['horarios.asignatura_id', 'horarios.day_id', 'horarios.hour_id', 'courses.course']);
            $horario= $this->get_horario($horarios);
            $operationProfesor = OperationsProfesor::where('user_id',Auth()->user()->id)->delete();
            return view ('profesor.horario',compact('horario')); 
        }else {
            return view('home');
        }
        
    }
    private function get_horario($horarios){
        $table =[];
        $hours = Hour::all()->toArray();
        
        for($i = 0;$i<13;$i++){
            for ($j = 0; $j<6;$j++){
                $day =$j+1;
                $hour = $i+1;
                $user_id = Auth()->user()->id;
                $cadena =  '<profesor :day_id="'.$day.'" :hour_id="'.$hour.'" :user_id="'.$user_id.'"></component>';
                $table[$i][$j] = $cadena;
            }
        }
        foreach ($horarios as $horario){
            $table[$horario->hour_id -1 ][$horario->day_id -1]= $horario->course;
    }
    
        $html = '<table class="table table-striped">
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
        <tbody>';
        for($i = 0;$i<13;$i++){
            $html =  $html.'<tr><th>'.$hours[$i]['inicio'].'</th>';
            for ($j = 0; $j<6;$j++){
                 $html =  $html. '<td>';
                 $html = $html. $table[$i][$j];
                 $html =  $html. '</td>';
            }
            $html =  $html.'</tr>';
        }

    $html= $html. '</tbody>
    </table>';
    return $html;
    }
    public function programs(){
        $programs = Program::all();
        return view('profesor.programs',compact('programs'));
    }
    public function program_detail(Request $request){
        $program_id = $request->id;
        $program = Program::find($program_id);
        return view('profesor.program_detail',compact('program'));
    }
    public function programs_view(){
        $programs = Program::all();
        return view('profesor.programs_view',compact('programs'));
    }
    public function program_detail_view(Request $request){
        $program_id = $request->id;
        $program = Program::find($program_id);
        return view('profesor.program_detail_view',compact('program'));
    }  
}
    
