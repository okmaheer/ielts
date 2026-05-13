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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'swichnow' => [
        'client_id'   => env('SWICHNOW_CLIENT_ID'),
        'secret_key'  => env('SWICHNOW_SECRET_KEY'),
        'gateway_url' => env('SWICHNOW_GATEWAY_URL'),
        'currency'    => env('SWICHNOW_CURRENCY', 'USD'),
    ],

    'email_api' => [
        'url' => env('EMAIL_API_URL'),
        'key' => env('EMAIL_API_KEY'),
    ],

    'admin' => [
        'email'     => env('ADMIN_EMAIL'),
        'whatsapp'  => env('WHATSAPP_NUMBER'),
    ],

    'writing_test' => [
        'url' => env('WRITING_TEST_URL', 'https://online.ieltsprepandpractice.com'),
    ],

];
