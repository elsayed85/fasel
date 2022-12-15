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

    'fasel' => [
        'url' => 'https://netcore.faselhd.pro/api/v1.0/',
        'token' => 'CMrdhDW04Ce9ZcWFsNCAgTKCMHKD88bjgxomBVOL+VDippsR9/YvclNOKrYwRSRYYwP0uJ6AXtUFMk1iNdQgGsFC2G/5fO05l4hGbODXi41X91/TbE117NdC0fl/ZRKBu1kn08dQIoG4GvW9ypci03/DxjqPHzVffnegq4WRy+NZ0BPbob3pf2TODnKj1Zc7iR+fSQVE479J/V3dMm46N41AjfJuXFpyj1wxg0husAnVpj647nv0EDBc+kOC+CtdLOV/LFvzoxj+fEKkzhEJ1wC9IqI3J6+DIkoYg8Skvjm+yfIHewNGmAhrb0MMi+v28AeimhfMIHq28QgyKI0Sulkm8coU+a/O'
    ],

];
