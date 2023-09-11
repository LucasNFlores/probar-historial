<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use App\Models\Data;
use App\Models\Variable;
use App\Models\Device;
use Illuminate\Http\Request;
//listo
class DataController extends Controller
{

    public function index()
    {
        $datas = Data::latest('created_at')->paginate(8);
        return view('datas.index',compact('datas'));
}

    public function view()
    {
        $datas = Data::all();
        return view('datas.show', [
            'datas' => $datas
        ]);
    }

    public function create()
    {
        $data = new Data();
        $devices = Device::all();
        $variables = Variable::all();
        return view('datas.create', compact('data','devices', 'variables'));
    }

    public function store(StoreDataRequest $request)
    {
        $validated = $request->validated();
        $data = new Data();
        $data->value=$request->value;
        $data->device_id=$request->device_id;
        $data->variable_id=$request->variable_id;

        $data -> save();
        return redirect()->route('datas.index');
    }

    public function edit(int $id)
    {
        $data = Data::find($id);
        $variables = Variable::all();
        $devices = Device::all();
        return view ('datas.edit', compact('data', 'variables','devices'));
    }

    public function update(UpdateDataRequest $request, int $id)
    {
        $validated = $request->validated();
        $data = Data::find($id);
        $data -> value = $request -> value;
        $data -> device_id = $request -> device_id;
        $data -> variable_id = $request -> variable_id;
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

