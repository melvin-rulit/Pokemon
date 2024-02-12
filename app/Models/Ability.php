<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ability extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ru',
        'image',
    ];

    public  function abilitie(): HasMany
    {
        return $this->hasMany(Pokemon::class,  'abilitie_id', 'id');
    }
}
