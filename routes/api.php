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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Get Data User
Route::get("/get_user", "UserController@index");
//Search Data User
Route::resource('data', UserController::class);
Route::get("/get_user/{id}", "UserController@show");
//Insert Data
Route::post("/insert_bandara", "BandaraController@insert");
Route::post("/insert_pesawat", "PesawatController@insert");
Route::post("/insert_user", "UserController@insert");
//Update Data
Route::put("/update_bandara/{id}", "BandaraController@update");
//Delete Data
Route::delete("/delete_bandara/{id}", "BandaraController@delete");
