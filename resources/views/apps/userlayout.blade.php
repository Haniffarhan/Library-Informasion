<!DOCTYPE html>
<html>
<head>
   @include('partials.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
      @include('partials.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   @include('partials.usersidemenu')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('sectionheader')
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  
    @include('partials.footer')
 
</div>
<!-- ./wrapper -->
@include('partials.script')
</body>
</html>
