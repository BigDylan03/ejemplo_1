<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cursos', function(){
    return view('cursos');
})->name('cursos');

Route::get('/contacto', function(){
    return view('contacto');
})->name('contacto');
