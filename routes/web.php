<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Q1Controller;
use App\Http\Controllers\Q2Controller;
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
    return view('pages.home');
});


Route::get('/Q1', [Q1Controller::class, 'show']);
Route::post('/Q1/Output', [Q1Controller::class, 'output']);

Route::get('/Q2', [Q2Controller::class, 'show']);
Route::get('/Q2/Create', [Q2Controller::class, 'create']);
Route::Post('/Q2/Store', [Q2Controller::class, 'store']);
Route::Delete('/Q2/Destroy/{Id}', [Q2Controller::class, 'destroy']);
Route::get('/Q2/Edit/{Id}', [Q2Controller::class, 'edit']);
Route::put('/Q2/Update/{Id}', [Q2Controller::class, 'update']);
