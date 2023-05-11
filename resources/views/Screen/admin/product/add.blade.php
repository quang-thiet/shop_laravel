@extends('layout.admin.main')
@section('content')
    <form action="{{ route('process.add.product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card card-custom">
                    <div class="card header">
                        <h3 class="card-title">thông tin tài khoản </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" value="" name="name"
                                placeholder="Nhật tên user">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>miêu tả
                                <span class="text-danger">*</span></label>
                            <input type="textarea" class="form-control" value="" name="description"
                                placeholder="Nhập email">
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>số lượng
                                <span class="text-danger">*</span></label>
                            <input name="quantity" type="number" rows="4" class="form-control"
                                placeholder="Nhập số lượng số lượng sản phẩm" value=""></input>
                            @error('quantity')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>giá
                                <span class="text-danger">*</span></label>
                            <input name="price" type="number" rows="4" class="form-control"
                                placeholder="Nhập giá sản phẩm " value=""></input>
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>giá giảm
                                <span class="text-danger">*</span></label>
                            <input name="discount" type="number" rows="4" class="form-control"
                                placeholder="Nhập giá giảm" value=""></input>
                            @error('discount')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                       

                    </div>
                    <div id="2" class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">thêm sản phẩm</button>
                        <a href="{{ route('product.list') }}"><button type="button" class="btn btn-success mr-2">Danh sách
                                sản phẩm </button></a>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="far fa-image text-primary"></i>
                            </span>
                            <h3 class="card-label">image</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="custom-file">
                            <input type="file" id="customFile" name="thumbnail" accept=".png, .jng , .jpeg , .jfif , .jpg"
                                class="custom-file-input" />
                            <label class="custom-file-label" for="customFile" style="overflow:hidden">Choose file</label>
                        </div>
                        <div class="form-group preview-image old" style="margin-top:10px">
                        </div>
                        <div class="form-group preview-image new" style="margin-top:10px">
                            
                        </div>
                        @error('thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('custom-js-tag')
    <script>
        $(document).ready(function() {
            $(".custom-file-input").on("change", function() {
                $this = $(this)
                $this.closest(".card-body").find(".preview-image.new").empty()
                $this.closest(".card-body").find(".preview-image.old").show()
                for (let i = 0; i < this.files.length; ++i) {
                    let filereader = new FileReader()
                    let $img = jQuery.parseHTML(
                        "<img src='' style='display:block;margin:10px auto 0;width: auto;height: 150px;object-fit:cover;border:1px solid #3699ff;border-radius:5px;'>"
                    );
                    filereader.onload = function() {
                        $img[0].src = this.result
                    }
                    filereader.readAsDataURL(this.files[i])
                    $this.closest(".card-body").find(".preview-image.new").append($img)
                    $this.closest(".card-body").find(".preview-image.old").hide()
                }
            })
        })
    </script>
@endsection
