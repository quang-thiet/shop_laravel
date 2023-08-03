<?php

namespace App\Providers;

use App\Views\Composers\CartsComposer;
use App\Views\Composers\SurchargeComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
// use Illuminate\View\View as ViewView;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['Layout.client.header'], CartsComposer::class);

        // view::composer('Screen.client.carts',function( $view){
        //     $view->with('abc','hhahah');
        // });

        View::composer(
        [  
            'Screen.admin.order.edit',
            'Email.order_confirm', 
            'Layout.client.header', 
            'Screen.client.carts', 
            'Screen.client.checkout',

        ], SurchargeComposer::class);


        
    }
}
