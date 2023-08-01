<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSurchargeRequest;
use App\Models\Surcharge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SurchargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surcharges =  Surcharge::paginate(5);

        return view('Screen.admin.surcharge.list',compact('surcharges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Screen.admin.surcharge.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSurchargeRequest $request)
    {
        $data = $request->except('_token','btn-add-category');
        try {
            $surcharges = Surcharge::insert($data);
            return redirect()->back()->with('success','thêm thành công');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error','đă có lỗi xảy ra !!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      try {
        $surcharge = Surcharge::find($id);
      } catch (\Exception $e) {
        Log::error($e);
        return redirect()->back()->with('success!!!');
      }

       return view('Screen.admin.surcharge.edit',compact('surcharge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token','btn-add-category');

        try {
          
            $surcharge = Surcharge::find($id);
            $surcharge->update($data);
            return redirect()->back()->with('success','success!!');
        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->back()->with('error','đã có lỗi xảy ra !!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        try {
            $surcharge = Surcharge::find($id);
            $surcharge->delete();
            return redirect()->back()->with('success','success ');
        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->back()->with('error','error!!');
        }
    }
}
