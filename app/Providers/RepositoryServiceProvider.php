<?php

namespace App\Providers;

use App\Interfaces\CompetitionRepositoryInterface;
use App\Interfaces\WebConfigurationRepositoryInterface;
use App\Repositories\CompetitionRepository;
use App\Repositories\WebConfigurationRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(WebConfigurationRepositoryInterface::class, WebConfigurationRepository::class);
        $this->app->bind(CompetitionRepositoryInterface::class, CompetitionRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
