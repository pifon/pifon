<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Welcome, ping route
Route::get('/', function (){
    return response()->json([
        "message" => sprintf("Welcome to %s API.", ucfirst(config('app.name'))),
        200
    ]);
});

Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);

Route::get('/elements', function (){
    return \App\Models\Element::all();
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('cuisines', App\Http\Controllers\Cuisine\Catalog::class)->name('cuisines');