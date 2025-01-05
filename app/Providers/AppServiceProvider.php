<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\Produk;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.navbar', function ($view) {
            $produk = Produk::all(); // Ambil semua produk
            $view->with('produk', $produk);
        });
    }
}
