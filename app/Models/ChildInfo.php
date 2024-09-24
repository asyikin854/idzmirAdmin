<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_name',
        'child_ic',
        'child_age',
        'child_dob',
        'child_passport',
        'child_nationality',
        'child_race',
        'child_bp',
        'child_religion',
        'child_sex',
        'child_address',
        'child_posscode',
        'child_city',
        'child_country',
        'pediatricians',
        'recommend',
        'deadline',
        'diagnosis',
        'occ_therapy',
        'sp_therapy',
        'others',
        'house_income',
        'package',
    ];
    public function package()
    {
        return $this->belongsTo(Package::class, 'package', 'package_name');
    }
    public function fatherInfo()
    {
        return $this->hasOne(FatherInfo::class, 'child_id');
    }
    public function motherInfo()
    {
        return $this->hasOne(MotherInfo::class, 'child_id');
    }
    public function parentPermission()
    {
        return $this->hasOne(ParentsPermission::class, 'child_id');
    }
    public function parentAccount()
    {
        return $this->hasOne(ParentAccount::class, 'child_id'); 
    }
    public function childSchedule()
    {
        return $this->hasMany(ChildSchedule::class, 'child_id'); 
    }
}
