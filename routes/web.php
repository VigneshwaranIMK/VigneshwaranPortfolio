<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('portfolio');
});

Route::post('/send-message', [ContactController::class, 'send'])->name('send.message');

