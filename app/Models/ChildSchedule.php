<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'session',
        'day',
        'time',
        'price',
        'therapist',
        'attendance',
        'remark',
        'status',
        'date'
    ];

    public function childInfo()
    {
        return $this->belongsTo(ChildInfo::class, 'child_id');
    }
    public function sessionReport()
    {
        return $this->hasOne(SessionReport::class, 'schedules_id');
    }
}
