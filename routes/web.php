<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthorController;
// use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;

Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);
// Route::prefix('book')->group(function () {
//     Route::get('/', [BookController::class, 'index']);
//     Route::get('/add', [BookController::class, 'add']);
//     Route::post('/add', [BookController::class, 'create']);
// });
// Route::get('/relation', [AuthorController::class, 'relate']);
