# Laravel Remote Auth Manager Client

**Introduction**

This package allows you to update user password and delete user remotely.

Working with LaravinsRemoteAuth

<br/>

**Installation**

```
composer require laravins/remote-auth-client
```

This will install the package inside your project.

- `Config file` located at `config//remote-auth.php`
- `Controller` located at `Http/Controllers/RemoteAuthClient/RemoteAuthController.php`
- `Middleware` located at `Htpp\Middlewares/RemoteAuthManager`

Publish files
```
php artisan vendor:publish --tag=remote-auth-client --ansi --force
```

```
//.env
REMOTE_AUTH_PASS=secretpass
```

<br/>

***
<br/>

**Config file**
<br/>

This config file will allow you to remotely manage your users off `https://my-website.com/` endpoint.

```php
<?php

return [
    // Prefix for generated routes
    'route_prefix' => 'api/remote-auth',

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

```
<br/>

***


<br/>

Thanks ✌️
