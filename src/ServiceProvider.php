<?php

namespace Isb\Account;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/../database/migrations' => database_path('migrations')
            ], 'isb-account-migrations'
        );
        $this->publishes([
            __DIR__.'/../config/account.php' => config_path('account.php'),
        ], 'isb-account-config');
        $this->loadTranslationsFrom(__DIR__ . '/../translation', 'isb-account');
        $this->publishes([
            __DIR__ . '/../translation' => resource_path('lang/vendor/isb-account'),
        ], 'translation');
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\Commands\AddStatusCommand::class,
                Console\Commands\AddStatusDetailCommand::class,
                Console\Commands\AddStatusLangCommand::class,
                Console\Commands\AddTypeCommand::class,
                Console\Commands\InstallCommand::class,
            ]);
        }
    }
}
