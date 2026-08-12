<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;   

Route::post('/', [MessageController::class, 'store'])->name('messages.store');  
Route::get('/', function () {
    return view('home');
})->name('messages.index'); 
