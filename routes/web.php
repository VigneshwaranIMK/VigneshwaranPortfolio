<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WordController;

Route::get('/', function () {
    return view('index');
});

// Route::get('/index', function () {
//     return view('index');
// });

Route::post('/send-message', [ContactController::class, 'submit'])->name('submit.form');
Route::get('/align-word', [WordController::class, 'alignWord']);


