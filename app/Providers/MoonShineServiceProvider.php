<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\EventsResource;
use App\MoonShine\Resources\GalleryResource;
use App\MoonShine\Resources\NewsResource;
use App\MoonShine\Resources\PagesResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,

                NewsResource::class,
                PagesResource::class,
                EventsResource::class,
                GalleryResource::class
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
