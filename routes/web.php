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

Route::get('', function () {
    return view('/layouts/main');
});

// Rotas Principais
Route::get('/paginas/mainds', function () {
    return view('/paginas/mainds');
});

Route::get('/paginasti/mainti', function () {
    return view('/paginasti/mainti');
});

// Rotas da Rota de DESENVOLVIMENTO DE SISTEMAS

Route::get('/paginas/home', function () {
    return view('/paginas/home');
});

Route::get('/paginas/curso', function () {
    return view('/paginas/curso');
});

Route::get('/paginas/ementa', function () {
    return view('/paginas/ementa');
});

Route::get('/paginas/galeria', function () {
    return view('/paginas/galeria');
});

Route::get('/paginas/contato', function () {
    return view('/paginas/contato');
});

// Rotas da Rota de TÉCNICO DE INFORMÁTICA

Route::get('/paginasti/hometi', function () {
    return view('/paginasti/hometi');
});

Route::get('/paginasti/cursoti', function () {
    return view('/paginasti/cursoti');
});

Route::get('/paginasti/ementati', function () {
    return view('/paginasti/ementati');
});

Route::get('/paginasti/galeriati', function () {
    return view('/paginasti/galeriati');
});

Route::get('/paginasti/contatoti', function () {
    return view('/paginasti/contatoti');
});


