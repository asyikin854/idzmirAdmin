<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentsPermission extends Model
{
    use HasFactory;

    protected $table = 'parents_permission';

    protected $fillable = [
        'child_id',
        'parent_sign',
        'sign_name',
        'sign_date',
        'sign_time',
        'agree_disagree',
    ];
    public function childInfo()
    {
        return $this->belongsTo(ChildInfo::class, 'child_id');
    }
}

