<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\HivesController;

Route::get('/', function () {
    return view('welcome');
});

//Colmenas
Route::get('/colmenas', [HivesController::class, 'index']) -> name('hives.index'); #cambiar nombre de rutas SOLO NOMBRES

Route::get('/colmenas/new', [HivesController::class, 'create']) -> name('hives.create');

Route::post('/colmenas', [HivesController::class, 'store']) -> name('hives.store');

Route::get('/colmenas/{hive}/edit', [HivesController::class, 'edit']) -> name('hives.edit');

Route::put('/colmenas/{hive}', [HivesController::class, 'update']) -> name('hives.update');

Route::delete('/colmenas/{hive}', [HivesController::class, 'destroy']) -> name('hives.destroy');

 

//Dispositivos

Route::get('/devices', [DeviceController::class, 'index']) -> name('devices.index');

Route::get('/devices/nuevo', [DeviceController::class, 'create']) -> name('create');

Route::post('/devices', [DeviceController::class, 'store']) -> name('store');

Route::get('/devices/{device}/edit', [DeviceController::class, 'edit']) -> name('edit');

Route::put('/devices/{device}', [DeviceController::class, 'update']) -> name('update');

Route::delete('/devices/{device}', [DeviceController::class, 'destroy']) -> name('destroy');


