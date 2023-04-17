<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    protected $guarded = ['id'];


    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function branches(): HasMany
    {
        return $this->hasMany(Branch::class, 'region_id');
    }
}
