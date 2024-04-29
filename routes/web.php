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
