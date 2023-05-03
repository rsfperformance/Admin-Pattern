<?php

use Illuminate\Support\Facades\Route;

//Dashboard routes------------------------------------------------------------------------------------------------------------

Route::get('/dashboard', [\App\Http\Controllers\Dashboard\DashboardContoller::class, 'index'])->name('dashboard');

//Dashboard routes end--------------------------------------------------------------------------------------------------------





//Front routes----------------------------------------------------------------------------------------------------------------

Route::get('/', [\App\Http\Controllers\Front\FrontController::class, 'index'])->name('welcome');

//Front routes end-------------------------------------------------------------------------------------------------------------
