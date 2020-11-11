<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        if(!$this->app->runningInConsole()){
        foreach(Permission::all() as $_pms){
            Gate::define($_pms->name,function($user) use ($_pms){
              return $user->hasPermission($_pms);
            });
        }
    }
    }
}
