<?php
use App\Events\WebsocketDemoEvent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//broadcast( new  WebsocketDemoEvent('Mensaje de Prueba'));
//Route::get('/', function () {
    //broadcast( new  WebsocketDemoEvent('Mensaje de Prueba'));
   //return view('admin');
//});

Auth::routes();

Route::get('/',[App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::get('/chat',[App\Http\Controllers\ChatsController::class, 'index']);
Broadcast::routes();
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/programs',[App\Http\Controllers\ProgramController::class, 'index'])->name('programs');
Route::get('/program_detail',[App\Http\Controllers\ProgramController::class, 'detail'])->name('program_detail');
Route::get('/messages',[App\Http\Controllers\ChatsController::class, 'fetchMessages']);
Route::post('/messages',[App\Http\Controllers\ChatsController::class, 'sendMessage']);
//Route::get('/preferences',[App\Http\Controllers\PreferencesController::class, 'fetchPreferences']);
Route::get('/alumno',[App\Http\Controllers\AlumnoController::class, 'index']);
Route::post('/save',[App\Http\Controllers\AlumnoController::class, 'save']);
Route::get('/activities',[App\Http\Controllers\ActivitiesController::class, 'fetchActivities']);
Route::get('/courses',[App\Http\Controllers\CoursesController::class, 'fetchCourses']);
Route::post('/activities_alumno',[App\Http\Controllers\AlumnoController::class, 'store']);
Route::delete('/activities_alumno',[App\Http\Controllers\AlumnoController::class, 'destroy']);
Route::resource('preferences', App\Http\Controllers\PreferencesController::class);
Route::resource('asignaturas', App\Http\Controllers\AsignaturasController::class);