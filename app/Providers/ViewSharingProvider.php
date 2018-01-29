<?php

namespace App\Providers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Cart;

class ViewSharingProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
      View::composer('*', function ($view){

        // dd(csrf_token());
                  $dishes = Cart::where('token', csrf_token())->get();
                  $counter = 0;
                  foreach ($dishes as $key => $value) {
                    $price = $value->dishes->price;
                    $counter += $price;
                  }

                  $view->with('cartSize', count($dishes));
                  $view->with('cartTotal', $counter);
              });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
