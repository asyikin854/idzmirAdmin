<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FatherInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'father_name',
        'father_phone',
        'father_ic',
        'father_race',
        'father_occ',
        'father_email',
        'father_address',
        'father_posscode',
        'father_city',
        'father_work_address',
        'father_work_posscode',
        'father_work_city',
    ];
    public function childInfo()
    {
        return $this->belongsTo(ChildInfo::class, 'child_id');
    }
}
