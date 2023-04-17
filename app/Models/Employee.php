<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ['password'];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function manager(): BelongsTo
    {
        return $this->belongsTo(self::class, 'manager_id');
    }

    public function managed_employees(): HasMany
    {
        return $this->hasMany(self::class, 'manger_id');
    }

    public function answers(): HasMany
    {
        return $this->hasMany(ReportAnswer::class, 'employee_id');
    }
}
