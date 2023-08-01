<?php 
namespace App\Views\Composers;

use App\Models\Surcharge;
use Illuminate\View\View;

class SurchargeComposer
{


    public function compose( View $view):void
    {   
        $surcharges = Surcharge::get();
        $view->with('surcharge',$surcharges);

    }


}