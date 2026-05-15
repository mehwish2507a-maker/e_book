<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('form', [StudentController::class, 'create']);
Route::post('store', [StudentController::class, 'store']);
Route::get('show', [StudentController::class, 'show']);

Route::get('/', function () {
    return view('index');
});