<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_name',
        'package_step',
        'package_long_desc1',
        'package_long_desc2',
        'package_long_desc3',
        'package_short_desc1',
        'package_short_desc2',
        'package_short_desc3',
        'package_short_desc4',
        'package_short_desc5',
        'session_quantity',
        'package_normal_price',
        'package_wkday_price',
        'package_wkend_price',
    ];
    public function childInfo()
    {
        return $this->hasMany(ChildInfo::class, 'package', 'package_name');
    }
}
