@extends('layout.admin.main')
@section('content')
    <form action="{{ route('process.add.product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card card-custom">
                    <div class="card header">
                        <h3 class="card-title"> Thêm sản phẩm </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tên sản phẩm
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" value="{{old('name')}}" name="name"
                                placeholder="Nhập tên sản phẩm">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>mô tả ngắn
                                <span class="text-danger">*</span></label>
                                <textarea name="description" rows="4" class="form-control" placeholder="Nhập mô tả ngắn">{{old('description') }}</textarea>
                                
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>chi tiết sản phẩm
                                <span class="text-danger">*</span></label>
                                <textarea name="detail" rows="4" class="form-control" placeholder="chi tiết sản phẩm">{{ old('detail') }}</textarea>
                                
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>số lượng
                                <span class="text-danger">*</span></label>
                            <input name="quantity" type="number" rows="4" value="{{ old('quantity') }}" class="form-control"
                                placeholder="Nhập số lượng số lượng sản phẩm" value="">
                            @error('quantity')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>giá
                                <span class="text-danger">*</span></label>
                            <input name="price" type="number" rows="4" value="{{old('price')}}"  class="form-control"
                                placeholder="Nhập giá sản phẩm " value=""></input>
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>giá giảm
                                <span class="text-danger">*</span></label>
                            <input name="discount" type="number" rows="4" value="{{old('discount')}}" class="form-control"
                                placeholder="Nhập giá giảm" ></input>
                            @error('discount')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                       <div class="form-group">
                        <div class="checkbox-list">
                            {{ checkboxCategories($categories) }}
                        </div>
                       </div>
                        <div class="form-group">
                            <label>Hiển thị</label>
                            <div class="radio-inline">
                                <label class="radio radio-rounded">
                                <input type="radio" value="1" checked="checked" name="published">
                                <span></span>Hiển thị</label>
                                <label class="radio radio-rounded">
                                <input type="radio" value="0" name="published">
                                <span></span>Không hiển thị</label>
                            </div>
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
