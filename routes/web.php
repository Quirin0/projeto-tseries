<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Series;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', function(){
    return Series::index();
});

Route::controller(Series::class)->group(function(){
    Route::get('/series/criar', 'create');
    Route::post('/series/salvar', 'store');
    Route::get('/series/apagar', 'delete');
});