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
        ], ['remote-auth']);

        $this->publishes([
            __DIR__ . '/RemotheAuthClient' => app_path('Http/Controllers/RemoteAuthClient'),

        ], ['remote-auth']);

        $this->publishes([
            __DIR__ . '/RemotheAuth.php' => app_path('Helper/RemoteAuthClient/RemoteAuth'),

        ], ['remote-auth']);

        $this->publishes([
            __DIR__ . '/RemotheAuthManager.php' => app_path('Http/Middleware/RemotheAuthManager.php'),

        ], ['remote-auth']);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        App\Helpers\RemoteAuthClient\RemoteAuth::routes();
    }
}
