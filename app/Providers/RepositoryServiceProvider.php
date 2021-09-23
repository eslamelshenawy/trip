<?php

namespace App\Providers;

use App\Repository\EloquentRepositoryInterface; 
use App\Interface\UserRepositoryInterface; 
use App\Interface\DriverRepositoryInterface; 
use App\Repositories\UserRepository; 
use App\Repositories\DriverRepository; 
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
        $this->app->bind(DriverRepositoryInterface::class, DriverRepository::class); 
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
