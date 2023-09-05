<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiaryController;
use App\Http\Controllers\HivesController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\DataController;

// Route::get('/', function () {
//     return view('dashboard');
// }) -> name('dashboard');

Route::get('/template', function () {
    return view('template');
});
Route::get('/template2', function () {
    return view('template2');
});

//Ruta que pasa los datos de las colmenas al tablero
Route::get('/', [HivesController::class, 'dashboard']) -> name('dashboard');





//Apiarios
Route::get('/apiaries', [ApiaryController::class, 'index']) -> name('apiaries.index');

Route::get('/apiaries/new', [ApiaryController::class, 'create']) -> name('apiaries.create');

Route::post('/apiaries', [ApiaryController::class, 'store']) -> name('apiaries.store');

Route::get('/apiaries/{apiary}/edit', [ApiaryController::class, 'edit']) -> name('apiaries.edit');

Route::get('/apiaries/{apiary}/', [ApiaryController::class, 'show']) -> name('apiaries.show');

Route::put('/apiaries/{apiary}', [ApiaryController::class, 'update']) -> name('apiaries.update');

Route::delete('/apiaries/{apiary}', [ApiaryController::class, 'destroy']) -> name('apiaries.destroy');


//Colmenas
Route::get('/hives', [HivesController::class, 'index']) -> name('hives.index');

Route::get('/hives/new', [HivesController::class, 'create']) -> name('hives.create');

Route::post('/hives', [HivesController::class, 'store']) -> name('hives.store');

Route::get('/hives/{hive}/edit', [HivesController::class, 'edit']) -> name('hives.edit');

Route::get('/hives/{hive}/', [ApiaryController::class, 'show']) -> name('hives.show');

Route::put('/hives/{hive}', [HivesController::class, 'update']) -> name('hives.update');

Route::delete('/hives/{hive}', [HivesController::class, 'destroy']) -> name('hives.destroy');



//Dispositivos
Route::get('/devices', [DeviceController::class, 'index']) -> name('devices.index');

Route::get('/devices/nuevo', [DeviceController::class, 'create']) -> name('createdevice');

Route::post('/devices', [DeviceController::class, 'store']) -> name('storedevice');

Route::get('/devices/{device}/edit', [DeviceController::class, 'edit']) -> name('editdevice');

Route::put('/devices/{device}', [DeviceController::class, 'update']) -> name('updatedevice');

Route::delete('/devices/{device}', [DeviceController::class, 'destroy']) -> name('destroydevice');


//Variables
/*
Route::controller(VariableController::class)->group(function() {
    Route::get('home',         'home')->name('home');
    Route::get('edit',         'edit')->name('edit');
    Route::get('create',  'create')->name('create');

    Route::resource('variables', PostController::class);
});*/


Route::get('/variables', [VariableController::class, 'index']) -> name('variables.index');

Route::get('/variables/nuevo', [VariableController::class, 'create']) -> name('createvariable');

Route::post('/variables', [VariableController::class, 'store']) -> name('storevariable');

Route::get('/variables/{variable}/edit', [VariableController::class, 'edit']) -> name('editvariable');

Route::put('/variables/{variable}', [VariableController::class, 'update']) -> name('updatevariable');

Route::delete('/variables/{variable}', [VariableController::class, 'destroy']) -> name('destroyvariable');



//rutas data

Route::get('/datas', [DataController::class, 'index']) -> name('datas.index');

Route::get('/datas/nuevo', [DataController::class, 'create']) -> name('createdata');

Route::post('/datas', [DataController::class, 'store']) -> name('storedata');

Route::get('/datas/{variable}/edit', [DataController::class, 'edit']) -> name('editdata');

Route::put('/datas/{variable}', [DataController::class, 'update']) -> name('datas.update');

Route::delete('/datas/{variable}', [DataController::class, 'destroy']) -> name('destroydata');



