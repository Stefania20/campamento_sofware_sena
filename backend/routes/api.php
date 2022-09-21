<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\CourseController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();
//});

// Primera ruta REST
Route::get('prueba', function(){
    echo "hola";
});

//Vincular el controlador bootcamp a sus respecgtivas rutas
Route::apiResource('bootcamps', BootcampController::class);
Route::apiResource('courses', CourseController::class);