<?php

use Beyondcreation\Inspire\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('inspire', Beyondcreation\Inspire\Controllers\InspirationController::class);