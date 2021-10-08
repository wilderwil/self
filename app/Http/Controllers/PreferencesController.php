<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreferencesStoreRequest;
use App\Models\Preference;
use Illuminate\Http\Request;

class PreferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $preferences = Preference::all();
        if ($request->has('search')) {
            $preferences = Preference::where('description', 'like', "%{$request->search}%")->get();
        }else
        {
            $preferences = Preference::all();
        }
        
        return view('preferences.index', compact('preferences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preferences.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreferencesStoreRequest $request)
    {
        
        Preference::create($request->validated());

        return redirect()->route('preferences.index')->with('message', 'Preferencia Creada');
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
    public function edit(Preference $preference)
    {
        return view ('preferences.edit',compact('preference'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PreferencesStoreRequest $request, Preference $preference)
    {
        $preference->update([
            'description' => $request->description
        ]);

        return redirect()->route('preferences.index')->with('message', 'Preferencia Avtualizada Correctamente');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preference $preference)
    {
        
        $preference->delete();

        return redirect()->route('preferences.index')->with('message', 'Preferencia eliminada');
    }
}
