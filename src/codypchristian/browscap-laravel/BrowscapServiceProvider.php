<?php
namespace codypchristian\Browscap;

use Crossjoin\Browscap\Browscap;
use Illuminate\Support\ServiceProvider;

class BrowscapServiceProvider extends ServiceProvider
{
    
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    
    protected $defer = false;
    
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    
    public function boot() {
        
        $this->package('codypchristian/browscap-laravel');
    }
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    
    public function register() {
        
        /**
         * Register the browscap instance
         */
        
        $this->app['browscap'] = $this->app->share(function ($app) {
            
            $bc = new Browscap();
            
            return $bc;
        });
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    
    public function provides() {
        
        return ['browscap'];
    }
}
