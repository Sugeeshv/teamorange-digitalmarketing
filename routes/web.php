<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\web\HomesController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\admin\ContactsController;
use App\Http\Controllers\admin\ServicesController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomesController::class, 'home']);
Route::get('/about', [HomesController::class, 'about']);
Route::get('/services', [HomesController::class, 'view']);
Route::get('/services-view/{id}', [HomesController::class, 'views']);
// Route::view('/services', 'web.services');
Route::get('/contact', [HomesController::class, 'contact']);

Route::post('/contact-save', [ContactController::class, 'store']);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact-delete/{id}', [ContactsController::class, 'distroy']);
Route::get('/services-view', [ServicesController::class, 'view']);
Route::post('/services-save', [ServicesController::class, 'save']);
Route::get('/services-distroy/{id}', [ServicesController::class, 'distroy']);
Route::get('/services-edit/{id}', [ServicesController::class, 'edit']);
});
