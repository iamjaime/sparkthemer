<?php

namespace Iamjaime\Sparktheme;

use Illuminate\Support\ServiceProvider;


class SparkThemeServiceProvider extends ServiceProvider
{
    /**
     * @var array $commands The console commands that we need
     */
    protected $commands = [
        'Iamjaime\sparktheme\Console\Commands\SparkTheme',
    ];


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
