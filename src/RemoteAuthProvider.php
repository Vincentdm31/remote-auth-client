<?php

namespace Laravins\RemoteAuthClient;

use App\Http\Controllers\RemoteAuth\RemoteAuthController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

class RemoteAuthProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/config/remote-auth.php' => config_path('remote-auth/remote-auth.php'),
        ], ['remote-auth-client']);

        $this->publishes([
            __DIR__ . '/RemoteAuthClient' => app_path('Http/Controllers/RemoteAuthClient'),

        ], ['remote-auth-client']);

        $this->publishes([
            __DIR__ . '/RemoteAuth.php' => app_path('Helper/RemoteAuthClient/RemoteAuth.php'),

        ], ['remote-auth-client']);

        $this->publishes([
            __DIR__ . '/RemoteAuthManager.php' => app_path('Http/Middleware/RemoteAuthManager.php'),

        ], ['remote-auth-client']);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
