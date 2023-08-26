<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Http\Request;
//listo
class DataController extends Controller
{

    public function index()
    {
        $datas = Data::all();
        return view('datas.index', [
            'datas' => $datas
        ]);
    }


    public function create()
    {
        return view('datas.create');
    }


    public function store(Request $request)
    {
        $request -> name;
        $data = new Data();
        $data->name=$request['name'];
        $data->value=$request['value'];
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

    public function update(Request $request, int $id)
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

