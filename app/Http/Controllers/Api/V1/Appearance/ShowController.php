<?php

namespace App\Http\Controllers\Api\V1\Appearance;

use App\Models\Appearance;
use App\Http\Resources\AppearanceResource;
use App\Http\Controllers\Api\V1\BaseController;

class ShowController extends BaseController
{
    public function __invoke(Appearance $appearance): array
    {
        return AppearanceResource::make($appearance)->resolve();
    }
}
