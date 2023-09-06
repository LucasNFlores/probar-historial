<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use App\Models\Data;
use Illuminate\Http\Request;
//listo
class DataController extends Controller
{

    public function index()
    {
        $datas = Data::latest('created_at')->paginate(4);
        return view('datas.index',compact('datas'));
}


    public function view()
    {
        $datas = Data::all();
        return view('datas._show', [
            'datas' => $datas
        ]);
    }


    public function create()
    {
        $data= new Data();
        return view('datas.create', compact('data'));
    }


    public function store(StoreDataRequest $request)
    {
        $validated = $request->validated();
        $data = new Data();
        $data->name=$request->name;
        $data->value=$request->value;
        $data->variable_id=$request->variable_id;
        $data -> save();
        return redirect()->route('datas.index');
    }


    public function show(int $id)
    {

    }


    public function edit(int $id)
    {
        $data = Data::find($id);

       return view ('datas.edit', compact('data'));

    }

    public function update(UpdateDataRequest $request, int $id)
    {

        $data = Data::find($id);
        $data -> name = $request -> name;
        $data -> value = $request -> value;
        $data->save();
        return redirect()->route('datas.index');
    }

    public function destroy(int $id)
    {

        $data = Data::find($id);
        $data -> delete();
        return redirect() -> route('datas.index');
    }
}

