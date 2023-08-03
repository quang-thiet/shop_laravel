<?php

namespace App\Views\Composers;

use App\Services\CartService;
use Illuminate\View\View;

class CartsComposer
{


    public function compose(View $view)
    {

        $result = new CartService;
        $carts = $result->get_cart();
        $view->with('carts', $carts);
        
    }
}
