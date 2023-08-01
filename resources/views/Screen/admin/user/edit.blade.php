@extends('layout.admin.main')
@section('content')
    <form action="{{ route('user.update',['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card card-custom" style="height : 100%">
                    <div class="card header">
                        <h3 class="card-title">thông tin tài khoản </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Display Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" value="{{$user->display_name}}" name="display_name"
                                placeholder="Nhật tên user">
                            @error('display_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">First Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" value="{{$user->first_name}}" name="frist_name"
                                placeholder="Nhật tên user">
                            @error('frist_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Last Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" value="{{$user->last_name}}" name="name"
                                placeholder="Nhật tên user">
                            @error('last_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{$user->email}}" name="email"
                                placeholder="Nhập email">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Address
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" value="{{$user->address}}" name="address"
                                placeholder="Nhật tên user">
                            @error('address')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>gender</label>
                            <div class="radio-inline">
                                <label class="radio radio-rounded">
                                    <input type="radio" value="1" name="role">
                                    <span></span>boy</label>
                                
                                <label class="radio radio-rounded">
                                    <input type="radio" value="2" name="role" @checked($user->role == 0 )
                                    <span></span>girl</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>vai trò</label>
                            <div class="radio-inline">
                                @if (Auth::user()->role == 1 || Auth::user()->role == 3)
                                    <label class="radio radio-rounded">
                                        <input type="radio" value="1" name="role">
                                        <span>*</span>manage</label>
                                @endif
                                <label class="radio radio-rounded">
                                    <input type="hidden" value="0" name="role" @checked(true)>
                                    <span class="text-danger">*</span>user</label>
                            </div>
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
                            <input type="file"  id="customFile" name="thumbnail" 
                                class="custom-file-input" />
                            <label class="custom-file-label" for="customFile" style="overflow:hidden">Choose file</label>
                        </div>
                        <div class="form-group preview-image old" style="margin-top:10px ; display:none">
                        </div>
                        <div class="form-group preview-image new" style="margin-top:10px">
                            <img src='{{asset('image/users/'.$user->avatar )}}'style='display:block;margin:10px auto;width: auto;height: 150px;object-fit:cover;border:1px solid #3699ff;border-radius:5px;'>

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
