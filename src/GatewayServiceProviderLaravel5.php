<?php

namespace Larabookir\Gateway;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class GatewayServiceProviderLaravel5 extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $config = __DIR__ . '/../config/gateway.php';
        $migrations = __DIR__ . '/../migrations/';
        $seeds = __DIR__ . '/../seeds/';
        $views = __DIR__ . '/../views/';

        //php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=config
        $this->publishes([
            $config => config_path('gateway.php'),
        ], 'config');

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=migrations
        $this->publishes([
            $migrations => base_path('database/migrations')
        ], 'migrations');

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=seeds
        $this->publishes([
            $seeds => base_path('database/seeds')
        ], 'seeds');


        $this->loadViewsFrom($views, 'gateway');

        // php artisan vendor:publish --provider=Larabookir\Gateway\GatewayServiceProvider --tag=views
        $this->publishes([
            $views => base_path('resources/views/vendor/gateway'),
        ], 'views');

        //$this->mergeConfigFrom( $config,'gateway')
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('gateway', function () {
			return new GatewayResolver();
		});

	}
}
