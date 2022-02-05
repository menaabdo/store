<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\category;
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

// Route::get('/details/{id}', function () {

//     return view('details');
// });
 Route::get('/details', [category ::class,'getone']) ;
Route::get('/', [category ::class,'getcat']) ;
Route::get('/product', [category ::class,'getprod','getone']);