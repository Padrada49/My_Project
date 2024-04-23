<?php

namespace App\Providers;

use App\Repositories\MasterRepositoryInterface;
use App\Repositories\Eloquent\MasterRepository;
use App\Repositories\Eloquent\RolesRepository;
use App\Repositories\RolesRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MasterRepositoryInterface::class,MasterRepository::class);
        $this->app->bind(RolesRepositoryInterface::class, RolesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
