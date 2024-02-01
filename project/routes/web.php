<?php

use App\Http\Controllers\RecitController;
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

Route::post('/', [RecitController::class, "index"]);
Route::get('/add', [RecitController::class, "create"]);
Route::post('/add', [RecitController::class, "store"]);
