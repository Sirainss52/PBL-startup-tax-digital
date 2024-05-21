<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/About', function () {
    return view('About');
});
Route::get('/Contact', function () {
    return view('Contact');

});
Route::get('/Akademi', function () {
    return view('Akademi');
});
Route::get('/Konsultasi', function () {
    return view('Konsultasi');
});
Route::get('/Publikasi', function () {
    return view('Publikasi');
});
Route::get('/Berita', function () {
    return view('Berita');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/Riset', function () {
    return view('/Riset');
});


Route::get('/admin-index', function () {
    return view('Admin.admin-index');
});
Route::get('/admin-akademi', function () {
    return view('Admin.admin-akademi');
});
Route::get('/admin-user', function () {
    return view('Admin.admin-user');
});
Route::get('/admin-konsultasi', function () {
    return view('Admin.admin-konsultasi');
});
Route::get('/admin-publikasi', function () {
    return view('Admin.admin-publikasi');
});
Route::get('/admin-news', function () {
    return view('Admin.admin-news');
});
Route::get('/admin-login', function () {
    return view('Admin.admin-login');
});
Route::get('/admin-riset', function () {
    return view('/Admin.admin-riset');
});
Route::get('/admin-subscribe', function () {
    return view('/Admin.admin-subscriber');
});
Route::get('/admin-question', function () {
    return view('/Admin.admin-question');
});
Route::get('/admin-pelatihan', function () {
    return view('/Admin.admin-pelatihan');
});
Route::get('/admin-kegiatan', function () {
    return view('/Admin.admin-kegiatan');
});
