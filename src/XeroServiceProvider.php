<?php

namespace CraigRamsay\Xero;

use Illuminate\Support\ServiceProvider;
use XeroPHP\Application\PartnerApplication;
use XeroPHP\Application\PrivateApplication;
use XeroPHP\Application\PublicApplication;

class XeroServiceProvider extends ServiceProvider
{
  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = true;

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([__DIR__.'/config/xero.php' => config_path('xero.php')]);
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->mergeConfigFrom(__DIR__.'/config/xero.php', 'xero');

    $this->app->singleton(PartnerApplication::class, function($app) {
      return new PartnerApplication(config('xero.config'));
    });

    $this->app->alias(PartnerApplication::class, 'xeropartner');

    $this->app->singleton(PrivateApplication::class, function($app) {
      return new PrivateApplication(config('xero.config'));
    });

    $this->app->alias(PrivateApplication::class, 'xeroprivate');
    
    $this->app->singleton(PublicApplication::class, function($app) {
      return new PublicApplication(config('xero.config'));
    });
    
    $this->app->alias(PublicApplication::class, 'xeropublic');
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return [
      PartnerApplication::class,
      PrivateApplication::class,
      PublicApplication::class,
      'xeropartner',
      'xeroprivate',
      'xeropublic',
    ];
  }    
}