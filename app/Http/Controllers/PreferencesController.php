<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preference;
class PreferencesController extends Controller
{
    public function index(){
        return view('preferences');
    }
    public function fetchPreferences(){
        return Preference::All();
    }
}
