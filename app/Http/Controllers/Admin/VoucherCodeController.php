<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VoucherCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $voucher  = Voucher::get();
        return View('Screen.admin.voucher.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Screen.admin.voucher.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
        $data = $request->only(['name','value','code']);
        $voucher = Voucher::insert($data);
        return redirect()->back()->with('success','success');
       } catch  (\Exception $e) {

        Log::error($e);
        return redirect()->back()->with('error','error');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voucher = Voucher::find($id);
        return view('Screen.admin.voucher.edit',compact('voucher'));
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
       try {
        $data = $request->only(['value','code','name']);
        $voucher = Voucher::find($id);
        $voucher->update($data);
        return redirect()->back()->with('success','success');
       } catch  (\Exception $e) {

        Log::error($e);
        return redirect()->back()->with('error','error');
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
        $voucher = Voucher::find($id);
        $voucher->delete();
        return redirect()->back()->with('success');
       } catch (\Exception $e) {

        Log::error($e);
        return redirect()->back()->with('error','error');
        
       }
       
    }
}
