<?php 
namespace App\Views\Composers;

use Illuminate\View\View;

class CartsComposer{


    public function compose( View $view)
    {

        $data = session()->get('carts');
        $view->with('abc','bnbn');

        
    }


}