<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    protected $guarded = ['id'];

    public function regions(): HasMany
    {
        return $this->hasMany(Region::class, 'city_id');
    }

}
