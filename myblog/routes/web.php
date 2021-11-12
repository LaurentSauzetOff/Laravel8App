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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'GET route !';
});

Route::prefix('admin')->group(function () {
    Route::get('/user', function () {
        return 'Ma user list';
    });
    Route::get('/articles', function () {
        return 'Ma articles list';
    });

    Route::get('/categories', function () {
        return 'Ma categorie list ';
    });
});
