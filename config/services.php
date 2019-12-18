<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'github' => [
        // 'client_id' => env('Iv1.605e4abb04f82384'),
        // 'client_secret' => env('55b9e5797a406f980be8e6af07a37e755599f5d3'), 
        'client_id' => env('719d74ded2dafb0b931d'),
        'client_secret' => env('f60255359219cefda4cbad6e26a1acd87de01c06'),
        'redirect' => 'http://192.168.1.117/lsocialite/public/login/github/callback',
        // 'redirect' => 'http://192.168.1.117/lsocialite/public/login/github/callback',
        // 'redirect' => 'https://innovegicsolutions.in',
        // 'redirect' => 'http://localhost/lsocialite/public/login/github/callback',
    ],

];
