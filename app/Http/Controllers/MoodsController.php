<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoodsStoreRequest;
use App\Models\Mood;
use App\Models\MoodAlumno;
use Illuminate\Http\Request;

class MoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $moods = Mood::all();
        if ($request->has('search')) {
            $moods = Mood::where('name', 'like', "%{$request->search}%")->get();
        }else
        {
            $moods = Mood::all();
        }
        
        return view('moods.index', compact('moods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moods.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MoodsStoreRequest $request)
    {
        
        Mood::create($request->validated());

        return redirect()->route('moods.index')->with('message', 'Creada');
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
    public function edit(Mood $mood)
    {
        return view ('moods.edit',compact('mood'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MoodsStoreRequest $request, Mood $mood)
    {
        $mood->update([
            'name' => $request->description
        ]);

        return redirect()->route('moods.index')->with('message', 'Mood Actualizada Correctamente');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mood $mood)
    {
        
        $mood();

        return redirect()->route('moods.index')->with('message', 'Eliminada');
    }
 
    public function fetchAllMoods(){
        return Mood::All();
    }
    public function save(){
        return  MoodAlumno::create([
             'user_id'=>request('user_id'),
             'mood_id' => request('mood_id'),]);

     }
    
}
