<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PokemonRepository;
use App\Repositories\Interfaces\PokemonRepositoryInterface;
use App\Repositories\AbilitieRepository;
use App\Repositories\Interfaces\AbilitieRepositoryInterface;
use App\Repositories\AppearanceRepository;
use App\Repositories\Interfaces\AppearanceRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PokemonRepositoryInterface::class,
            PokemonRepository::class,

        );
        $this->app->bind(
            AbilitieRepositoryInterface::class,
            AbilitieRepository::class

        );
        $this->app->bind(
            AppearanceRepositoryInterface::class,
            AppearanceRepository::class

        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
