<?php

namespace App\Helpers\RemoteAuthClient;

use App\Http\Controllers\RemoteAuthClient\RemoteAuthController;
use Error;
use Illuminate\Support\Facades\Route;

class RemoteAuth
{
    static function routes()
    {
        if (!is_file(config_path() . '/remote-auth.php')) {
            throw new Error("Config file [remote-auth] not found.");
        }

        if (config('remote-auth.routes.list')) {
            Route::post(config('remote-auth.route_prefix') . '/user/', [RemoteAuthController::class, 'listUsers']);
        }

        if (config('remote-auth.routes.update')) {
            Route::put(config('remote-auth.route_prefix') . '/user/{id}', [RemoteAuthController::class, 'update']);
        }

        if (config('remote-auth.routes.delete')) {
            Route::delete(config('remote-auth.route_prefix') . '/user/{id}', [RemoteAuthController::class, 'delete']);
        }

        if (config('remote-auth.routes.down')) {
            Route::post(config('remote-auth.route_prefix') . '/down', [RemoteAuthController::class, 'down']);
        }

        if (config('remote-auth.routes.up')) {
            Route::delete(config('remote-auth.route_prefix') . '/up', [RemoteAuthController::class, 'up']);
        }

        Route::post(config('remote-auth.route_prefix') . '/healthcheck', [RemoteAuthController::class, 'healthcheck']);
    }
}
