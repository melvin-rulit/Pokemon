<?php

namespace App\Repositories;

use App\Models\Pokemon;
use App\Repositories\Interfaces\PokemonRepositoryInterface;

class PokemonRepository implements PokemonRepositoryInterface
{

    public function all()
    {
        return Pokemon::all();
    }

    public function find($id)
    {
        return Pokemon::find($id);
    }

    public function delete($pokemon)
    {
        return $pokemon->delete();
    }

}
