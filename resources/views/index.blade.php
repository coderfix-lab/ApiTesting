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
    <meta content="{{ $desc }}" name="description">
    <meta content="{{$author}}" name="author">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('assets/global/css/css.css')}} " type="text/css"  rel="stylesheet" >
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
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="fa fa-space-shuttle font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> 在线HTTP POST/GET接口测试工具</span>
                            </div>
                            <div class="actions">

                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form" >
                                <div class="form-body">
                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-group">

                                            <div class="input-group-control">
                                                <select class="form-control" id="method">
                                                    <option value="GET">GET</option>
                                                    <option value="POST">POST</option>
                                                    <option value="PUT">PUT</option>
                                                    <option value="PATCH">PATCH</option>
                                                    <option value="DELETE">DELETE</option>
                                                    <option value="COPY">COPY</option>
                                                    <option value="HEAD">HEAD</option>
                                                    <option value="OPTIONS">OPTIONS</option>
                                                    <option value="LINK">LINK</option>
                                                    <option value="UNLINK">UNLINK</option>
                                                    <option value="PURGE">PURGE</option>
                                                </select>
                                                <label for="form_control_1">请求方式</label>
                                            </div>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control " placeholder="http://" id="url">
                                                <label for="form_control_1">请求地址</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
											<button class="btn blue-madison" type="button" id="com">发送请求</button>
											</span>
                                        </div>
                                    </div>

                                    {{--添加header参数--}}

                                    <div class="form-group form-md-line-input has-info" id="params_table">
                                        <div style="position:absolute;top: 0;width: 100%">
                                            <label for="form_header"  class="col-md-3">Header名称</label>
                                            <label for="form_header_value" class="col-md-6" >Header值</label>
                                        </div>
                                        <div id="params_end" style="margin-top:30px;">
         <span class="input-group-btn btn-left">
             <button class="btn blue-madison addHeader" type="button" id="add_url_parameter" >添加参数</button>
         </span>
                                        </div>

                                    </div>


                                    <div class="form-group form-md-line-input has-info" id="params_body">
                                        <div style="position:absolute;top: 0;width: 100%">
                                            <label for="form_header"  class="col-md-3">Body名称</label>
                                            <label for="form_header_value" class="col-md-6" >Body值</label>
                                        </div>
                                        <div id="params_end" style="margin-top:30px;">
         <span class="input-group-btn btn-left">
             <button class="btn blue-madison addBody" type="button" id="add_body_parameter" >添加参数</button>
         </span>
                                        </div>

                                    </div>





                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>

            </div>



            {{--返回的结果--}}
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-green-haze">
                                <i class="fa fa-paper-plane-o font-green-haze"></i>
                                <span class="caption-subject bold uppercase"> HTTP请求返回结果</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form" class="form-horizontal">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input has-success">
                                        <label class="col-md-2 control-label" for="form_control_1">HTTP Body</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control return" rows="3" placeholder="" id="return_body"></textarea>
                                            <div class="form-control-focus">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success">
                                        <label class="col-md-2 control-label" for="form_control_1">HTTP Headers</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control return" rows="3" placeholder="" id="return_header" ></textarea>
                                            <div class="form-control-focus">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-10">
                                            <button type="button" class="btn default" id="clear_result">清空结果</button>
                                            <button type="button" class="btn blue" id="decode_result">解析body</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->


                </div>
            </div>











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
{{--//引入自动增加文本域高度的js--}}
<script src="{{ asset('assets/global/scripts/textareaAutoHeight.js') }}"></script>
<script>

    //自己写,添加一个对象
    function addHearder(){
        //添加对应的元素
        $(".addHearder").prop("outerHTML");

    }
    //绑定
    $('.addHeader').click(
            function(){
                addHearder()
    }
    );

    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo(theme settings page)
        QuickSidebar.init(); // init quick sidebar
        Index.init(); // init index page
        Tasks.initDashboardWidget(); // init tash dashboard widget


    });
    $('.page-logo').addClass('animated bounce');


    function adddle(){
        var testbox ="<div class='input-group textbox' style='margin-top: 20px'>"
                +"<div class='input-group-control col-md-3' >"
                +"<input type='text'  class='form-control ' placeholder='请输入Header名称'></div>"
                        +"<div class='form-control-focus'></div> "
                +"<div class='input-group-control col-md-9'>"
                +"<input type='text' class='form-control ' placeholder='请输入Header值'></div>"
                +"<span class='input-group-btn '>"
                +"<button type='button' class='btn btn-danger' onclick='del($(this));'>删除</button></span></div>";
        $("#params_table").prepend(testbox);
    }
    function del(obj){
        obj.parent().parent().remove();
    }


    $('#add_url_parameter').click(function(){
        adddle();
    });


    function addBody(){
        var testbox ="<div class='input-group textbox-body' style='margin-top: 20px'>"
                +"<div class='input-group-control col-md-3' >"
                +"<input type='text'  class='form-control ' placeholder='请输入Body名称'></div>"
                +"<div class='form-control-focus'></div> "
                +"<div class='input-group-control col-md-9'>"
                +"<input type='text' class='form-control ' placeholder='请输入Body值'></div>"
                +"<span class='input-group-btn '>"
                +"<button type='button' class='btn btn-danger' onclick='del($(this));'>删除</button></span></div>";
        $("#params_body").prepend(testbox);
    }
    function del(obj){
        obj.parent().parent().remove();
    }


    $('#add_body_parameter').click(function(){
        addBody();
    });

    //ajax提交数据
    $('#com').click( function(){
        var method = $('#method').val();
        var url = $('#url').val();
        var names= JSON.stringify( $('input[name=names]'));
//        alert(names);
    $.ajax({
        type: 'POST',
        url: 'ajax/create',
        //传递参数
        data: {  method : method , url : url  },
        dataType: 'json',
        headers: {
           // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function(data){
            str_header=JSON.stringify(data[1], null, 4);
            $("#return_body").val(data[0]);
            $("#return_header").val(str_header);
        },

        error: function(xhr, type){
            alert('请重试')

        }

    });}
    );

    //清空结果
    $('#clear_result').click(function(){
        $("#return_body").val("");
        $("#return_header").val("");
    });

    //去掉引号,再次进行解析
    $('#decode_result').click(function(){
        var body=JSON.parse( $("#return_body").val());
       var destr_body=JSON.stringify(body, null, 4);
        $("#return_body").val(destr_body);

    });

    //返回值自动撑起高度
    $('textarea').tah({
        moreSpace:15,   //输入框底部预留的空白, 默认15, 单位像素
        maxHeight:1000,  //指定Textarea的最大高度, 默认600, 单位像素
        animateDur:200  //调整高度时的动画过渡时间, 默认200, 单位毫秒
    });




</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>