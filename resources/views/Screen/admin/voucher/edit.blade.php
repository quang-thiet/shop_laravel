@extends('layout.admin.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h2 class="card-title">Add voucher</h2>
            </div>
            <!--begin::Form-->
            <form method="POST" enctype="multipart/form-data" action="{{ route('voucher.update',$voucher->id) }}">
                
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Name Surcharge 
                            <span class="text-danger">*</span></label>
                        <input type="text" value="{{$voucher->name}}" name="name" class="form-control" placeholder="Nhập tên danh mục">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>    
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Value
                            <span class="text-danger">*</span></label>
                        <input type="text" value="{{$voucher->value}}" name="value" class="form-control" placeholder="Nhập giá trị ">
                        @error('value')
                            <p class="text-danger">{{$message}}</p>    
                        @enderror
                    </div>
                    <div class="form-group">
                      <label>Value
                          <span class="text-danger">*</span></label>
                      <input type="text" value="{{$voucher->code}}" name="code" class="form-control" placeholder="Nhập giá trị ">
                      @error('code')
                          <p class="text-danger">{{$message}}</p>    
                      @enderror
                  </div>
                    <div class="form-group">
                        <button type="submit" name="btn-add-category" class="btn btn-primary mr-2">Edit</button>
                        <a href="{{ route('voucher.index') }}" class="btn btn-success mr-2">List voucher </a>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>

@endsection