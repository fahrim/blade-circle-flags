<?php

declare(strict_types=1);

namespace BladeUI\CircleFlags;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeCircleFlagsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-circle-flags', []);

            $factory->add('circle-flags', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-circle-flags.php', 'blade-circle-flags');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-circle-flags'),
            ], 'blade-circle-flags');

            $this->publishes([
                __DIR__.'/../config/blade-circle-flags.php' => $this->app->configPath('blade-circle-flags.php'),
            ], 'blade-circle-flags-config');
        }
    }
}
