<?php

use CardinalCore\Support\Facade\Route;

Route::get('/home', [\Cardinal\Http\Controller\HomeController::class, 'index'])->name('home');
