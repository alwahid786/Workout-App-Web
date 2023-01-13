<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '61767070390-37imm0hi7ldh0okc5g7rnr9sac3cbann.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost/workitpt_web/google/callback',
    ],
    'facebook' => [
        'client_id' => '1537761496722685',
        'client_secret' => 'd3471fa644673cd424000b08e3322eae',
        'redirect' => 'http://localhost/workitpt_web/facebook/callback',
    ],
    'instagram' => [
        'client_id' => '883226096321815',
        'client_secret' => '8ac45f7043df06f0d681769b140f146f',
        'redirect' => 'https://shippelloinvoices.com/admin',
    ],
];
