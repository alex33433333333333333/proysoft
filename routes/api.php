<?php

use App\Http\Controllers\RutasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {
    Route::get('mostrar', [RutasController::class, 'index'])-> name('mostrar');
    Route::get('aaa', function () {
        return "asdaaaaaa";
    })-> name('aaa');
/*
    Route::post('login', [ApiloginController::class, 'login'])-> name('login');
    Route::post('login1', [ApiloginController::class, 'login1'])-> name('login1');
    Route::post('logout', [ApiloginController::class, 'logout'])-> name('logout');
    Route::post('refresh', [ApiloginController::class, 'refresh'])-> name('refresh');
    Route::post('me', [ApiloginController::class, 'me'])-> name('me');
    Route::post('register', [ApiloginController::class, 'register'])-> name('register');
    Route::post('registropaciente', [ApiloginController::class, 'registropaciente'])-> name('registropaciente');
    Route::post('registrocita', [ApiloginController::class, 'registrocita'])-> name('registrocita');
    Route::get('mostrarcita/{email}', [ApiloginController::class, 'mostrarcita'])-> name('mostrarcita');
    Route::get('mostrarcitas', [ApiloginController::class, 'mostrarcitas'])-> name('mostrarcitas');
    Route::get('mostrarespecialidad', [ApiloginController::class, 'mostrarespecialidad'])-> name('mostrarespecialidad');
    Route::get('mostrarcita/{email}', [ApiloginController::class, 'mostrarcita'])-> name('mostrarcita');
    Route::get('mostrarusuario/{email}', [ApiloginController::class, 'mostrarusuario'])-> name('mostrarusuario');
    Route::get('mostrarusuario1/{email}', [ApiloginController::class, 'mostrarusuario1'])-> name('mostrarusuario1');

    Route::put('editarusuario/{email}', [ApiloginController::class, 'editarusuario'])-> name('editarusuario');
    Route::put('updateusuario/{email}', [ApiloginController::class, 'updateusuario'])-> name('updateusuario');
    Route::put('updateusuario1/{email}', [ApiloginController::class, 'updateusuario1'])-> name('updateusuario1');

    






*/
});