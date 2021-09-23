<?php


return [

    /*
    |--------------------------------------------------------------------------
    | PayMob Default Order Model
    |--------------------------------------------------------------------------
    |
    | This option defines the default Order model.
    |
    */

    'order' => [
        'model' => 'App\Order'
    ],

    /*
    |--------------------------------------------------------------------------
    | PayMob username and password
    |--------------------------------------------------------------------------
    |
    | This is your PayMob username and password to make auth request.
    |
    */

    'api_key' => env('PAYMOB_API_KEY', ''),
    'integration_id' => env('INTEGRATION_ID', ''),
    'iframe_id' => env('IFRAME_ID', ''),

];
