@extends('layout.admin.main')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Surcharge</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search" style="margin-left : 2 px ;"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px; aligin: cent ;">
        <a href="{{route('order.create')}}" class="btn btn-primary mr-2 mb-3"><span style="margin-right: 12px">add order</span><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
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
            <tr>
              <td>183</td>
              <td>John Doe</td>
              <td>11-7-2014</td>
              <td class="datatable-cell" style="width: 15%">
                <a href=""
                    class="btn btn-icon btn-success btn-sm mr-2"><i
                        class="fas fa-edit"></i></a>
                <a href=""
                    class="btn btn-icon btn-danger btn-sm mr-2"><i
                        class="far fa-trash-alt"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection