<?php

use Illuminate\Support\Facades\Route;

// rupas de navegacion entre vistas
Route::get('/', function () {
    return view('pages.inicio.index');
})->name('inicio.index');
Route::get('/shop', function () {
    return view('pages.shop.index');
})->name('shop.index');
Route::get('/acercade', function () {
    return view('pages.pagina.index');
})->name('acercade.index');
Route::get('/blog', function () {
    return view('pages.blog.index');
})->name('blog.index');
Route::get('/contactos', function () {
    return view('pages.contactos.index');
})->name('contactos.index');
