<?php 
namespace App\Views\Composers;

use App\Models\Category;
use Illuminate\View\View;
class CategoriesComposer {


    public function composer(View $view){

        $categories  = Category::with('SubMenu')
        ->limit(10)
        ->get();
        
        $view->with([

            'categories' => $categories ,

        ]);

    }
}