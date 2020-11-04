<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::get('/test', [TestController::class, 'test'])->name('test');
Route::get('/test/{Search1}/{textvalue1}', [TestController::class, 'Search'])->name('test');
Route::get('/test/{Search1}/{textvalue1}/{select2}/{inputVal2}', [TestController::class, 'Search2'])->name('test');
Route::get('/test/{Search1}/{textvalue1}/{select2}/{inputVal2}/{select3}/{inputVal3}', [TestController::class, 'SearchFinal'])->name('test');


// Route::get('/search', [TestController::class, 'test'])->name('test');
// Route::get('/search', [TestController::class, 'Search']);
