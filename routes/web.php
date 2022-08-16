<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MentorController;



Route::get('/', function () {
    return view('Home',["title"=>"Home"]);
});

Route::get('/Home', function () {
    return view('Home',["title"=>"Home"]);
});

Route::get('/Perusahaan', function () {
    return view('/Home#sec-e74a',["title"=>"Perusahaan"]);
});

Route::get('/Media-Partner', function () {
    return view('/Home#sec-6855',["title"=>"Media Partner"]);
});


Route::get("/login", [LoginController::class, "login"])->middleware("guest")->name("login");

Route::post("/login", [LoginController::class, "authenticate"]);

Route::get("/logout", [LoginController::class, "logout"])->middleware("auth");

Route::resource("mentor", MentorController::class)->except("show")->middleware("auth");