<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CoursesController extends Controller
{
    public function index(){
        return view('courses');
    }
    public function fetchCourses(){
        return Course::All();
    }
}
