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
//     return view('manager.chart');
// });

// Route::get('/teacher', function () {
//     return view('manager.createCategory');
// });

Auth::routes();

//chart
Route::get('/', [App\Http\Controllers\chart\chartControlar::class, 'index']);



// category routes
Route::get('/teacher', [App\Http\Controllers\manager\categoryController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/manager/category', [App\Http\Controllers\manager\categoryController::class, 'index']);
Route::get('/manager/category/create', [App\Http\Controllers\manager\categoryController::class, 'create']);
Route::POST('/manager/category', [App\Http\Controllers\manager\categoryController::class, 'store']);
Route::DELETE('/manager/category/{id}', [App\Http\Controllers\manager\categoryController::class, 'destroy']);
Route::get('/manager/editCategory/{id}', [App\Http\Controllers\manager\categoryController::class, 'edit']);
Route::POST('/manager/category/edit/{id}', [App\Http\Controllers\manager\categoryController::class, 'update']);





