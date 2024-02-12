<?php

namespace App\Repositories;

use App\Models\Appearance;
use App\Repositories\Interfaces\AppearanceRepositoryInterface;

class AppearanceRepository implements AppearanceRepositoryInterface
{

    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return Appearance::all();
    }

    public function find($id)
    {
        return Appearance::find($id);
    }

    public function delete($appearance)
    {
        return $appearance->delete();
    }

}
