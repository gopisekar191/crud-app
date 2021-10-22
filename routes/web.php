<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SearchController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('student', StudentController::class);

Route::get('/', [SearchController::class, 'index']);

Route::get('search', [SearchController::class, 'search']);

// Route::get('/sr','SearchController@index');
// Route::get('/search','SearchController@search');
