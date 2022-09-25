<?php

use App\Http\Controllers\BloodrequestController;
use App\Http\Controllers\DonorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagescontroller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SearchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------------------------------------  ----------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Pagescontroller::class, 'index'])->name('/');
Route::resource('/donors', DonorController::class);
Route::resource('/requests', BloodrequestController::class);
Route::get('/about', [Pagescontroller::class, 'about'])->name('about-data');
Route::get('/search', [SearchController::class, 'search'])->name('search-data');
Route::post('/search', [SearchController::class, 'search_data'])->name('search.data');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
