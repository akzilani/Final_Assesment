<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\HomeController;

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

Route::get('/admin', function () {

    // return view('dashboard');
   return view('Backend.products.index');

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/admin', function () {
//     return view('Backend.dashboard');
// });
// Route::get('/product', function () {
//     return view('Frontend.products.index');
// });
Route::get('/product',[HomeController::class,'index']);
Route::get('show/{id}',[HomeController::class,'show'])->name('show');

// Route::get('/create', function () {
//     return view('Backend.products.create')->name('create');
// });

Route::get('create',[ProductController::class,'create'])->name('create');
Route::post('store',[ProductController::class,'store'])->name('store');
Route::get('admin',[ProductController::class,'index'])->middleware(['auth'])->name('admin');
Route::get('edit/{id}', [ProductController::class,'edit'])->name('edit');
Route::put('update/{id}', [ProductController::class,'update'])->name('update');
Route::get('/delete/{id}',[ProductController::class,'delete'])->name('delete');




