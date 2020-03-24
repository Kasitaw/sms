<?php

return [
    'default' => env('SMS_CONNECTION', 'isms'),

    'connections' => [
        'isms' => [
            'driver' => 'isms',
            'username' => env('ISMS_USERNAME', null),
            'password' => env('ISMS_PASSWORD', null),
        ],

        'sms123' => [
            'driver' => 'sms123',
            'username' => env('SMS123_USERNAME', null),
            'password' => env('SMS123_PASSWORD', null),
        ],
    ],
];
