<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
       
        return view('Screen.admin.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::get();
        return view('Screen.admin.product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        if(!empty($request->input('categories'))){
            $category_id = implode("|", $request->input('categories'));
            $data['category_id']= $category_id;
        }
        $fileExtension = $request->file('thumbnail')->getClientOriginalExtension();
        $fileName = "product-".time().'.'.$fileExtension;
        $request->file('thumbnail')->move('image/products',$fileName);
        $data['image']= $fileName;
        $data['create_at']= now();
        $data['update_at']=now();
        Product::create($data);
        return redirect()->route('product.list')->with('success','thêm thành công');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('Screen.admin.product.edit',compact('product'));
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request,$id)
    {
        $data = $request->all();
        if(isset($data['thumbnail'])){
            $fileExtension = $request->file('thumbnail')->getClientOriginalExtension();
            $fileName = 'user-'.time().".".$fileExtension;
            $request->file('thumbnail')->move('image/products',$fileName);
            $data['image']=$fileName;
        };
        $data['created_at']= now();
        $data['update_at'] =now();
        Product::find($id)->update($data);
        return redirect()->route('product.list')->with('success','update thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Product::find($id);
        $user->delete();
        return redirect()->back()->with('success','xóa thành công');
    }
}
