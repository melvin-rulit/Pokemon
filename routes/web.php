<?php

use Illuminate\Support\Facades\Route;


//Route::group(['prefix' => 'perfomance'], function () {
//    Route::get('/', [\App\Http\Controllers\Perfomance\IndexController::class, 'index']);
//    Route::get('/{id}', [\App\Http\Controllers\Perfomance\ShowController::class, 'show']);
//    Route::put('/{perfomance}', [\App\Http\Controllers\Perfomance\UpdateController::class, 'update']);
//});

  Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('dashboard');

