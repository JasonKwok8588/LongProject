<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        @include('admin.public.link')
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
          @include('admin.public.head')
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
          @include('admin.public.sideBar')
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          @yield('content')
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
          @include('admin.public.footer')
      </footer>
      <!-- Control Sidebar -->      
      <aside class="control-sidebar control-sidebar-dark">                
       @include('admin.public.contorlSideBar')
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->
        @include('admin.public.script')
  </body>
</html>
