<?php
return [
    /*
    |--------------------------------------------------------------------------
    | API URL
    |--------------------------------------------------------------------------
    */
   'apiUrl' => env('API_URL', 'https://mall-api.gotomalls.com/'),

    /*
    |--------------------------------------------------------------------------
    | Application name
    |--------------------------------------------------------------------------
    */
   'appName' => env('APP_NAME', 'Gotomalls'),


    /*
    |--------------------------------------------------------------------------
    | Theme-based views directory
    |--------------------------------------------------------------------------
    |
    | view directory based on theme
    |
    */
   'theme' => env('THEME', 'default'),

    /*
    |--------------------------------------------------------------------------
    | Database setting
    |--------------------------------------------------------------------------
    |
    | Application database setting
    |
    */
    'db' => [
        /*
        |--------------------------------------------------------------------------
        | Database hostname
        |--------------------------------------------------------------------------
        |
        | Database host
        |
        */
        'host' => env('DB_HOST', 'localhost'),

        /*
        |--------------------------------------------------------------------------
        | Database name
        |--------------------------------------------------------------------------
        |
        | Database name
        |
        */
        'dbname' => env('DB_NAME', 'gotomalls'),

        /*
        |--------------------------------------------------------------------------
        | Database username
        |--------------------------------------------------------------------------
        |
        | Database username
        |
        */
        'username' => env('DB_USERNAME', 'gotomalls'),

        /*
        |--------------------------------------------------------------------------
        | Database password
        |--------------------------------------------------------------------------
        |
        | Database password
        |
        */
        'password' => env('DB_PASSWORD', 'gotomalls')
     ]

];