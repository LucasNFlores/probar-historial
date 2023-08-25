<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiaryController;
use App\Http\Controllers\HivesController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\VariableController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/template', function () {
    return view('template');
});
Route::get('/template2', function () {
    return view('template2');
});






//Apiarios
Route::get('/apiaries', [ApiaryController::class, 'index']) -> name('apiaries.index');

Route::get('/apiaries/new', [ApiaryController::class, 'create']) -> name('apiaries.create');

Route::post('/apiaries', [ApiaryController::class, 'store']) -> name('apiaries.store');

Route::get('/apiaries/{apiary}/edit', [ApiaryController::class, 'edit']) -> name('apiaries.edit');

Route::put('/apiaries/{apiary}', [ApiaryController::class, 'update']) -> name('apiaries.update');

Route::delete('/apiaries/{apiary}', [ApiaryController::class, 'destroy']) -> name('apiaries.destroy');


//Colmenas
Route::get('/hives', [HivesController::class, 'index']) -> name('hives.index');

Route::get('/hives/new', [HivesController::class, 'create']) -> name('hives.create');

Route::post('/hives', [HivesController::class, 'store']) -> name('hives.store');

Route::get('/hives/{hive}/edit', [HivesController::class, 'edit']) -> name('hives.edit');

Route::put('/hives/{hive}', [HivesController::class, 'update']) -> name('hives.update');

Route::delete('/hives/{hive}', [HivesController::class, 'destroy']) -> name('hives.destroy');



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



