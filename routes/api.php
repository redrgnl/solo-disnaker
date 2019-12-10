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

//route user
//Route::get('/api-service/pengguna/all', 'ApiController@users');
//Route::get('/api-service/pengguna/{id}', 'ApiController@users_id');
//Route::post('/api-service/pengguna/sign-up', 'ApiController@insert_users');
//Route::post('/api-service/pengguna/role', 'ApiController@role_users');

//route user pelamar
Route::get('/api-service/pelamar/all', 'ApiController@pelamar');
Route::get('/api-service/pelamar/{id}', 'ApiController@pelamar_id');
Route::post('/api-service/pelamar/sign-up', 'ApiController@pelamar_signup');
Route::get('/api-service/pelamar/workshop/{idworkshop}/{idpelamar}', 'ApiController@pelamar_workshop');
Route::get('/api-service/pelamar/perusahaan/{idlowongan}/{idpelamar}', 'ApiController@pelamar_perusahaan');

//route perusahaan
Route::post('/api-service/perusahaan/sign-up', 'ApiController@perusahaan_signup');

//route workshop
Route::get('/api-service/workshop/all', 'ApiController@workshops');

//route lowongan
Route::get('/api-service/lowongans/all', 'ApiController@lowongans');