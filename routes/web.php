<?php

use Illuminate\Support\Facades\Route;//上部に追記

use App\Http\Controllers\SessionController;

Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);