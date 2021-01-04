<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class,"index"]);
Route::get('/mylogout/', [MainController::class,"logout"]);
Route::post('/insert/', [MainController::class,"insert"]);
Route::post('/delete/', [MainController::class,"delete"]);
// Route::get('/', function () {
//     return view('index');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
