@extends('layout.admin.main')
@section('content')
    <form action="{{ route('product.update',['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card card-custom">
                    <div class="card header">
                        <h3 class="card-title">thông tin chi tiết sản phẩm </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tên sản phẩm 
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" value="{{$product->name}}" name="name"
                                placeholder="Nhật tên user">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>description
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{$product->description}}" name="description"
                                placeholder="Nhập email">
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>price
                                <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" value="{{$product->price}}" name="price"
                                placeholder="price">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>	discount
                                <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" value="{{$product->discount}}" name="discount"
                                placeholder="discount">
                            @error('discount')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>	quantity
                                <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" value="{{$product->quantity}}" name="quantity"
                                placeholder="quantity">
                            @error('quantity')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div id="2" class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                        <a href="{{ route('user.list') }}"><button type="button" class="btn btn-success mr-2">Danh sách
                                user</button></a>
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
                            <h3 class="card-label">ẢNh đại diện</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="custom-file">
                            <input type="file"  id="customFile" name="thumbnail" accept=".png, .jng , .jpeg , .jfif"
                                class="custom-file-input" />
                            <label class="custom-file-label" for="customFile" style="overflow:hidden">Choose file</label>
                        </div>
                        <div class="form-group preview-image old" style="margin-top:10px ; display:none">
                        </div>
                        <div class="form-group preview-image new" style="margin-top:10px">
                            <img src='{{asset('image/products/'.$product->image )}}'style='display:block;margin:10px auto;width: auto;height: 150px;object-fit:cover;border:1px solid #3699ff;border-radius:5px;'>

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

