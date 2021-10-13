<?php

namespace App\Http\Controllers;

use App\Http\Requests\OperationsStoreRequest;
use App\Models\Operation;

use Illuminate\Http\Request;

class OperationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $operations = Operation::all();
        if ($request->has('search')) {
            $operations = Operation::where('description', 'like', "%{$request->search}%")->get();
        }else
        {
            $operations = Operation::all();
        }
        
        return view('operations.index', compact('operations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operations.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OperationsStoreRequest $request)
    {
        
        Operation::create($request->validated());

        return redirect()->route('operations.index')->with('message', 'Creada');
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
    public function edit(Operation $operation)
    {
        return view ('preferences.edit',compact('operation'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OperationsStoreRequest $request, Operation $operation)
    {
        $operation->update([
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
    public function destroy(Operation $operation)
    {
        
        $operation->delete();

        return redirect()->route('operations.index')->with('message', 'Eliminada');
    }
 
    public function fetchOperations(){
        return Operation::All();
    }
    
}
