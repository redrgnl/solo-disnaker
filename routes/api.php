<?php
use Illuminate\Support\Facades\Route;
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

//route user pelamar
Route::get('/api-service/pelamar/all', 'ApiController@pelamar');
Route::get('/api-service/pelamar/{id}', 'ApiController@pelamar_id');
Route::post('/api-service/pelamar/sign-up', 'ApiController@pelamar_signup'); //plain sign up
Route::post('/api-service/pelamar-workshop/sign-up', 'ApiController@pelamar_signup_workshop'); //with workshop
Route::get('/api-service/pelamar/workshop/{idworkshop}/{idpelamar}', 'ApiController@pelamar_workshop');
Route::get('/api-service/pelamar/perusahaan/{idlowongan}/{idpelamar}', 'ApiController@pelamar_perusahaan');

Route::get('/api-service/tingkat-pendidikan/all', 'ApiController@tingkatPendidikan');
Route::get('/api-service/tingkat-pendidikan/{id}', 'ApiController@tingkatPendidikanId');
Route::get('/api-service/detail-tingkat-pendidikan/all', 'ApiController@detailTingkatPendidikan');
Route::get('/api-service/detail-tingkat-pendidikan/{id}', 'ApiController@detailTingkatPendidikanId');

Route::get('/api-service/provinsi/all', 'ApiController@provinsi');
Route::get('/api-service/provinsi/{id}', 'ApiController@provinsiId');
Route::get('/api-service/kota/all', 'ApiController@kota');
Route::get('/api-service/kota/{id}', 'ApiController@kotaId');
Route::get('/api-service/kecamatan/all', 'ApiController@kecamatan');
Route::get('/api-service/kecamatan/{id}', 'ApiController@kecamatanId');
Route::get('/api-service/provinsi-kabupaten/{id}', 'ApiController@provKabupaten');
Route::get('/api-service/kabupaten-kecamatan/{id}', 'ApiController@kabKecamatan');

//route perusahaan
Route::post('/api-service/perusahaan/sign-up', 'ApiController@perusahaan_signup');

//route workshop
Route::get('/api-service/workshop/all', 'ApiController@workshops');

//route lowongan
Route::get('/api-service/lowongan/all', 'ApiController@lowongan');
