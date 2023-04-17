<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReportAnswer extends Model
{
    protected $guarded = ['id'];


    public function Question(): BelongsTo
    {
        return $this->belongsTo(ReportQuestion::class, 'question_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
