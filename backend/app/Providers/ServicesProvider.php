<?php

namespace App\Providers;

use App\Repositories\AccountsRepositoryImplement;
use App\Services\AccountService;
use App\Services\AccountServiceImplement;
use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AccountService::class,
            AccountServiceImplement::class
        );
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
