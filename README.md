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
    //Put here your endpoints
    [
        'name' => 'Locked',
        'url' => 'https://my-website.com/',
        'password' => 'mysecretpass'
    ],
];

```
<br/>

***


<br/>

Thanks ✌️
