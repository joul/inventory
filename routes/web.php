<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;

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

//Update precedures applied in laravel 9 below
Route::controller(DemoController::class)->group(function(){
    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('contact.page'); //url,method name
});

// //below steps apply in laravel 8
// Route::get('/about', [DemoController::class, 'Index']);
// Route::get('/contact', [DemoController::class, 'ContactMethod']);

// Route::get('/about', function () {
//     return view('about');
// });