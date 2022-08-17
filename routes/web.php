<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MentorController;




Route::get('/',[HomeController::class, "Home"]);
Route::get('/Home',[HomeController::class, "Home"]);




Route::get("/login", [LoginController::class, "login"])->middleware("guest")->name("login");

Route::post("/login", [LoginController::class, "authenticate"]);

Route::get("/logout", [LoginController::class, "logout"])->middleware("auth");

Route::resource("mentor", MentorController::class)->except("show")->middleware("auth");

Route::get("/pembimbing/{id}", [HomeController::class, "showMentor"]);

Route::resource("media", MediaController::class)->except("show")->middleware("auth");

Route::get("/perusahaan/{id}", [HomeController::class, "perusahaan"]);

Route::resource("guess", GuestController::class)->middleware("auth");