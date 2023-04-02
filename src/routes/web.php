<?php

use Beyondcreation\Inspire\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('inspire', Beyondcreation\Inspire\Controllers\InspirationController::class);

Route::group([
  'prefix' => '/admin',
  // 'middleware' => [ 'auth']
  ], function () {

    Route::get('/adminLogin', [Beyondcreation\Inspire\Controllers\AdminController::class, 'adminLogin'])->name('admin.login');
});