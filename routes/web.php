<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WordController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('index');
});

Route::post('/send-message', [ContactController::class, 'submit'])->name('submit.form');
Route::get('/align-word', [WordController::class, 'alignWord']);
Route::post('/submit-data', function (Request $request) {
    return response()->json(['message' => 'Data received successfully!']);
});



