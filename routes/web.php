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

Route::get('/', function () {
    return view('home');
});
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

//ADMIN
Route::group(['middleware'=>['auth','CheckHakAkses:admin,dokter,apoteker,resepsionis']],function(){
    Route::get('/data_dokter','DataDokterController@index');
    Route::post('/data_dokter/create','DataDokterController@create');
    Route::get('/data_dokter/{id}/edit','DataDokterController@edit');
    Route::post('/data_dokter/{id}/update','DataDokterController@update');
    Route::get('/data_dokter/{id}/delete','DataDokterController@delete');
    Route::get('/dashboard','GrafikController@dashboard');
    Route::get('/data_obat','DataObatController@index');
    Route::post('/data_obat/create','DataObatController@create');
    Route::get('/data_obat/{id}/edit','DataObatController@edit');
    Route::post('/data_obat/{id}/update','DataObatController@update');
    Route::get('/data_obat/{id}/delete','DataObatController@delete');
    Route::get('/data_obat/export','DataObatController@export');
    Route::get('/data_obat/exportpdf','DataObatController@exportpdf');
    Route::get('/data_kategori_obat','DataKategoriObatController@index');
    Route::post('/data_kategori_obat/create','DataKategoriObatController@create');
    Route::get('/data_kategori_obat/{id}/edit','DataKategoriObatController@edit');
    Route::post('/data_kategori_obat/{id}/update','DataKategoriObatController@update');
    Route::get('/data_kategori_obat/{id}/delete','DataKategoriObatController@delete');
    Route::get('/data_pasien','DataPasienController@index');
    Route::post('/data_pasien/create','DataPasienController@create');
    Route::get('/data_pasien/{id}/edit','DataPasienController@edit');
    Route::post('/data_pasien/{id}/update','DataPasienController@update');
    Route::get('/data_pasien/{id}/delete','DataPasienController@delete');
    Route::get('/data_pendaftaran','DataPendaftaranController@index');
    Route::post('/data_pendaftaran/create','DataPendaftaranController@create');
    Route::get('/data_pendaftaran/{id}/delete','DataPendaftaranController@delete');
    Route::get('/data_rekamedia','DataRekamediaController@index');
    Route::post('/data_rekamedia/create','DataRekamediaController@create');
    Route::get('/data_rekamedia/{id}/resep','DataRekamediaController@resep');
    Route::get('/data_rekamedia/{id}/rekamedia','DataRekamediaController@rekamedia');
    Route::get('/data_rekamedia/{id}/delete','DataRekamediaController@delete');
    Route::get('/dashboard','GrafikController@dashboard');
    Route::get('/data_resep','DataResepController@index');
    Route::post('/data_resep/create','DataResepController@create');
    Route::get('/data_resep/{id}/transaksi','DataResepController@transaksi');
    Route::post('/data_resep/{id}/update','DataResepController@update');
    Route::get('/data_resep/{id}/delete','DataResepController@delete');
    Route::get('/data_transaksi','DataTransaksiController@index');
    Route::post('/data_transaksi/create','DataTransaksiController@create');
    Route::get('/data_transaksi/{id}/edit','DataTransaksiController@edit');
    Route::post('/data_transaksi/{id}/update','DataTransaksiController@update');
    Route::get('/data_transaksi/{id}/delete','DataTransaksiController@delete');
    Route::get('/data_resepsionis','DataResepsionisController@index');
    Route::post('/data_resepsionis/create','DataResepsionisController@create');
    Route::get('/data_resepsionis/{id}/edit','DataResepsionisController@edit');
    Route::post('/data_resepsionis/{id}/update','DataResepsionisController@update');
    Route::get('/data_resepsionis/{id}/delete','DataResepsionisController@delete');




});
//DOKTER
Route::group(['middleware'=>['auth','CheckHakAkses:admin,dokter,apoteker,resepsionis']],function(){
Route::get('/dashboard','GrafikController@dashboard');
Route::get('/data_pendaftaran','DataPendaftaranController@index');
Route::post('/data_pendaftaran/create','DataPendaftaranController@create');
Route::get('/data_pendaftaran/{id}/delete','DataPendaftaranController@delete');
Route::get('/data_rekamedia','DataRekamediaController@index');
Route::post('/data_rekamedia/create','DataRekamediaController@create');
Route::get('/data_rekamedia/{id}/resep','DataRekamediaController@resep');
Route::get('/data_rekamedia/{id}/rekamedia','DataRekamediaController@rekamedia');
Route::get('/data_rekamedia/{id}/delete','DataRekamediaController@delete');
Route::get('/data_resep','DataResepController@index');
Route::post('/data_resep/create','DataResepController@create');
Route::get('/data_resep/{id}/transaksi','DataResepController@transaksi');
Route::post('/data_resep/{id}/update','DataResepController@update');
Route::get('/data_resep/{id}/delete','DataResepController@delete');
Route::get('/data_obat','DataObatController@index');
});
//APOTEKER
Route::group(['middleware'=>['auth','CheckHakAkses:admin,dokter,apoteker,resepsionis']],function(){
    Route::get('/dashboard','GrafikController@dashboard');
    Route::get('/data_apoteker','DataApotekerController@index');
    Route::post('/data_apoteker/create','DataApotekerController@create');
    Route::get('/data_apoteker/{id}/edit','DataApotekerController@edit');
    Route::post('/data_apoteker/{id}/update','DataApotekerController@update');
    Route::get('/data_apoteker/{id}/delete','DataApotekerController@delete');
    Route::get('/data_transaksi','DataTransaksiController@index');
    Route::post('/data_transaksi/create','DataTransaksiController@create');
    Route::get('/data_transaksi/{id}/edit','DataTransaksiController@edit');
    Route::post('/data_transaksi/{id}/update','DataTransaksiController@update');
    Route::get('/data_transaksi/{id}/delete','DataTransaksiController@delete');
    Route::get('/data_obat','DataObatController@index');
    Route::post('/data_obat/create','DataObatController@create');
    Route::get('/data_obat/{id}/edit','DataObatController@edit');
    Route::post('/data_obat/{id}/update','DataObatController@update');
    Route::get('/data_obat/{id}/delete','DataObatController@delete');
    Route::get('/data_obat/export','DataObatController@export');
    Route::get('/data_obat/exportpdf','DataObatController@exportpdf');
    Route::get('/data_resep','DataResepController@index');
    Route::post('/data_resep/create','DataResepController@create');
    Route::get('/data_resep/{id}/transaksi','DataResepController@transaksi');
    Route::post('/data_resep/{id}/update','DataResepController@update');
    Route::get('/data_resep/{id}/delete','DataResepController@delete');
    Route::get('/data_kategori_obat','DataKategoriObatController@index');
    Route::post('/data_kategori_obat/create','DataKategoriObatController@create');
    Route::get('/data_kategori_obat/{id}/edit','DataKategoriObatController@edit');
    Route::post('/data_kategori_obat/{id}/update','DataKategoriObatController@update');
    Route::get('/data_kategori_obat/{id}/delete','DataKategoriObatController@delete');
    });
///RESEPSIONIS
Route::group(['middleware'=>['auth','CheckHakAkses:admin,dokter,apoteker,resepsionis']],function(){
    Route::get('/data_pasien','DataPasienController@index');
    Route::post('/data_pasien/create','DataPasienController@create');
    Route::get('/data_pasien/{id}/edit','DataPasienController@edit');
    Route::post('/data_pasien/{id}/update','DataPasienController@update');
    Route::get('/data_pasien/{id}/delete','DataPasienController@delete');
    Route::get('/data_pendaftaran','DataPendaftaranController@index');
    Route::post('/data_pendaftaran/create','DataPendaftaranController@create');
    Route::get('/data_pendaftaran/{id}/delete','DataPendaftaranController@delete');
});