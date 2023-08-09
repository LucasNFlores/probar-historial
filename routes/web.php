<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DeviceController;



Route::get('/', function () {
    return view('welcome');
});



//Dispositivos

Route::get('/devices', [DeviceController::class, 'index']) -> name('devices.index');

Route::get('/devices/nuevo', [DeviceController::class, 'create']) -> name('create');

Route::post('/devices', [DeviceController::class, 'store']) -> name('store');

Route::get('/devices/{device}/edit', [DeviceController::class, 'edit']) -> name('edit');

Route::put('/devices/{device}', [DeviceController::class, 'update']) -> name('update');

Route::delete('/devices/{device}', [DeviceController::class, 'destroy']) -> name('destroy');


