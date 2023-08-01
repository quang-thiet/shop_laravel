@extends('layout.admin.main')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
@if (session()->has('error'))
<div class="alert alert-danger">{{ session()->get('error') }}</div>
@endif
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Voucher</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px; aligin: cent ;">
          <a href="{{route('voucher.create')}}" class="btn btn-primary mr-2 mb-3"><span style="margin-right: 12px">add surcharge </span><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Value</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($vouchers as $voucher)
             <tr>
              <td>{{$voucher->id}}</td>
              <td>{{$voucher->name}}</td>
              <td>{{$voucher->value}}</td>
               <td class="datatable-cell" style="width: 15%">
                 <a href="{{route('voucher.edit',$voucher->id)}}"
                     class="btn btn-icon btn-success btn-sm mr-2"><i
                         class="fas fa-edit"></i></a>
                 <a href="{{route('voucher.destroy',$voucher->id)}}"
                     class="btn btn-icon btn-danger btn-sm mr-2"><i
                         class="far fa-trash-alt"></i></a>
               </td>
             </tr>
             @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection