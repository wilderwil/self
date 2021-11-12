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
//Route::get('/program_detail',[App\Http\Controllers\ProgramController::class, 'detail'])->name('program_detail');
Route::get('/messages',[App\Http\Controllers\ChatsController::class, 'fetchMessages']);
Route::post('/messages',[App\Http\Controllers\ChatsController::class, 'sendMessage']);
Route::get('/preferences_view',[App\Http\Controllers\PreferencesController::class, 'fetchPreferences']);
Route::get('/operations_view',[App\Http\Controllers\OperationsController::class, 'fetchOperations']);
Route::get('/alumno',[App\Http\Controllers\AlumnoController::class, 'index'])->name('alumno');
Route::get('/profesor',[App\Http\Controllers\ProfesorController::class, 'index'])->name('profesor');
Route::post('/alumno_save',[App\Http\Controllers\AlumnoController::class, 'save'])->name('alumno_save');
Route::post('/profesor_save',[App\Http\Controllers\ProfesorController::class, 'save'])->name('profesor_save');
Route::get('/profesor_fill',[App\Http\Controllers\ProfesorController::class, 'fill'])->name('profesor.fill');
Route::get('/program_detail/{id}', [
    'uses' => 'App\Http\Controllers\ProfesorController@program_detail',
    'as'=>'profesor.program_detail']);
    Route::get('/alumno_program_detail/{id}', [
        'uses' => 'App\Http\Controllers\AlumnoController@program_detail',
        'as'=>'alumno.program_detail']);
    Route::get('/program_detail_view/{id}', [
        'uses' => 'App\Http\Controllers\ProfesorController@program_detail_view',
        'as'=>'profesor.program_detail_view']);
Route::get('/profesor_programs',[App\Http\Controllers\ProfesorController::class, 'programs'])->name('profesor.programs');
Route::get('/profesor_view',[App\Http\Controllers\ProfesorController::class, 'programs_view'])->name('profesor.view');
Route::get('/alumno_programs',[App\Http\Controllers\AlumnoController::class, 'programs'])->name('alumno.programs');

Route::post('/mood_save',[App\Http\Controllers\MoodsController::class, 'save'])->name('mood_save');
Route::post('/alumno_complete',[App\Http\Controllers\AlumnoController::class, 'complete']);
Route::get('/activities',[App\Http\Controllers\ActivitiesController::class, 'fetchActivities']);
Route::get('/operations',[App\Http\Controllers\OperationsController::class, 'fetchOperations']);
Route::get('/moods_all',[App\Http\Controllers\MoodsController::class, 'fetchAllMoods']);
Route::get('/courses',[App\Http\Controllers\CoursesController::class, 'fetchCourses']);
Route::post('/activities_alumno',[App\Http\Controllers\ActivitiesController::class, 'store']);
Route::delete('/activities_alumno',[App\Http\Controllers\ActivitiesController::class, 'destroy']);
Route::post('/operations_profesor',[App\Http\Controllers\OperationsProfesorController::class, 'store']);
Route::delete('/operations_profesor',[App\Http\Controllers\OperationsProfesorController::class, 'destroy']);
Route::resource('preferences', App\Http\Controllers\PreferencesController::class)->names('admin.preferences');
Route::resource('asignaturas', App\Http\Controllers\AsignaturasController::class)->names('admin.asignaturas');
Route::resource('operations', App\Http\Controllers\OperationsController::class)->names('admin.operations');
Route::resource('moods', App\Http\Controllers\MoodsController::class)->names('admin.moods');
Route::get('upload_file', function () {
    return view('upload');
});
use App\Http\Controllers\FileUploadController;
 
Route::post('store_file', [FileUploadController::class, 'fileStore']);
Route::post('store_link', [App\Http\Controllers\LinkUploadController::class, 'linkStore']);
Route::get('/videos/{id}', [
    'uses' => 'App\Http\Controllers\LinkUploadController@fechVideos',
    'as'=>'profesor.video']);