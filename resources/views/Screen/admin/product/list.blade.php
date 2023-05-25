@extends('layout.admin.main')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
     
      <!-- /.row -->
<div class="row">
<a href="{{route('product.add')}}" class="btn btn-success"> thêm </a>
    <table class="table">
        <header>
            <tr>
                <td class="datatable-cell" style="flex-grow:1"><span>Name</span></td>
                <td  class="datatable-cell" style="width: 15%"><span>Avatar</span></td>
                <td class="datatable-cell" style="flex-grow:1"><span>Description</span></td>
                <td class="datatable-cell" style="width: 20%"><span>price</span></td>
                <td class="datatable-cell" style="width: 20%"><span>discount</span></td>
                <td class="datatable-cell" style="width: 20%"><span>Action</span></td>
            </tr>
        </header>
        @foreach ($products as $item)
            
       
        <body>
            <tr>
                <td>{{$item->name}}</td>
                <td><img src="{{asset('/image/products/'.$item->image)}}" alt="" style="width:50%;object-fit:cover;display:block;margin:0 auto;aspect-ratio:1/1"></td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->discount}}</td>
                <td class="datatable-cell text-right" style="width: 15%">
                  <a href="{{route('product.edit',['id'=>$item->id])}}"
                      class="btn btn-icon btn-success btn-sm mr-2"><i
                          class="fas fa-edit"></i></a>
                  <a href="{{route('product.delete',['id'=>$item->id])}}"
                      class="btn btn-icon btn-danger btn-sm mr-2"><i
                          class="far fa-trash-alt"></i></a>
              </td>
            </tr>
        </body>
        @endforeach
    </table>
@endsection