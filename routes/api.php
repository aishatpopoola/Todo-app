<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->group(
    function () {
        Route::get("sign-out", [UserController::class, 'signOut'])->name('signout');
        Route::get("user", [UserController::class, 'getUser'])->name('user.get');
    }
);

Route::post("sign-up", [UserController::class, 'signUp'])->name('signup');
Route::post("/sign-in", [UserController::class, 'signIn'])->name('signin');
// https://peaceful-cove-38084.herokuapp.com/api/update-book
