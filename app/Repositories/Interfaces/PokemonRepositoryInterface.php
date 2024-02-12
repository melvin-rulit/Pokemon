<?php

namespace App\Repositories\Interfaces;

interface PokemonRepositoryInterface
{
    public function all();
    public function find($id);
    public function delete($pokemon);

}
