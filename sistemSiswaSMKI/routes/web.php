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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'authController@login');
Route::post('/Postlogin', 'authController@postlogin');
Route::get('/Logout', 'authController@logout');


Route::group(['middleware' => ['auth', 'checkrole:admin']], function(){
    // SiswaRoute
    Route::get('/Siswa', 'siswaController@index');
    Route::get('/Siswa/create', 'siswaController@create');
    Route::post('/Siswa', 'siswaController@store');
    Route::get('/Siswa/{id}/edit', 'siswaController@edit');
    Route::post('/Siswa/{id}/edit', 'siswaController@update');
    Route::post('/Siswa/{id}/delete', 'siswaController@delete');
    Route::get('/Siswa/{id}/myprofile', 'siswaController@myprofile');
    Route::post('/Siswa/{id}/nilai', 'siswaController@nilai');

    // KelasRoute
    Route::get('/Kelas', 'kelasController@index');
    Route::post('/Kelas/create', 'kelasController@create');
    Route::get('/Kelas/{id}/show', 'kelasController@show');
    
    // GuruRoute
    Route::get('/Guru', 'guruController@index');
    Route::get('/Guru/create', 'guruController@create');
    Route::post('/Guru', 'guruController@store');
    Route::get('/Guru/{id}/edit', 'guruController@edit');
    Route::post('/Guru/{id}/edit', 'guruController@update');
    Route::get('/Guru/{id}/profile', 'guruController@profile');
    
    //MapelRoute
    Route::get('/Mapel', 'mapelController@index');
    Route::get('/Mapel/create', 'mapelController@create');
    Route::post('/Mapel', 'mapelController@store');
    
    // AbsenRoute
    Route::get('/Absensi', 'absensiController@index');
    Route::post('/Absensi/create','absensiController@create');

});

Route::group(['middleware' => ['auth', 'checkrole:admin,siswa']], function(){
    Route::get('/Dashboard', 'dashboardController@index');
});
