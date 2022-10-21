<?php
use App\Jupiter\Http\UserController;
use Guide\Comphass\Path\Route;


Route::page("/", "welcome", ["project" => "Jupiter"]);

Route::get("/register", [UserController::class, 'index']);


