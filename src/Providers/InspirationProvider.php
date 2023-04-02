<?php

namespace Beyondcreation\Inspire\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {

      $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
      $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
      $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
      $this->loadViewsFrom(__DIR__.'/../views', 'inspire');

      $this->loadTranslationsFrom(__DIR__.'/../lang', 'courier');
      $this->publishes([
          __DIR__.'/../lang' => $this->app->langPath('vendor/courier'),
      ]);
    }
}