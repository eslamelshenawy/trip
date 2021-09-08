<?php

namespace App\Providers;

use App\Repository\EloquentRepositoryInterface; 
use App\Interface\UserRepositoryInterface; 
use App\Repositories\UserRepository; 
use App\Repositories\BaseRepository; 
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
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class); 
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
