<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/produk', 'ProdukController@indexapi');
Route::post('/produk/create', 'ProdukController@createapi');
Route::get('/produk/{part_number}', 'ProdukController@showapi');
Route::put('/produk/{part_number}/update', 'ProdukController@updateapi');
Route::delete('/produk/{part_number}/delete', 'ProdukController@deleteapi');
