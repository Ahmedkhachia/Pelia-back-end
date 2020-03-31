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
        'client_id' => '197586455605-2bdlo8ahjqd2klcfglou0kqtm2tk2t5q.apps.googleusercontent.com',
        'client_secret' => 'Gz185mD42enYH0BteQhSpRRU',
        'redirect' => 'http://localhost:8000/callback'
    ],
    'facebook' => [
        'client_id' => '751194532041696',
        'client_secret' => 'ae2923be17e4696cc8df34fa2ef4f22a',
        'redirect' => '',
    ],

];
