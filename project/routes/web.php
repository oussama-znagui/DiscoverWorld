<?php

use App\Http\Controllers\RecitController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RecitController::class, "index"]);
Route::get('/add', [RecitController::class, "create"]);
Route::post('/add', [RecitController::class, "store"]);
Route::get('/recit/{recit}', [RecitController::class, "recit"]);
