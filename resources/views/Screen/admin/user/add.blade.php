@extends('layout.admin.main')
@section('content')
    <form action="{{ route('process,add.user') }}" method="post" enctype="multipart/form-data">
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
                            <label>Email
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="" name="email"
                                placeholder="Nhập email">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>password
                                <span class="text-danger">*</span></label>
                            <input name="password" type="password" rows="4" class="form-control"
                                placeholder="Nhập password" value=""></input>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>vai trò</label>
                            <div class="radio-inline">
                                @if (Auth::user()->role == 1 || Auth::user()->role == 3)
                                    <label class="radio radio-rounded">
                                        <input type="radio" value="1" name="role">
                                        <span></span>manage</label>
                                @endif
                                <label class="radio radio-rounded">
                                    <input type="radio" value="0" name="role" @checked(true)>
                                    <span></span>user</label>
                            </div>
                        </div>

                    </div>
                    <div id="2" class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                        <a href="{{ route('user.list') }}#2"><button type="button" class="btn btn-success mr-2">Danh sách
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
                            <input type="file" id="customFile" name="thumbnail" accept=".png, .jng , .jpeg , .jfif"
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
