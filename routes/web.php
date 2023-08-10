<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiaryController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\VariableController;

Route::get('/', function () {
    return view('welcome');
});
//Apiarios
Route::get('/apiarios', [ApiaryController::class, 'index']) -> name('index');

Route::get('/apiarios/nuevo', [ApiaryController::class, 'create']) -> name('create');

Route::post('/apiarios', [ApiaryController::class, 'store']) -> name('store');

Route::get('/apiarios/{apiario}/edit', [ApiaryController::class, 'edit']) -> name('edit');

Route::put('/apiarios/{apiario}', [ApiaryController::class, 'update']) -> name('update');

Route::delete('/apiarios/{apiario}', [ApiaryController::class, 'destroy']) -> name('destroy');



//Dispositivos

Route::get('/devices', [DeviceController::class, 'index']) -> name('devices.index');

Route::get('/devices/nuevo', [DeviceController::class, 'create']) -> name('createdevice');

Route::post('/devices', [DeviceController::class, 'store']) -> name('store');

Route::get('/devices/{device}/edit', [DeviceController::class, 'edit']) -> name('edit');

Route::put('/devices/{device}', [DeviceController::class, 'update']) -> name('update');

Route::delete('/devices/{device}', [DeviceController::class, 'destroy']) -> name('destroy');


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

Route::post('/variables', [VariableController::class, 'store']) -> name('store');

Route::get('/variables/{variable}/edit', [VariableController::class, 'edit']) -> name('edit');

Route::put('/variables/{variable}', [VariableController::class, 'update']) -> name('update');

Route::delete('/variables/{variable}', [VariableController::class, 'destroy']) -> name('destroy');



