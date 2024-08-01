<?php

use App\Http\Controllers\Api\SourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/dashboard',[SourceController::class,'createAvailableSource'])->middleware('Validation:Source');
