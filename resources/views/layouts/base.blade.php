
<html>
<head>
    <title>App Name - @yield('title')</title>

    <!-- BEGIN STYLESHEETS -->
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-5/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-5/materialadmin.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-5/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-5/material-design-iconic-font.min.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-addon/addon.css" />
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-default/libs/select2/select2.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/theme-default/libs/dropzone/dropzone-theme.css">
    <!-- END STYLESHEETS -->
    <!-- BEGIN STYLESHEETS FOR CHILD-->
    @yield('stylesheet')
    <!-- END STYLESHEETS FOR CHILD -->


</head>
<body class="@yield('bclass')">

<div>
    @yield('content')
</div>
@section('footer_script')
<!-- BEGIN JAVASCRIPT -->
<script src="/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="/assets/js/libs/spin.js/spin.min.js"></script>
<script src="/assets/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="/assets/js/core/source/App.js"></script>
<script src="/assets/js/core/source/AppNavigation.js"></script>
<script src="/assets/js/core/source/AppOffcanvas.js"></script>
<script src="/assets/js/core/source/AppCard.js"></script>
<script src="/assets/js/core/source/AppForm.js"></script>
<script src="/assets/js/core/source/AppNavSearch.js"></script>
<script src="/assets/js/core/source/AppVendor.js"></script>
<script src="/assets/js/libs/select2/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('select').select2({placeholder: 'Selezionare...'});
    });
</script>
<!-- END JAVASCRIPT -->
<!-- BEGIN JAVASCRIPT FOR CHILD-->
@show
<!-- END JAVASCRIPT -->

</body>
</html>