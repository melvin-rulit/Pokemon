<?php

namespace App\Repositories\Interfaces;

interface AppearanceRepositoryInterface
{
    public function all();
    public function find($id);
    public function delete($appearance);

}
