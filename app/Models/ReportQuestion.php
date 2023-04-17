<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReportQuestion extends Model
{
    protected $guarded = ['id'];

    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class, 'report_id');
    }

    public function answers(): HasMany
    {
        return $this->hasMany(ReportAnswer::class, 'question_id');
    }
}
