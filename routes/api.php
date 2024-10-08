<?php

use App\Http\Controllers\ItemApiController;
use App\Http\Controllers\CategoryApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('item', function () {
//      return response()->json('Hello World');
// });

// Route::get('/category',[CategoryApiController::class,'index']);
// Route::post('/category',[CategoryApiController::class,'store']);
// Route::delete('/category/{id}',[CategoryApiController::class,'destroy']);
// Route::put('/category/{id}',[CategoryApiController::class,'update']);

Route::apiResource('/category',CategoryApiController::class);
Route::apiResource('/item',ItemApiController::class);
