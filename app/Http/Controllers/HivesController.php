<?php

namespace App\Http\Controllers;


use App\Models\Hive;
use App\Http\Requests\StoreHiveRequest;
use App\Http\Requests\UpdateHiveRequest;

class HivesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()                             #EN CADA METODO REVISAR QUE ESTEN BIEN LAS RUTAS
    {
        $hives = Hive::all();
        return view('hives.index', [
            'hives' => $hives
        ]); #Array asociativo
    }

    public function dashboard()                             #EN CADA METODO REVISAR QUE ESTEN BIEN LAS RUTAS
    {
        $hives = Hive::all();
        return view('dashboard', [
            'hives' => $hives
        ]); #Array asociativo
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hive = new Hive();
        return view('hives.create', compact('hive'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHiveRequest $request)
    {
        $validated = $request->validated();
        $hive = new Hive();
        $hive->name=$request->name;
        $hive -> save();
        return redirect()->route('hives.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hive = Hive::find($id);

        return view ('hives.show', compact('hive'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hive = Hive::find($id);

       return view ('hives.edit', compact('hive')); #Genera de forma automatica lo que hace el array asociativo

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHiveRequest $request, string $id)
    {
        $validated = $request->validated();

        $hive = Hive::find($id);
        $hive -> name = $request -> name;
        $hive->save();
        return redirect()->route('hives.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $hive = Hive::find($id);
        $hive -> delete();
        return redirect() -> route('hives.index');
    }
}