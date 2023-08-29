@extends('Layout\client\master')

@section('title', 'Home Page')

@section('content')
    <!-- my account wrapper start -->
    
    <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-left">
                        <h2>My Account</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <!--My Account section start-->
    <div
        class="my-account-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                                <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>

                                <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                    Method</a>

                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>

                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>

                                <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>

                                        <div class="welcome mb-20">
                                            <p>Hello, <strong>{{ $user->display_name }}</strong> (If Not
                                                <strong>{{ $user->last_name }} !</strong><a href="{{ route('logout') }}"
                                                    class="logout"> Logout</a>)
                                            </p>
                                        </div>

                                        <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($user->orders as $item)
                                                        <tr>
                                                            <td>{{$item->id}}</td>
                                                            <td>{{ $item->full_name }}</td>
                                                            <td>{{ $item->created_at->format('d-m-Y \l\ú\c H:i') }}</td>
                                                            <td>{{ config("common.order_status.{$item->status}") }}</td>
                                                            <td>${{ $item->grand_total }}</td>
                                                            <td><a href="{{route('order.show',['id'=>$item->id])}}" class="btn">View</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Downloads</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Yes</td>
                                                        <td><a href="#" class="btn">Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Katopeno Altuni</td>
                                                        <td>Sep 12, 2018</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="btn">Download File</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>

                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <form action="{{ route('edit.profile') }}" method="post">
                                        @csrf
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>
                                            <p><strong>{{ $user->last_name }}</strong></p>

                                            <address>
                                                <style>
                                                    input {
                                                        border: none;
                                                        outline: none;
                                                    }
                                                </style>
                                                <input type="text" value="{{ $user->address }}" name="address">
                                                @error('address')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <br>
                                                <p>Mobile:</p>
                                                <input type="text" value="{{ $user->number_phone }}"
                                                    name="number_phone">
                                                @error('number_phone')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <br>



                                            </address>

                                            <button href="#" value="submit"
                                                class="btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit
                                                Address</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <li class="text-danger">
                                            Muốn thay đổi mật khẩu vui lòng nhập đúng mật khẩu hiện tại và thông tin liên quan " new password and comfim password" !!
                                         </li>
                                         <li class="text-danger">
                                            vui lòng không để trống các mục được đánh dấu "*"

                                         </li>
                                        <div class="account-details-form">
                                            <form action="{{route('update.information.profile')}}" method="POST">
                                                @csrf
                                                <div class="row">
                        
                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <span class="text-danger">*</span>
                                                        <input id="first-name" placeholder="First Name" type="text"
                                                            value="{{ $user->first_name }}" name="first_name" >
                                                    </div>
                                                    @error('first_name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                   

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <span class="text-danger">*</span>
                                                        <input id="last-name" placeholder="Last Name" type="text"
                                                            value="{{ $user->last_name }}" name="last_name">
                                                    </div>
                                                    @error('first_name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                    <div class="col-12 mb-30">
                                                        <span class="text-danger">*</span>
                                                        <input id="display-name" placeholder="Display Name"
                                                            type="text" value="{{ $user->display_name }} "
                                                            name="display_name">
                                                    </div>
                                                    @error('first_name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                    
                                                    <div class="col-12 mb-30">
                                                        <span class="text-danger">*</span>
                                                        <input id="email" placeholder="Email Address" type="email"
                                                            value="{{ $user->email }} " name="email">
                                                    </div>
                                                    @error('email')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                        

                                                    <div class="col-12 mb-30">
                                                        <h4>Password change</h4>
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="current-pwd" placeholder="Current Password"
                                                            type="password" name="current_password">
                                                    </div>
                                                    @error('current_password')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="new-pwd" placeholder="New Password" type="password"
                                                            name="new_password">
                                                    </div>
                                                    @error('new_password')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="confirm-pwd" placeholder="Confirm Password"
                                                            type="password" name="confirm-pwd">
                                                    </div>
                                                    @error('confirm-pwd')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror

                                                    <div class="col-12">
                                                        <button 
                                                       value="submit" class="save-change-btn">Save Changes</button>
                                                    </div>
                                                    
                                                  
                                                    
 
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script></script>
    <!--My Account section end-->
@endsection
