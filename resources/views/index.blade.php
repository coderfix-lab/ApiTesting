<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <title>ApiTesting | CoderFix.cn</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css')}} " type="text/css"  rel="stylesheet" >
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/morris/morris.css')}} " type="text/css"  rel="stylesheet" >
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="{{ asset('assets/admin/pages/css/tasks.css')}} "  rel="stylesheet"  type="text/css"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="{{ asset('assets/global/css/components-md.css')}} "  rel="stylesheet"  id="style_components"  type="text/css">
    <link href="{{ asset('assets/global/css/plugins-md.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/admin/layout3/css/layout.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/admin/layout3/css/themes/default.css')}} " type="text/css" id="style_color"  rel="stylesheet" >
    <link href="{{ asset('assets/admin/layout3/css/custom.css')}} " type="text/css"  rel="stylesheet" >
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ asset('assets/global/css/csshake.min.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/css/animate.min.css')}} " type="text/css"  rel="stylesheet" >
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body class="page-md">
<a href="https://github.com/diandianxiyu/ApiTesting"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>

<!-- BEGIN HEADER -->
<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo shake">
                <a href="index.html"><img src="{{ asset("assets/admin/layout3/img/logo-default.png")}} " alt="logo" class="logo-default"></a>
            </div>
            <!-- END LOGO -->

        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
            <div class="hor-menu ">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html">主页</a>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
                            独立作品 <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-briefcase"></i>
                                    Data Tables </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="table_basic.html">
                                            Basic Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_tree.html">
                                            Tree Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_responsive.html">
                                            Responsive Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_managed.html">
                                            Managed Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_editable.html">
                                            Editable Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_advanced.html">
                                            Advanced Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_ajax.html">
                                            Ajax Datatables </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-wallet"></i>
                                    联系</a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="portlet_general.html">
                                            General Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general2.html">
                                            New Portlets #1 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general3.html">
                                            New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_ajax.html">
                                            Ajax Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_draggable.html">
                                            Draggable Portlets </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-bar-chart"></i>
                                    Charts </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="charts_amcharts.html">
                                            amChart </a>
                                    </li>
                                    <li class=" ">
                                        <a href="charts_flotcharts.html">
                                            Flotchart </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
                            独立作品 <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-briefcase"></i>
                                    Data Tables </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="table_basic.html">
                                            Basic Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_tree.html">
                                            Tree Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_responsive.html">
                                            Responsive Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_managed.html">
                                            Managed Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_editable.html">
                                            Editable Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_advanced.html">
                                            Advanced Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_ajax.html">
                                            Ajax Datatables </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-wallet"></i>
                                    联系</a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="portlet_general.html">
                                            General Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general2.html">
                                            New Portlets #1 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general3.html">
                                            New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_ajax.html">
                                            Ajax Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_draggable.html">
                                            Draggable Portlets </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-bar-chart"></i>
                                    Charts </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="charts_amcharts.html">
                                            amChart </a>
                                    </li>
                                    <li class=" ">
                                        <a href="charts_flotcharts.html">
                                            Flotchart </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
                            独立作品 <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-briefcase"></i>
                                    Data Tables </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="table_basic.html">
                                            Basic Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_tree.html">
                                            Tree Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_responsive.html">
                                            Responsive Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_managed.html">
                                            Managed Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_editable.html">
                                            Editable Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_advanced.html">
                                            Advanced Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_ajax.html">
                                            Ajax Datatables </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-wallet"></i>
                                    联系</a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="portlet_general.html">
                                            General Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general2.html">
                                            New Portlets #1 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general3.html">
                                            New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_ajax.html">
                                            Ajax Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_draggable.html">
                                            Draggable Portlets </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-bar-chart"></i>
                                    Charts </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="charts_amcharts.html">
                                            amChart </a>
                                    </li>
                                    <li class=" ">
                                        <a href="charts_flotcharts.html">
                                            Flotchart </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Api调试工具 <small>设置参数直接查看对应的返回值~</small></h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMB -->
            {{--<ul class="page-breadcrumb breadcrumb">--}}
                {{--<li>--}}
                    {{--<a href="#">Home</a><i class="fa fa-circle"></i>--}}
                {{--</li>--}}
                {{--<li class="active">--}}
                    {{--Dashboard--}}
                {{--</li>--}}
            {{--</ul>--}}
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->

            我是网页内容











            <!-- END PAGE CONTENT INNER -->
        </div>

    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>关于</h2>
                <p>
                    PHP开发工程师,独立开发者
                </p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>关注我</h2>
                <ul class="social-icons">

                    <li>
                        <a href="https://github.com/diandianxiyu" data-original-title="github" class="github" target="_blank"></a>
                    </li>
                    <li>
                        <a href="http://blog.coderfix.cn/" data-original-title="wordpress" class="wordpress" target="_blank"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>联系</h2>
                <address class="margin-bottom-40">
                    >
                    Email: <a href="mailto: 316708138@qq.com">316708138@qq.com</a>
                </address>
            </div>
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="container">
        2015 &copy; CoderFix.cn
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('assets/global/plugins/jquery.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-migrate.min.js')}} " type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.cokie.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js')}} " type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}} " type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="{{ asset('assets/global/plugins/morris/morris.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/morris/raphael-min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js')}} " type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/global/scripts/metronic.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout3/scripts/layout.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout2/scripts/quick-sidebar.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout3/scripts/demo.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/index3.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/tasks.js')}} " type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo(theme settings page)
        QuickSidebar.init(); // init quick sidebar
        Index.init(); // init index page
        Tasks.initDashboardWidget(); // init tash dashboard widget
    });
    $('.page-logo').addClass('animated bounce');

</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>