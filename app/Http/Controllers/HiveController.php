<?php

namespace App\Http\Controllers;


use App\Models\Hive;
use App\Models\Apiary;
use App\Http\Requests\StoreHiveRequest;
use App\Http\Requests\UpdateHiveRequest;
use Illuminate\Http\Request;

class HiveController extends Controller
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
        $id = auth()->user()->id;
        $apiariesCount = Apiary::where('user_id',$id)->count();

        $hivesCount = 0;
        $userApiaries = Apiary::where('user_id',$id)->get();
        foreach ($userApiaries as $apiary){
            $hivesCount = $hivesCount + $apiary->hives()->count();
        }



        return view('dashboard', [
            'userApiaries' => $userApiaries ,
            'apiariesCount'=> $apiariesCount,
            'hivesCount'=> $hivesCount
        ]); #Array asociativo
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{

    $hive = new Hive();
    $apiaries = Apiary::all();
    return view('hives.create', compact('hive', 'apiaries'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHiveRequest $request)
    {

        $validated = $request->validated();
        $hive = Hive::create($validated);
        $hive->save();

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
        $apiaries = Apiary::all();

       return view ('hives.edit', compact('hive', 'apiaries')); #Genera de forma automatica lo que hace el array asociativo

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHiveRequest $request, string $id)
    {
        $validated = $request->validated();

        $hive = Hive::find($id);
        $hive -> fill($validated);
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
