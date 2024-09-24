<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotherInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'mother_name',
        'mother_phone',
        'mother_ic',
        'mother_race',
        'mother_occ',
        'mother_email',
        'mother_address',
        'mother_posscode',
        'mother_city',
        'mother_work_address',
        'mother_work_posscode',
        'mother_work_city',
    ];
    public function childInfo()
    {
        return $this->belongsTo(ChildInfo::class, 'child_id');
    }
}
