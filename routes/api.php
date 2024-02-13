<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {

    Route::group(['prefix' => 'pokemon'], function () {

        Route::get('/getPokemons', App\Http\Controllers\Api\V1\Pokemon\IndexController::class);
        Route::get('/getPokemon/{pokemon}', App\Http\Controllers\Api\V1\Pokemon\ShowController::class);
        Route::post('/createPokemon', App\Http\Controllers\Api\V1\Pokemon\CreateController::class);
        Route::put('/updatePokemon/{pokemon}', App\Http\Controllers\Api\V1\Pokemon\UpdateController::class);
        Route::delete('/deletePokemon/{pokemon}', App\Http\Controllers\Api\V1\Pokemon\DeleteController::class);
    });

    Route::group(['prefix' => 'ability'], function () {

        Route::get('/getAbilitys', App\Http\Controllers\Api\V1\Abilitie\IndexController::class);
        Route::get('/getAbility/{ability}', App\Http\Controllers\Api\V1\Abilitie\ShowController::class);
        Route::post('/createAbility', App\Http\Controllers\Api\V1\Abilitie\CreateController::class);
        Route::put('/updateAbility/{ability}', App\Http\Controllers\Api\V1\Abilitie\UpdateController::class);
        Route::delete('/deleteAbility/{ability}', App\Http\Controllers\Api\V1\Abilitie\DeleteController::class);
    });

    Route::group(['prefix' => 'appearance'], function () {

        Route::get('/getAppearances', App\Http\Controllers\Api\V1\Appearance\IndexController::class);
        Route::get('/getAppearance/{appearance}', App\Http\Controllers\Api\V1\Appearance\ShowController::class);
        Route::post('/createAppearance', App\Http\Controllers\Api\V1\Appearance\CreateController::class);
        Route::put('/updateAppearance/{appearance}', App\Http\Controllers\Api\V1\Appearance\UpdateController::class);
        Route::delete('/deleteAppearance/{appearance}', App\Http\Controllers\Api\V1\Appearance\DeleteController::class);
    });

    Route::get('/getImage/{image_name}', App\Http\Controllers\Api\V1\ImageController::class);
});
