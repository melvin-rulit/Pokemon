<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'location',
        'abilitie_id',
    ];

    public function abilitie(): HasOne
    {
        return $this->hasOne(Ability::class, 'id', 'abilitie_id');
    }


}
