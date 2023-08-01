@extends('layout.admin.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h2 class="card-title">Add additional fee</h2>
            </div>
            <!--begin::Form-->
            <form method="POST" enctype="multipart/form-data" action="{{ route('surcharge.update',$surcharge->id) }}">
                
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Name Surcharge 
                            <span class="text-danger">*</span></label>
                        <input type="text" value="{{$surcharge->name}}" name="name" class="form-control" placeholder="Nhập tên danh mục">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>    
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Value
                            <span class="text-danger">*</span></label>
                        <input type="text" value="{{$surcharge->value}}" name="value" class="form-control" placeholder="Nhập giá trị ">
                        @error('value')
                            <p class="text-danger">{{$message}}</p>    
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn-add-category" class="btn btn-primary mr-2">Edit</button>
                        <a href="{{ route('surcharge.index') }}" class="btn btn-success mr-2">List Surcharge </a>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>

@endsection