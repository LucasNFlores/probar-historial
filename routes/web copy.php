<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApiaryController;
use App\Http\Controllers\HivesController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| RUTAS DE AUTENTICACIÓN Y LOGUEO
|--------------------------------------------------------------------------
*/


Route::get('/', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::get('/dashboard', [HivesController::class, 'dashboard'])
 ->middleware(['auth', 'verified'])
 ->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


        //***********************Apiarios***************************** */
        //Agrupa la ruta
        Route::prefix('admin/apiaries/')->group(function () {
            //Agrupa el controlador
            Route::controller(ApiaryController::class)->group(function() {
                //Listado
                Route::get('',              'index') -> name('apiaries.index');
                //Crear
                Route::get('create',        'create') -> name('apiaries.create');
                //Guardar
                Route::post('',             'store') -> name('apiaries.store');
                //Mostrar
                Route::get('{apiary}',      'show') -> name('apiaries.show');
                //Editar
                Route::get('{apiary}/edit', 'edit') -> name('apiaries.edit');
                //Actualizar
                Route::put('{apiary}',      'update') -> name('apiaries.update');
                //Eliminar
                Route::delete('{apiary}',   'destroy') -> name('apiaries.destroy');
            });
        });

        //***********************Colmenas***************************** */
        //Agrupa la ruta
        Route::prefix('admin/hives/')->group(function () {
            //Agrupa el controlador
            Route::controller(HiveController::class)->group(function() {
                //Listado
                Route::get('',              'index') -> name('hives.index');
                //Crear
                Route::get('create',        'create') -> name('hives.create');
                //Guardar
                Route::post('',             'store') -> name('hives.store');
                //Mostrar
                Route::get('{hive}',      'show') -> name('hives.show');
                //Editar
                Route::get('{hive}/edit', 'edit') -> name('hives.edit');
                //Actualizar
                Route::put('{hive}',      'update') -> name('hives.update');
                //Eliminar
                Route::delete('{hive}',   'destroy') -> name('hives.destroy');
            });
        });

        //***********************Dispositivos***************************** */
        //Agrupa la ruta
        Route::prefix('admin/devices/')->group(function () {
            //Agrupa el controlador
            Route::controller(DeviceController::class)->group(function() {
                //Listado
                Route::get('',              'index') -> name('devices.index');
                //Crear
                Route::get('create',        'create') -> name('devices.create');
                //Guardar
                Route::post('',             'store') -> name('devices.store');
                //Mostrar
                Route::get('{device}',      'show') -> name('devices.show');
                //Editar
                Route::get('{device}/edit', 'edit') -> name('devices.edit');
                //Actualizar
                Route::put('{device}',      'update') -> name('devices.update');
                //Eliminar
                Route::delete('{device}',   'destroy') -> name('devices.destroy');
            });
        });

        //***********************Variables***************************** */
        //Agrupa la ruta
        Route::prefix('admin/variables/')->group(function () {
            //Agrupa el controlador
            Route::controller(VariableController::class)->group(function() {
                //Listado
                Route::get('',              'index') -> name('variables.index');
                //Crear
                Route::get('create',        'create') -> name('variables.create');
                //Guardar
                Route::post('',             'store') -> name('variables.store');
                //Mostrar
                Route::get('{variable}',      'show') -> name('variables.show');
                //Editar
                Route::get('{variable}/edit', 'edit') -> name('variables.edit');
                //Actualizar
                Route::put('{variable}',      'update') -> name('variables.update');
                //Eliminar
                Route::delete('{variable}',   'destroy') -> name('variables.destroy');
            });
        });

        //***********************Datos***************************** */
        //Agrupa la ruta
        Route::prefix('admin/data/')->group(function () {
            //Agrupa el controlador
            Route::controller(DataController::class)->group(function() {
                //Listado
                Route::get('',              'index') -> name('data.index');
                //Crear
                Route::get('create',        'create') -> name('data.create');
                //Guardar
                Route::post('',             'store') -> name('data.store');
                //Mostrar
                Route::get('{data}',      'show') -> name('data.show');
                //Editar
                Route::get('{data}/edit', 'edit') -> name('data.edit');
                //Actualizar
                Route::put('{data}',      'update') -> name('data.update');
                //Eliminar
                Route::delete('{data}',   'destroy') -> name('data.destroy');
            });
        });
    });

require __DIR__.'/auth.php';


