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
//Laravel
Route::get('/', function () {
    return view('welcome');
});

//bootstrap home
Route::get('/home1', function(){
   return view('home1');
});

//ekstrakulikuler
Route::get('/ekstrakulikuler', 'ekstrakulikulerController@ekstrakulikuler');

//prestasi
Route::get('/prestasi', 'prestasiController@prestasi');

//kelas
Route::get('/kelas', 'kelasController@kelas');

//tunjangan
Route::get('/tunjangan', 'tunjanganController@tunjangan');

//DATABASE GURU
Route::get('/guru', 'guruController@guru');

//menambah data
Route::get('/guru/addguru', 'guruController@addguru');
Route::post('/guru', 'guruController@createguru');

//menghapus data
Route::get('/guru/delete/{id}', 'guruController@delete');

//mengedit data
Route::get('/guru/editguru/{id}', 'guruController@editguru');
Route::post('/guru/updateguru/{id}', 'guruController@updateguru');

//DATABASE SISWA
Route::get('/siswa', 'siswaController@siswa');

//menambah data
Route::get('/siswa/addsiswa', 'siswaController@addsiswa');
Route::post('/siswa', 'siswaController@createsiswa');

//menghapus data
Route::get('/siswa/delete/{id}', 'siswaController@delete');

//mengedit data
Route::get('/siswa/editsiswa/{id}', 'siswaController@editsiswa');
Route::post('/siswa/updatesiswa/{id}', 'siswaController@updatesiswa');

//DATABASE RAPORT
Route::get('/rapot', 'rapotController@rapot');

//menambah data
Route::get('/rapot/addrapot', 'rapotController@addrapot');
Route::post('/rapot', 'rapotController@createrapot');

//menghapus data
Route::get('/rapot/delete/{id}', 'rapotController@delete');

//mengedit data
Route::get('/rapot/editrapot/{id}', 'rapotController@editrapot');
Route::post('/rapot/updaterapot/{id}', 'rapotController@updaterapot');

//LOGIN
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//CETAK PDF RAPORT
Route::get('/rapot/cetakRapot_pdf', 'rapotController@cetakRapot_pdf');

//CETAK PDF FOTOGURU
Route::get('/fotoguru/cetakFoto_pdf', 'fotoguruController@cetakFoto_pdf');
Route::post('/fotoguru/cetakFoto_pdf', 'fotoguruController@cetakFoto_pdf');

//DATABASE FOTO GURU ADMIN
Route::get('/fotoguru', 'fotoguruController@fotoguru');

//DATABASE FOTO GURU USER
Route::get('/fotoguru1', 'fotoguru1Controller@fotoguru1');


//menambah data
Route::get('/fotoguru/addfotoguru', 'fotoguruController@addfotoguru');
Route::post('/fotoguru', 'fotoguruController@createfotoguru');

//menghapus data
Route::get('/fotoguru/delete/{id}', 'fotoguruController@delete');

//mengedit data
Route::get('/fotoguru/editfotoguru/{id}', 'fotoguruController@editfotoguru');
Route::post('/fotoguru/updatefotoguru/{id}', 'fotoguruController@updatefotoguru');

