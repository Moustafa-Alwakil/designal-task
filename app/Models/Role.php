<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $guarded = ['id'];


    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'role_id');
    }

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class, 'role_id');
    }
}
