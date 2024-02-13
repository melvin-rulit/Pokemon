<?php

namespace App\Repositories;

use App\Models\Ability;
use App\Repositories\Interfaces\AbilitieRepositoryInterface;

class AbilitieRepository implements AbilitieRepositoryInterface
{

    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return Ability::all();
    }

    public function find($id)
    {
        return Ability::find($id);
    }

    public function delete($abilitie)
    {
        return $abilitie->delete();
    }

}
