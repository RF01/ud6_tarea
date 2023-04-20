<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/','App\Http\Controllers\PagesController@inicio');

// Route::get('producto', function () {
//     return view('producto_vista');
// })->name('producto_ruta');

Route::get('producto','App\Http\Controllers\PagesController@producto')->name('producto_ruta');

// Route::get('intro', function () {
//     return view('intro_vista');
// })->name('intro_ruta');

Route::get('/','App\Http\Controllers\PagesController@intro')->name('intro_ruta');

Route::post('guardar','App\Http\Controllers\PagesController@guardar')->name('guardar_ruta');

Route::get('cesta','App\Http\Controllers\PagesController@cesta')->name('cesta_ruta');

Route::post('guardar_cesta','App\Http\Controllers\PagesController@guardarCesta')->name('guardar_cesta_ruta');

 Route::post('cantidad','App\Http\Controllers\PagesController@anadirCantidad')->name('cantidad_ruta');

 Route::get('buscar','App\Http\Controllers\PagesController@buscar')->name('buscar_ruta');