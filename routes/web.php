<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/', 'UserController@home');
Route::get('/provider', 'UserController@provider');
Route::get('/testing', 'UserController@testing');
Route::post('/testing', 'UserController@testingpost');
Route::get('/about', 'UserController@about');
Route::get('/contact', 'UserController@contact');


// Alternatif-admin
Route::get('/alternatif', 'AlternatifController@index')->name('index-alternatif');
Route::get('/alternatif/create', 'AlternatifController@create')->name('new-alt');
Route::get('/alternatif/edit/{alternatif}', 'AlternatifController@edit')->name('edit-alt');
Route::post('/alternatif', 'AlternatifController@store')->name('post-alternatif');
Route::patch('/alternatif/{alternatif}', 'AlternatifController@update')->name('update-alt');
Route::get('/alternatif/delete/{id}', 'AlternatifController@destroy')->name('del-alt');

// Kriteria-admin
Route::get('/kriteria', 'KriteriaController@index')->name('index-kriteria');
Route::get('/kriteria/create', 'KriteriaController@create')->name('new-krit');
Route::get('/kriteria/edit/{kriteria}', 'KriteriaController@edit')->name('edit-krit');
Route::post('/kriteria', 'KriteriaController@store')->name('post-kriteria');
Route::post('/kriteria/{kriteria}', 'KriteriaController@update')->name('update-krit');
Route::get('/kriteria/delete/{id}', 'KriteriaController@destroy')->name('del-krit');

// Nilai Matriks
Route::get('/matriks', 'MatriksController@index')->name('index-matriks');
Route::get('/matriks/create', 'MatriksController@create')->name('new-matriks');
Route::get('/matriks/edit/{matriks}', 'MatriksController@edit')->name('edit-matriks');
Route::post('/matriks', 'MatriksController@store')->name('post-matriks');
Route::post('/matriks/{matriks}', 'MatriksController@update')->name('update-matriks');
Route::get('/matriks/delete/{id}', 'MatriksController@destroy')->name('del-matriks');

// login and register Admin
Route::get('/admin', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/profile', [AuthController::class, 'edit'])->name('edit-user');
Route::post('/profile', [AuthController::class, 'update'])->name('update-user');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('index', [AdminController::class, 'index'])->name('index');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});