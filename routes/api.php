<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;


Route::get('/assign', [AssignmentController::class, 'countPalindromes'])->name("palindrome");

Route::get('/second', [AssignmentController::class, 'countSeconds'])->name("second");

Route::get('/call', [AssignmentController::class, 'callApi'])->name("call");

