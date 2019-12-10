<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//check login admin
Route::group(['middleware' => 'usersession'], function () {

//Route Admin
Route::get('/admin/halaman-dashboard-admin', 'AdminController@index');
    
//check superadmin
Route::group(['middleware' => 'supersession'], function () {

//Route User
Route::get('/admin/halaman-manajemen-user', 'UserController@index');
Route::get('/admin/halaman-tambah-pengguna-baru', 'UserController@tambah_pengguna');
Route::post('/admin/simpan-data-pengguna', 'UserController@store_pengguna');
Route::get('/admin/halaman-edit-pengguna/{id}', 'UserController@edit_pengguna');
Route::post('/admin/update-data-pengguna', 'UserController@update_pengguna');
Route::get('/admin/delete-data-pengguna/{id}', 'UserController@delete_pengguna');

//Route Role
Route::get('/admin/halaman-manajemen-role', 'RoleController@index');
Route::get('/admin/halaman-tambah-role', 'RoleController@tambah_role');
Route::post('/admin/simpan-data-role', 'RoleController@store_role');
Route::get('/admin/halaman-edit-role/{id}', 'RoleController@edit_role');
Route::post('/admin/update-data-role', 'RoleController@update_role');
Route::get('/admin/update-status-role/{id}/{status}', 'RoleController@update_status_role');
});

//Route Perusahaan
Route::get('/admin/halaman-manajemen-perusahaan', 'PerusahaanController@index');
Route::get('/admin/halaman-tambah-perusahaan', 'PerusahaanController@tambah_perusahaan');
Route::post('/admin/simpan-data-perusahaan', 'PerusahaanController@store_perusahaan');
Route::get('/admin/halaman-edit-perusahaan/{id}', 'PerusahaanController@edit_perusahaan');
Route::post('/admin/update-data-perusahaan', 'PerusahaanController@update_perusahaan');
Route::post('/admin/delete-data-perusahaan', 'PerusahaanController@delete_perusahaan');

//Route Pelamar
Route::get('/admin/halaman-manajemen-pelamar', 'PelamarController@index');
Route::get('/admin/halaman-tambah-pelamar', 'PelamarController@tambah_pelamar');
Route::post('/admin/simpan-data-pelamar', 'PelamarController@store_pelamar');
Route::get('/admin/halaman-edit-pelamar/{id}', 'PelamarController@edit_pelamar');
Route::post('/admin/update-data-pelamar', 'PelamarController@update_pelamar');
Route::post('/admin/delete-data-pelamar', 'PelamarController@delete_pelamar');

//Route Lowongan
Route::get('/admin/halaman-manajemen-lowongan', 'LowonganController@index');
Route::get('/admin/halaman-tambah-lowongan', 'LowonganController@tambah_lowongan');
Route::post('/admin/simpan-data-lowongan', 'LowonganController@store_lowongan');
Route::get('/admin/halaman-edit-lowongan/{id}', 'LowonganController@edit_lowongan');
Route::post('/admin/update-data-lowongan', 'LowonganController@update_lowongan');
Route::post('/admin/delete-data-lowongan', 'LowonganController@delete_lowongan');
// - Detail Lowongan
Route::get('/admin/halaman-detail-lowongan/{id}/{per}', 'LowonganController@detail_lowongan')->name('detail_lowongan');
Route::get('/admin/tambah-pelamar-lowongan/{low}/{pl}/{per}', 'LowonganController@tambah_detail_lowongan');
Route::post('/admin/delete-data-detail-lowongan', 'LowonganController@delete_detail_lowongan');

//Route Workshop
Route::get('/admin/halaman-manajemen-workshop', 'WorkshopController@index');
Route::get('/admin/halaman-tambah-workshop', 'WorkshopController@tambah_workshop');
Route::post('/admin/simpan-data-workshop', 'WorkshopController@store_workshop');
Route::get('/admin/halaman-edit-workshop/{id}', 'WorkshopController@edit_workshop');
Route::post('/admin/update-data-workshop', 'WorkshopController@update_workshop');
Route::post('/admin/delete-data-workshop', 'WorkshopController@delete_workshop');
// - Detail Workshop
Route::get('/admin/halaman-detail-workshop/{id}', 'WorkshopController@detail_workshop')->name('detail_workshop');
Route::get('/admin/tambah-detail-workshop/{idpl}/{idwr}', 'WorkshopController@tambah_detail_workshop');
Route::post('/admin/delete-data-detail-workshop', 'WorkshopController@delete_detail_workshop');
});

//Check Login Perusahaan
Route::group(['middleware' => 'perusahaansession'], function () {

//Route Khusus Perusahaan
Route::get('/perusahaan/halaman-manajemen-lowongan', 'PerusahaanController@dashboard');//
Route::get('/perusahaan/halaman-tambah-lowongan', 'PerusahaanController@tambah_lowongan');//
Route::post('/perusahaan/simpan-data-lowongan', 'PerusahaanController@store_lowongan');//
Route::get('/perusahaan/halaman-edit-lowongan/{id}', 'PerusahaanController@edit_lowongan');//
Route::post('/perusahaan/update-data-lowongan', 'PerusahaanController@update_lowongan');//
Route::post('/perusahaan/delete-data-lowongan', 'PerusahaanController@delete_lowongan');//
// - Detail Lowongan
Route::get('/perusahaan/halaman-detail-lowongan/{id}/{per}', 'PerusahaanController@detail_lowongan')->name('perusahaan_detail_lowongan');//
Route::get('/perusahaan/tambah-pelamar-lowongan/{low}/{pl}/{per}', 'PerusahaanController@tambah_detail_lowongan');//
Route::post('/perusahaan/delete-data-detail-lowongan', 'PerusahaanController@delete_detail_lowongan');
});

//Route Login
Route::get('/', 'AdminController@login')->name('login');
Route::post('/post-login', 'AdminController@postLogin');
Route::get('/logout', 'AdminController@logout');