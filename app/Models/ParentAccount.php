<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Extend Authenticatable
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class ParentAccount extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable=[
        'child_id',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function childInfo()
    {
        return $this->belongsTo(ChildInfo::class, 'child_id');
    }
}
