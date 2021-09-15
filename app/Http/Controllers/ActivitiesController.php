<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
class ActivitiesController extends Controller
{
    public function index(){
        return view('activities');
    }
    public function fetchActivities(){
        return Activity::All();
    }
}
