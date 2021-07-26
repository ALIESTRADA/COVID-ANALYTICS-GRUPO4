<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




/*Route::get('/productos', function (Request $request) {
    return 'Listado de productos';
});


Route::get('/regions', [RegionController::class, 'index']);

        return Region::all();

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource("datas", "DataController");
