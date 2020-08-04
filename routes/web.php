<?php
use Illuminate\Support\Facades\Route;
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
// Route::get('/check', function(){
//     $check_berkas = DB::table('tb_harapan_kerja')->where('id_pelamar_harapan', 15)->first();
//     return $check_berkas->bukunikah_harapan;

// });

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
    Route::get('/admin/halaman-detail-perusahaan/{id}', 'PerusahaanController@detail_perusahaan');
    Route::post('/admin/tambah-gallery', 'PerusahaanController@store_gal_perusahaan');
    Route::post('/admin/ganti-profile-perusahaan', 'PerusahaanController@change_pro_perusahaan');
    Route::get('/admin/get-kota/{id}', 'PerusahaanController@get_kota');

    //Route Pelamar Regular
    Route::get('/admin/halaman-manajemen-pelamar', 'PelamarController@index');
    Route::get('/admin/halaman-tambah-pelamar', 'PelamarController@tambah_pelamar');
    Route::post('/admin/simpan-data-pelamar', 'PelamarController@store_pelamar');
    Route::get('/admin/halaman-edit-pelamar/{id}', 'PelamarController@edit_pelamar');
    Route::post('/admin/update-data-pelamar', 'PelamarController@update_pelamar');
    Route::post('/admin/delete-data-pelamar', 'PelamarController@delete_pelamar');
    Route::get('/admin/riwayat-lamaran/{id}', 'PelamarController@riwayat_pelamar');
    Route::get('/admin/get-kecamatan/{id}', 'PelamarController@get_kecamatan');
    Route::get('/admin/get-dettingkatpdd/{id}', 'PerusahaanController@get_dettingkatpdd');
    //Route Pelamar Pelaku Usaha
    Route::get('/admin/halaman-manajemen-pelamar-pelaku-usaha', 'PelamarWirausahaController@index');
    Route::get('/admin/halaman-tambah-pelamar-pelaku-usaha', 'PelamarWirausahaController@tambah_pelamar_wirausaha');
    Route::post('/admin/simpan-data-pelamar-pelaku-usaha', 'PelamarWirausahaController@store_pelamar');
    Route::get('/admin/halaman-edit-pelamar-pelaku-usaha/{id}', 'PelamarWirausahaController@edit_pelamar');
    Route::post('/admin/update-data-pelamar-pelaku-usaha', 'PelamarWirausahaController@update_pelamar');
    Route::post('/admin/delete-data-pelamar-pelaku-usaha', 'PelamarWirausahaController@delete_pelamar');
    Route::get('/admin/riwayat-lamaran-pelaku-usaha/{id}', 'PelamarWirausahaController@riwayat_pelamar');

    //Route Lowongan
    Route::get('/admin/halaman-manajemen-lowongan', 'LowonganController@index');
    Route::get('/admin/halaman-tambah-lowongan', 'LowonganController@tambah_lowongan');
    Route::post('/admin/simpan-data-lowongan', 'LowonganController@store_lowongan');
    Route::get('/admin/halaman-edit-lowongan/{id}', 'LowonganController@edit_lowongan');
    Route::post('/admin/update-data-lowongan', 'LowonganController@update_lowongan');
    Route::post('/admin/delete-data-lowongan', 'LowonganController@delete_lowongan');
    Route::get('/admin/lowongan-non-aktif', 'LowonganController@lownonaktif');

    //Route Filter
    Route::get('/admin/lowongan-dalam-negeri/disabilitas', 'LowonganController@dndisabilitas');
    Route::get('/admin/lowongan-dalam-negeri/non-disabilitas', 'LowonganController@dnnondisabilitas');
    Route::get('/admin/lowongan-luar-negeri/disabilitas', 'LowonganController@lndisabilitas');
    Route::get('/admin/lowongan-luar-negeri/non-disabilitas', 'LowonganController@lnnondisabilitas');

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
    Route::post('/admin/ganti-profile-workshop', 'WorkshopController@change_pro_workshop');
    // - Detail Workshop
    Route::get('/admin/halaman-detail-workshop/{id}', 'WorkshopController@detail_workshop')->name('detail_workshop');
    Route::get('/admin/tambah-detail-workshop/{idpl}/{idwr}', 'WorkshopController@tambah_detail_workshop');
    Route::post('/admin/delete-data-detail-workshop', 'WorkshopController@delete_detail_workshop');
    Route::get('/admin/approve-data-workshop/{iddet}/{idwr}', 'WorkshopController@approve_workshop');
    //kompetensi
    Route::get('/admin/halaman-kompetensi-workshop', 'WorkshopController@kompetensi');
    Route::post('/admin/simpan-data-kompetensi', 'WorkshopController@store_kompetensi');
    Route::post('/admin/update-data-kompetensi', 'WorkshopController@update_kompetensi');
    Route::post('/admin/delete-data-kompetensi', 'WorkshopController@delete_kompetensi');
});

//Check Login Perusahaan
Route::group(['middleware' => 'perusahaansession'], function () {

    //Route Khusus Perusahaan
    Route::get('/perusahaan/halaman-profile-perusahaan', 'PerusahaanController@profile'); //
    Route::get('/perusahaan/halaman-edit-perusahaan/{id}', 'PerusahaanController@edit_perusahaan'); //
    Route::post('/perusahaan/update-data-perusahaan', 'PerusahaanController@update_perusahaan');
    Route::get('/perusahaan/halaman-manajemen-lowongan', 'PerusahaanController@dashboard'); //
    Route::get('/perusahaan/halaman-tambah-lowongan', 'PerusahaanController@tambah_lowongan'); //
    Route::post('/perusahaan/simpan-data-lowongan', 'PerusahaanController@store_lowongan'); //
    Route::get('/perusahaan/halaman-edit-lowongan/{id}', 'PerusahaanController@edit_lowongan'); //
    Route::post('/perusahaan/update-data-lowongan', 'PerusahaanController@update_lowongan'); //
    Route::post('/perusahaan/delete-data-lowongan', 'PerusahaanController@delete_lowongan'); //
    // - Detail Lowongan
    Route::get('/perusahaan/halaman-detail-lowongan/{id}/{per}', 'PerusahaanController@detail_lowongan')->name('perusahaan_detail_lowongan'); //
    Route::get('/perusahaan/tambah-pelamar-lowongan/{low}/{pl}/{per}', 'PerusahaanController@tambah_detail_lowongan'); //
    Route::post('/perusahaan/delete-data-detail-lowongan', 'PerusahaanController@delete_detail_lowongan');
});

Route::get('/halaman-tidak-ditemukan', function() {
    return view('admin.error');
});

//Route Login Admin
Route::get('/', 'AdminController@login')->name('login');
Route::post('/post-login', 'AdminController@postLogin');
Route::get('/logout', 'AdminController@logout');

//Route Login Perusahaan
Route::get('/halaman-daftar-perusahaan', 'AdminController@daftar_perusahaan');
Route::get('/get-kota/{id}', 'PerusahaanController@get_kota');
Route::get('/get-kecamatan/{id}', 'PelamarController@get_kecamatan');
Route::post('/post-perusahaan', 'AdminController@postPerusahaan');
Route::post('/save-perusahaan', 'AdminController@storePerusahaan');
