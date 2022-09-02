<?php

namespace App\Providers;

use App\Repositories\AccountsRepository;
use App\Repositories\AccountsRepositoryImplement;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AccountsRepository::class,
            AccountsRepositoryImplement::class
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
