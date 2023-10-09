<?php

namespace App\Http\Controllers;


use App\Models\Hive;
use App\Models\Apiary;
use App\Models\User;
use App\Models\Device;
use App\Http\Requests\StoreHiveRequest;
use App\Http\Requests\UpdateHiveRequest;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
    //dd(auth()->user()::class::hasRole('Admin'));
    //dd(auth()->user()->roles->pluck('name')->first()); for else preguntar
            $user = auth()->user();
            //se recupera el user autenticado y traemos todos los roles y pasamos de coleccion a array
            $arrayRoles = auth()->user()->roles->pluck('name')->toArray();

            $userCount = 0;
            $deviceCount = 0;
            $apiariesCount = 0;
            $hivesCount = 0;
            $userApiaries = [];

             // Obtener todos los dispositivos una vez, antes del bucle
            $devices = Device::all();

            if (in_array('User', $arrayRoles)) {
                $id = $user->id;
                $apiariesCount = Apiary::where('user_id', $id)->count();
                $userApiaries = Apiary::where('user_id', $id)->get();


                foreach ($userApiaries as $apiary) {
                    $hives = $apiary->hives;

                // Iterar sobre los dispositivos y comparar con los hives
                foreach ($devices as $device) {
                    foreach ($hives as $hive) {
                        if ($device->hive_id == $hive->id) {
                            // Si hay coincidencia, incrementar el contador
                            $deviceCount++;
                        }
                    }
                }

                    if ($hives instanceof \Illuminate\Support\Collection) {
                        // Si hives es una colección, incrementa el contador
                        $hivesCount += $hives->count();
                    } elseif (is_int($hives)) {
                        // Si hives es un entero, úsalo directamente
                        $hivesCount += $hives;
                    }
                }
            } elseif (in_array('Admin', $arrayRoles)) {
                // Contar todos
                $apiariesCount = Apiary::count();
                $hivesCount = Hive::count();
                $userCount = User::count();
                $deviceCount = Device::count();
            }

            return view('dashboard', [
                'userApiaries' => $userApiaries,
                'apiariesCount' => $apiariesCount,
                'hivesCount' => $hivesCount,
                'userCount' => $userCount,
                'deviceCount' => $deviceCount,
            ]);
        }

        //para que Ulises y Lucas tengan como estaba antes
        // public function dashboard()                             #EN CADA METODO REVISAR QUE ESTEN BIEN LAS RUTAS
        // {
        //     $id = auth()->user()->id;
        //     $apiariesCount = Apiary::where('user_id',$id)->count();

        //     $hivesCount = 0;
        //     $userApiaries = Apiary::where('user_id',$id)->get();
        //     foreach ($userApiaries as $apiary){
        //         $hivesCount = $hivesCount + $apiary->hives()->count();
        //     }

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
        $hive = Hive::find($id);
        $hive->delete();
        return redirect()->route('hives.index')->with('success', 'Colmena eliminada exitosamente.');
    }
}
