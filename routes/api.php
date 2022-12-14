<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function(Request $request){
    return "Olá Mundo!!";
});

Route::get('/teste', function(Request $request){
    return "Olá Mundo teste";
});

Route::post('/teste', function(Request $request){
    return "Olá Mundo teste no método POST";
});