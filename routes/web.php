<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimetableController;
use Illuminate\Support\Facades\Request;

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

 //Route::get('/home',[TimetableController::class,'index'])->name('index');
//http://127.0.0.1:8000/month?month=feb
// Route::get('month',[TimetableController::class,'month'])->name('month');

//Route::get('get_data',[TimetableController::class,'get_data']);

Route::get(
    'get_data',
    [TimetableController::class, 'month']
)->name('get_data');

// Route::get('/alldata/{date}',[TimetableController::class,'details'])->name('details');