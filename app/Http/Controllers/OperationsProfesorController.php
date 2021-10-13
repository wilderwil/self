<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

use App\Models\OperationsProfesor;
class OperationsProfesorController extends Controller
{
    public function index(){
        return view('operations');
    }
    public function fetchOperations(){
        return Operation::All();
    }
    public function store(){
        return  OperationsProfesor::create([
             'user_id'=>request('user_id'),
             'hour_id' => request('hour_id'),
             'operation_id' => request('operation_id'),
             'day_id' => request('day_id')]);
     }
     public function destroy( ){
         
         $activityUser = new OperationsProfesor();
         $activityUser->where('user_id' ,'=', request('user_id'))
                      ->where('hour_id', '=' ,  request('hour_id'))
                      ->where('operation_id', '=' ,request('operation_id'))
                      ->where('day_id' ,'=',request('day_id'))->delete();
         //$activityUser->delete();
     }
}
