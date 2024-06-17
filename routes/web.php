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
Route::get('/Detail-berita', function () {
    return view('/detail_berita');
});
Route::get('/Detail-pelatihan', function () {
    return view('/detail_pelatihan');
});
Route::get('/Detail-about', function () {
    return view('/detail_about');
});
Route::get('/Detail-kegiatan', function () {
    return view('/detail_kegiatan');
});
Route::get('/Detail-konsultasi', function () {
    return view('/detail_konsultasi');
});
Route::get('/Detail-riset', function () {
    return view('/detail_riset');
});
Route::get('/Detail-publikasi', function () {
    return view('/detail_publikasi');
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
Route::get('/admin-company-profile', function () {
    return view('/Admin.admin-company-profile');
});
Route::get('/admin-tag', function () {
    return view('/Admin.admin-tag');
});

// create
Route::get('/admin-akademi.create', function () {
    return view('/Admin.CRUD.create-akademi');
});
Route::get('/admin-news.create', function () {
    return view('/Admin.CRUD.create-news');
});
Route::get('/admin-user.create', function () {
    return view('/Admin.CRUD.create-user');
});
Route::get('/admin-kegiatan.create', function () {
    return view('/Admin.CRUD.create-kegiatan');
});
Route::get('/admin-pelatihan.create', function () {
    return view('/Admin.CRUD.create-pelatihan');
});
Route::get('/admin-publikasi.create', function () {
    return view('/Admin.CRUD.create-publikasi');
});
Route::get('/admin-subscriber.create', function () {
    return view('/Admin.CRUD.create-subscriber');
});
Route::get('/admin-riset.create', function () {
    return view('/Admin.CRUD.create-riset');
});
Route::get('/admin-konsultasi.create', function () {
    return view('/Admin.CRUD.create-konsultasi');
});

// edit
Route::get('/admin-akademi.edit', function () {
    return view('/Admin.CRUD.edit-akademi');
});
Route::get('/admin-news.edit', function () {
    return view('/Admin.CRUD.edit-news');
});
Route::get('/admin-user.edit', function () {
    return view('/Admin.CRUD.edit-user');
});
Route::get('/admin-kegiatan.edit', function () {
    return view('/Admin.CRUD.edit-kegiatan');
});
Route::get('/admin-pelatihan.edit', function () {
    return view('/Admin.CRUD.edit-pelatihan');
});
Route::get('/admin-publikasi.edit', function () {
    return view('/Admin.CRUD.edit-publikasi');
});
Route::get('/admin-subscriber.edit', function () {
    return view('/Admin.CRUD.edit-subscriber');
});
Route::get('/admin-riset.edit', function () {
    return view('/Admin.CRUD.edit-riset');
});
Route::get('/admin-konsultasi.edit', function () {
    return view('/Admin.CRUD.edit-konsultasi');
});
