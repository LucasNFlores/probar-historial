<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Hive;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hives.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> name;
        $hive = new Hive();
        $hive->name=$request['name'];
        $hive -> save();
        return redirect()->route('hives.index');
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
        $hive = Hive::find($id);

       return view ('hives.edit', compact('hive')); #Genera de forma automatica lo que hace el array asociativo

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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