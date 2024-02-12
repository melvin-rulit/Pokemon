<?php

namespace App\Http\Controllers\Api\V1\Abilitie;

use App\Models\Ability;
use App\Http\Resources\AbilitieResource;
use App\Http\Controllers\Api\V1\BaseController;

class ShowController extends BaseController
{
    public function __invoke(Ability $ability): array
    {
        return AbilitieResource::make($ability)->resolve();
    }
}
