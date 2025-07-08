<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [AuthController::class, "login"])->name('login');
Route::post("/login", [AuthController::class, "loginPost"])->name('loginPost');
Route::get("/register", [AuthController::class, "register"])->name('register');
Route::get("/register", [AuthController::class, "registerPost"])->name('register');
Route::get("/logout", [AuthController::class, "logout"])->name('logout');