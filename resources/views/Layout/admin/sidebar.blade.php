<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Quản lý 
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('category.list')}}" class="nav-link">
                
                <p>Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('user.list')}}" class="nav-link">
                
                <p>User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('product.list')}}" class="nav-link">
                
                <p>Product</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('order.index')}}" class="nav-link">
                
                <p>Oder</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('surcharge.index')}}" class="nav-link">
                
                <p>Surcharge</p>
              </a>
            </li>
          </ul>
        </li>
        <a class="btn btn-primary mr-2" href="{{route('logout')}}">LOGOUT</a>
      