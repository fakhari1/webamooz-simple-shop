<!-- Begin page -->
<div id="layout-wrapper">
@include('admin.partials.__page-topbar')

<!-- ========== Left Sidebar Start ========== -->
@include('admin.partials.__vertical-menu')
<!-- Left Sidebar End -->

    @yield('content')

</div>
<!-- END layout-wrapper -->
