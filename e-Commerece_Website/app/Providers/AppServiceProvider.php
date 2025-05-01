<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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
        Paginator::useBootstrapFive();

        Gate::define('isLogin', function(?User $user){
            return !is_null($user);
        });

        View::composer('Components.navbar', function ($view) {
            $cartCount = 0;
    
            if (Auth::check()) {
                $cartCount = Cart::where('user_id', Auth::id())->count();
            }
    
            $view->with('cartCount', $cartCount);
        });
    }
}
