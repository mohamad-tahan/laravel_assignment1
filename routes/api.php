<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;


Route::get('/countPalindromes', [AssignmentController::class, 'countPalindromes'])->name("countPalindromes");

Route::get('/countSeconds', [AssignmentController::class, 'countSeconds'])->name("countSeconds");

Route::get('/callApi', [AssignmentController::class, 'callApi'])->name("callApi");

Route::get('/nominee', [AssignmentController::class, 'nominee'])->name("nominee");

