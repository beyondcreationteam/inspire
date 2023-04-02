<?php

use Beyondcreation\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['prefix' => 'api', 'middleware' => 'auth:sanctum'], function() {
  // dd("ja");
  // Route::get('/logins', [Beyondcreation\Inspire\Controllers\InspirationController::class, 'login'])->name('bc.user.login');
});

