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

    public function show(string $id)
    {
        $devices = Device::with('hive')->findOrFail($id);
        $hive=$devices->hive;
        return view('devices.show', compact('devices','hive')

        );
    }

    public function create()
    {   $device = new Device();
        $hive=Hive::all();
        return view('devices.create',compact('device','hive'));
    }

    public function store(StoreDeviceRequest $request)
    {
        $validated = $request->validated();
        $device=Device::create($validated);
        $device -> save();
        return redirect()->route('devices.index');
      //  $device->hive_id=$request->hive_id;
    }


    public function edit(int $id)
    {
        $device = Device::find($id);
        $hives=Hive::all();
       return view ('devices.edit', compact('device','hives'));
    }

    public function update(UpdateDeviceRequest $request, int $id)
    {
        $validated = $request->validated();
        $device = Device::find($id);
        $device->fill($validated);
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

