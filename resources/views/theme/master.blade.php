<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme.partials.header')
    @include('theme.partials.css')

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <!-- Wrapper -->
    <div class="wrapper">
        @include('theme.partials.navbar')
        @include('theme.partials.sidebar')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <b>Hello</b>
        <!-- /.control-sidebar -->
        @include('theme.partials.footer')
    </div>
    <!-- ./wrapper -->

    @include('theme.partials.js')
</body>

</html>