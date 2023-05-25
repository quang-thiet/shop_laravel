<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      $categories = Category::get();
       return view('Screen.admin.category.list',compact('categories'));
    }

    public function create()
    {
        $categories =Category::get();
        return view('Screen.admin.category.add',compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $data = $request->all();
        Category::create($data);
        return redirect()->route('category.list')->with('success','Thêm thành công');
        
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $cat = Category::find($id);
        $categories = Category::get();
        return view('Screen.admin.category.edit',compact('cat','categories'));
    }

    public function update(Request $request , $id)
    {
        $data = $request->all();
        Category::find($id)->update($data);
        return redirect()->route('category.list')->with('success','Thêm thành công');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.list')->with('success','Xóa thành công');
    }


}
