<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cardController;

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
    return view('home');
});

Route::get('/cards/create', function () {
    return view('create_card');
});

Route::post('cardDetails/store', [cardController::class, 'store'])->name('cardDetails.store');
