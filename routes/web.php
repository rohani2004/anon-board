<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;   

Route::get('/about', [MessageController::class, 'about'])->name('about');  
Route::get('/', function () {
    return view('home');
})->name('messages.index'); 
