<?php

namespace App\Providers;

use App\Interfaces\CompetitionRepositoryInterface;
use App\Interfaces\MediaPartnerRepositoryInterface;
use App\Interfaces\PaymentMethodRepositoryInterface;
use App\Interfaces\PaymentRepositoryInterface;
use App\Interfaces\RegisterTeamRepositoryInterface;
use App\Interfaces\SponsorRepositoryInterface;
use App\Interfaces\TeamRepositoryInterface;
use App\Interfaces\WebConfigurationRepositoryInterface;
use App\Repositories\CompetitionRepository;
use App\Repositories\MediaPartnerRepository;
use App\Repositories\PaymentMethodRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\RegisterTeamRepository;
use App\Repositories\SponsorRepository;
use App\Repositories\TeamRepository;
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
        $this->app->bind(PaymentMethodRepositoryInterface::class, PaymentMethodRepository::class);
        $this->app->bind(RegisterTeamRepositoryInterface::class, RegisterTeamRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);
        $this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);
        $this->app->bind(SponsorRepositoryInterface::class, SponsorRepository::class);
        $this->app->bind(MediaPartnerRepositoryInterface::class, MediaPartnerRepository::class);
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
