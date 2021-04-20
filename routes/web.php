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
Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/slide', function () {
    return view('slide');
});
Route::get('/Admin', function () {
    return view('Admin_beranda');
});
Route::get('/login_user', function () {
    return view('vlogin');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/jurusan', function () {
    return view('jurusan');
});
Route::get('/organisasi', function () {
    return view('organisasi');
});
Route::get('/input', function () {
    return view('inputan');
});

Route::get('/Csekolah','Csekolah@beranda');
Route::get('/Csekolah', 'Csekolah@inputan');
Route::post('/Csekolah', 'Csekolah@add');
Route::post('/Csekolah', 'Csekolah@siswa');