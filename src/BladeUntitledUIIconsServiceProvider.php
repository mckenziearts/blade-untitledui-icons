<?php

declare(strict_types=1);

namespace Mckenziearts\BladeUntitledUIIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeUntitledUIIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-untitledui-icons', []);

            $factory->add('untitledui-icons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-untitledui-icons.php', 'blade-untitledui-icons-config');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-untitledui-icons'),
            ], 'blade-untitledui-icons');

            $this->publishes([
                __DIR__.'/../config/blade-untitledui-icons.php' => $this->app->configPath('blade-untitledui-icons.php'),
            ], 'blade-untitledui-icons-config');
        }
    }
}
