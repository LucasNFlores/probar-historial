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

Route::controller(DeviceController::class)->group(function() {

    Route::get('/devices',              'index') -> name('devices.index');
    Route::get('/devices/nuevo',         'create') -> name('createdevice');
    Route::get('/devices/detalles',            'view')->name('devices.show');
    Route::post('/devices',              'store') -> name('storedevice');
    Route::get('/devices/{device}/edit', 'edit') -> name('editdevice');
    Route::put('/devices/{device}',      'update') -> name('updatedevice');
    Route::delete('/devices/{device}',   'destroy') -> name('destroydevice');

});

//Variables
Route::controller(VariableController::class)->group(function() {

    Route::get('/variables',                 'index')-> name('variables.index');
    Route::get('/variables/nuevo',           'create')-> name('createvariable');
    Route::post('/variables',                'store')-> name('storevariable');
    Route::get('/variables/{variable}/edit', 'edit')-> name('editvariable');
    Route::put('/variables/{variable}',      'update')-> name('updatevariable');
    Route::delete('/variables/{variable}',    'destroy')-> name('destroyvariable');

});

//Data
Route::controller(DataController::class)->group(function() {

    Route::get('/datas',                     'index')->name('datas.index');
    Route::get('/datas/{variable}/edit',     'edit')->name('editdata');
    Route::get('/datas/nuevo',               'create')->name('createdata');
    Route::get('/datas/detalles',            'view')->name('datas.show');
    Route::post('/datas',                    'store')->name('storedata');
    Route::put('/datas/{variable}',          'update')->name('datas.update');
    Route::delete('/datas/{variable}',       'destroy')->name('destroydata');

});
