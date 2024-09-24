<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'parent' => [
            'driver' => 'session',
            'provider' => 'parents',
        ],

        'therapist' => [
            'driver' => 'session',
            'provider' => 'therapists',
        ],

        'cs' => [
            'driver' => 'session',
            'provider' => 'cs',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\AdminInfo::class,
        ],

        'parents' => [
            'driver' => 'eloquent',
            'model' => App\Models\ParentAccount::class,
        ],

        'therapists' => [
            'driver' => 'eloquent',
            'model' => App\Models\TherapistInfo::class,
        ],

        'cs' => [
            'driver' => 'eloquent',
            'model' => App\Models\CsInfo::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];
