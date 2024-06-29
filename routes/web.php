<?php

use App\Http\Controllers\{WelcomeController, NoteController};
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::resource('note', NoteController::class);
