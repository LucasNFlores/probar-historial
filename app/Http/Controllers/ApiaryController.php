<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Apiary;

class ApiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()                             #EN CADA METODO REVISAR QUE ESTEN BIEN LAS RUTAS
    {
        $apiaries = Apiary::all();
        return view('apiaries.index', [
            'apiaries' => $apiaries
        ]); #Array asociativo
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apiaries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> name;
        $apiary = new Apiary();
        $apiary->name=$request['name'];
        $apiary -> save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $apiary = Apiary::find($id);

       return view ('edit', compact('apiary')); #Genera de forma automatica lo que hace el array asociativo

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $apiary = Apiary::find($id);
        $apiary -> name = $request -> name;
        $apiary->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $apiary = Apiary::find($id);
        $apiary -> delete();
        return redirect() -> route('index');
    }
}
