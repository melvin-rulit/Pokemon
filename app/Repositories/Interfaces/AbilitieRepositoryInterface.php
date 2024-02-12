<?php

namespace App\Repositories\Interfaces;

interface AbilitieRepositoryInterface
{
    public function all();
    public function find($id);
    public function delete($abilitie);

}
