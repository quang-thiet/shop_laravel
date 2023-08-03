@extends('layout.admin.main')
@section('content')

<div class="row">
    <div class="col-12">
      <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Note:</h5>
        {{$order->note}}
      </div>


      <!-- Main content -->
      <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
          <div class="col-12">
            <h4>
              <i class="fas fa-globe"></i> Ecommerce-funiture
              <small class="float-right"> DATE : {{$order->created_at ->format("d-m-Y")}}</small>
            </h4>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            From
            <address>
              <strong> {{config("common.information.Name")}} </strong><br>
              {{config("common.information.Address")}}<br>
              
              Phone: {{config("common.information.Number_phone")}}<br>
              Email: {{config("common.information.Email")}}
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            To
            <address>
              <strong>{{$order->full_name}}</strong><br>
              {{$order->address}}<br>
              Phone: {{$order->number_phone }}<br>
              Email: {{$order->email}}
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <br>
            <b>Order ID:</b> {{$order->id}}<br>
            <b>Payment:</b>{{config("common.payment.1")}}<br>
            <b>Account:</b> {{$order->user_name}}
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>Qty</th>
                <th>Product</th>
                <th>price</th>
                <th>Subtotal</th>
              </tr>
              </thead>
              <tbody>
             @foreach ($order->items as $item)
             <tr>
              <td>{{$item->quantity}}</td>
              <td>{{$item->product_name}}</td>
              <td>{{$item->price}}</td>
              <td>{{$item->total}}</td>
            </tr>
             @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="/template/admin/dist/img/credit/visa.png" alt="Visa">
            <img src="/template/admin/dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="/template/admin/dist/img/credit/american-express.png" alt="American Express">
            <img src="/template/admin/dist/img/credit/paypal2.png" alt="Paypal">

            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
              plugg
              dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <p class="lead">Amount Due 2/22/2014</p>
            @php
              $total = total_cart($order->items ,$surcharge);
            @endphp
            <div class="table-responsive">
              <table class="table">
                <tbody><tr>
                  <th style="width:50%">Subtotal:</th>
                  <td>${{$order->sub_total}}</td>
                </tr>
                @foreach ($surcharge as $item)
                <tr>
                  <th>{{$item->name}}</th>
                  <td>${{$item->value}}</td>
                </tr>
                @endforeach
                <tr>
                  <th>Total:</th>
                  <td>${{$order->grand_total}}</td>
                </tr>
              </tbody></table>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-12">
            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
              Payment
            </button>
            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
              <i class="fas fa-download"></i> Generate PDF
            </button>
          </div>
        </div>
      </div>
      <!-- /.invoice -->
    </div><!-- /.col -->
  </div>
  @endsection