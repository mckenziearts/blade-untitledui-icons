<?php

declare(strict_types=1);

namespace Mckenziearts\BladeUntitledUIIcons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeUntitledUIIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory): void {
            $factory->add(
                set: 'untitledui-icons',
                options: [
                    'path' => __DIR__ . '/../resources/svg',
                    'prefix' => 'untitledui',
                ]
            );
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-untitledui-icons'),
            ], 'blade-untitledui-icons');
        }
    }
}
