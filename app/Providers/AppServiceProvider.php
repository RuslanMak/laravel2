<?php

namespace App\Providers;

use App\Services\Twitter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; /* 1.1 */

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); /*1.1 стандартный размер 255 не работает-> тогда 191 */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(
        \App\Repositories\UserRepository::class,
        \App\Repositories\DbUserRepository::class
      );
    }
}
