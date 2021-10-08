<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsignaturasUpdateRequest;
use App\Http\Requests\AsignaturasStoreRequest;
use App\Models\Asignatura;
use App\Models\Course;
use Illuminate\Http\Request;

class AsignaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request->has('search')) {
            $asignaturas= Asignatura::where('asignatura', 'like', "%{$request->search}%")->orWhere('code', 'like', "%{$request->search}%")->get();
        }else{
            $asignaturas = Asignatura::all();
        }

        return view('asignaturas.index', compact('asignaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();

        return view('asignaturas.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsignaturasStoreRequest $request)
    {
        Asignatura::create($request->validated());

        return redirect()->route('asignaturas.index')->with('message', 'Asignatura Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignatura $asignatura)
    {
        $courses = Course::all();
        return view('asignaturas.edit', compact('asignatura', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AsignaturasUpdateRequest $request, Asignatura $asignatura)
    {
        $asignatura->update([
            'code'=>$request->code,
            'course_id' => $request->course_id,
            'asignatura'     => $request->asignatura
        ]);
        return redirect()->route('asignaturas.index')->with('message', 'Asignatura actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();

        return redirect()->route('asignaturas.index')->with('message', 'Asignatura eliminada ');
    }
}
