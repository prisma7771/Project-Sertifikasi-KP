<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Untuk mengganti style Paginator
        Paginator::useBootstrap();

        // Mendefiniskan gate agar page hanya dapat diakses admin
        Gate::define('is_admin', function(User $user){
            return $user->is_admin;
        });
    }
}
