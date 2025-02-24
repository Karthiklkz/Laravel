<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'viewForm'])->name('home');
Route::post('/add-student',[StudentController::class, 'addStudent']);