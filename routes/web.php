<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiaryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/apiarios', [ApiaryController::class, 'index']) -> name('index');

Route::get('/apiarios/nuevo', [ApiaryController::class, 'create']) -> name('create');

Route::post('/apiarios', [ApiaryController::class, 'store']) -> name('store');

Route::get('/apiarios/{apiario}/edit', [ApiaryController::class, 'edit']) -> name('edit');

Route::put('/apiarios/{apiario}', [ApiaryController::class, 'update']) -> name('update');

Route::delete('/apiarios/{apiario}', [ApiaryController::class, 'destroy']) -> name('destroy');

