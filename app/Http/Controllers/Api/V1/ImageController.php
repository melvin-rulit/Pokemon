<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __invoke($image_name)
    {
        $imageUrl = Storage::url($image_name);
        return new JsonResponse($imageUrl);
    }
}
