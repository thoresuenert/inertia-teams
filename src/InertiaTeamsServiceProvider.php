<?php

namespace Thoresuenert\InertiaTeams;

use Illuminate\Support\ServiceProvider;

class InertiaTeamsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(base_path('vendor/thoresuenert/inertia-teams') . '/resources/views', 'teams');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/teams'),
        ]);
    }
}
