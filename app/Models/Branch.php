<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Branch extends Model
{
    protected $guarded = ['id'];


    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
