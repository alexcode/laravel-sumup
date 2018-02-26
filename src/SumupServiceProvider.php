<?php

/**
 * Part of the Sumup Laravel package.
 */

namespace Alexcode\Sumup\Laravel;

use Sumup\Sumup;
use Illuminate\Support\ServiceProvider;

class SumupServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $configPath = __DIR__ . '/config/config.php';
        $this->publishes([$configPath => config_path('sumup.php')], 'config');
        $this->mergeConfigFrom($configPath, 'sumup');
    }
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->registerSumup();
    }

    /**
     * {@inheritDoc}
     */
    public function provides()
    {
        return [
            'sumup'
        ];
    }

    /**
     * Register the Sumup API class.
     *
     * @return void
     */
    protected function registerSumup()
    {
        $this->app->singleton('sumup', function ($app) {
            $config = $app['config']->get('sumup');
            $client = isset($config['client_id']) ? $config['client_id'] : null;
            $secret = isset($config['secret']) ? $config['secret'] : null;
            $version = isset($config['version']) ? $config['version'] : null;
            $redirect = isset($config['redirect_uri']) ? $config['redirect_uri'] : null;

            $sumup = new Sumup($client, $secret);
            if ($version) {
                $sumup->setVersion($version);
            }
            if ($redirect) {
                $sumup->setRedirectUri($redirect);
            }

            return $sumup;
        });

        $this->app->alias('sumup', 'Alexcode\Sumup\Sumup');
    }
}
