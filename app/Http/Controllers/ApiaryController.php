<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Apiary;
use App\Http\Requests\StoreApiaryRequest;
use App\Http\Requests\UpdateApiaryRequest;

class ApiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=auth()->user();
        $arrayRoles = auth()->user()->roles->pluck('name')->toArray();
        if (in_array('Admin', $arrayRoles)) {
            $apiaries = Apiary::all();
        }else{
            if (in_array('User', $arrayRoles)){
                $apiaries = Apiary::where('user_id',$user->id)->get();
            }
        }

        return view('apiaries.index', [
            'apiaries' => $apiaries
        ]); #Array asociativo
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $apiary = new Apiary();
        return view('apiaries.create',compact('apiary'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApiaryRequest $request)
    {

        $validated = $request->validated();
        $apiary = Apiary::create($validated);
        $apiary->user_id = auth()->user()->id;
        $apiary -> save();

        return redirect()->route('apiaries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $apiary = Apiary::with('hives')->findOrFail($id);
        $hives = $apiary->hives;
        return view ('apiaries.show', compact('apiary', 'hives'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $apiary = Apiary::find($id);

       return view ('apiaries.edit', compact('apiary')); #Genera de forma automatica lo que hace el array asociativo

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApiaryRequest $request, string $id)
    {
        $validated = $request->validated();

        $apiary = Apiary::find($id);
        $apiary->fill($validated);
        $apiary->save();

        return redirect()->route('apiaries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $apiary = Apiary::find($id);
        $apiary -> delete();
        return redirect() -> route('apiaries.index');
    }
}
