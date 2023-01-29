<?php

return [
    // Prefix for generated routes
    'route_prefix' => 'remote-auth',

    //Routes to enable/disable
    'routes' => [
        'list' => true,
        'insert' => true,
        'update' => true,
        'delete' => true,
        'down' => true,
        'up' => true,
    ],

    // password used to authenticate requests
    'password' => env('REMOTE_AUTH_PASS', null)
];
