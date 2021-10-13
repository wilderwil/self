<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\ActivityUser;
class ActivitiesController extends Controller
{
    public function index(){
        return view('activities');
    }
    public function fetchActivities(){
        return Activity::All();
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
