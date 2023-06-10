@include('Layout.admin.head')
    <!-- Sidebar -->
    @include('Layout.admin.sidebar')
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
        <!-- Main row -->
        @yield('content')
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('Layout.admin.footer')
 