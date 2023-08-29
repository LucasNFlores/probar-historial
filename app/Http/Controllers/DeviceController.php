<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Device;
//listo
class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view('devices.index', [
            'devices' => $devices
        ]);
    }


    public function create()
    {
        return view('devices.create');
    }

    /* public function create(Device $device)
    {return view('devices.create', compact('device'));}*/



    public function store(Request $request)
    {
        $request -> name;
        $device = new Device();
        $device->name=$request['name'];
        $device->functionality=$request['functionality'];
        $device->state=$request['state'];
        $device -> save();
        return redirect()->route('devices.index');
    }


    public function show(int $id)
    {

    }


    public function edit(int $id)
    {
        $device = Device::find($id);

       return view ('devices.edit', compact('device'));

    }

    public function update(Request $request, int $id)
    {

        $device = Device::find($id);
        $device -> name = $request -> name;
        $device -> functionality = $request -> functionality;
        $device -> state = $request -> state;

        $device->save();
        return redirect()->route('devices.index');
    }

    public function destroy(int $id)
    {

        $device = Device::find($id);
        $device -> delete();
        return redirect() -> route('devices.index');
    }
}

