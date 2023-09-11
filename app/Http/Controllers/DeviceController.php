<?php

namespace App\Http\Controllers;
use App\Models\Device;
use App\Models\Hive;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;

//listo
class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::latest()->paginate(8);
        return view('devices.index',compact('devices'));
    }

    public function view()
    {
        $device = Device::all();
        return view('devices.show', [
            'devices' => $device
        ]);
    }

    public function create()
    {   $device = new Device();
        $hive=new Hive();
        return view('devices.create',compact('device','hive'));
    }

    public function store(StoreDeviceRequest $request)
    {
        $validated = $request->validated();
        $request -> name;
        $device = new Device();
        $device->name=$request['name'];
        $device->functionality=$request['functionality'];
        $device->state=$request['state'];
        $device->hive_id=$request->hive_id;
        $device -> save();
        return redirect()->route('devices.index');
    }


    public function edit(int $id)
    {
        $device = Device::find($id);
        $hives = Hive::all();
       return view ('devices.edit', compact('device','$hives'));
    }

    public function update(UpdateDeviceRequest $request, int $id)
    {
        $validated = $request->validated();
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

