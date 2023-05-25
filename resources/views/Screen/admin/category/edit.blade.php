@extends('layout.admin.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Thêm danh mục bài viết</h3>
            </div>
            <!--begin::Form-->
            <form method="POST" enctype="multipart/form-data" action="{{ route('update.category', $cat->id) }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên danh mục
                            <span class="text-danger">*</span></label>
                        <input type="text" value="{{ $cat->name }}" name="name" class="form-control" placeholder="Nhập tên danh mục">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>    
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Danh mục cha
                        <span class="text-danger">*</span></label>
                        <select class="form-control" name="parent_id" data-value="{{ $cat->parent_id }}">
                            <option value="0">Danh mục cha</option>
                            {!! selectCategories($categories) !!}
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hiển thị</label>
                        <div class="radio-inline">
                            <label class="radio radio-rounded">
                            <input type="radio" value="1" name="published" @checked($cat->published == 1)>
                            <span></span>Hiển thị</label>
                            <label class="radio radio-rounded">
                            <input type="radio" value="0" name="published" @checked($cat->published == 0)>
                            <span></span>Không hiển thị</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn-add-category" class="btn btn-primary mr-2">Cập nhật</button>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
@endsection