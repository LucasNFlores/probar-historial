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

public function show(int $id)
{
    $data = Data::with('variable', 'device')->findOrFail($id);
    // Carga las relaciones "variable" y "device"
    $variable = $data->variable; // Accede a la relación "variable"

    $device = $data->device; // Accede a la relación "device"

    return view('datas.show', compact('data', 'variable', 'device')); // Pasa las variables a la vista
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
        $data=Data::create($validated);

        $data -> save();
        return redirect()->route('data.index');
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
        $data->fill($validated);
        $data->save();
        return redirect()->route('data.index');
    }

    public function destroy(int $id)
    {
        $data = Data::find($id);
        $data -> delete();
        return redirect() -> route('data.index');
    }
}

