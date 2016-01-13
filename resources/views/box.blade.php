<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css')}}"/>

    <script src="{{ asset('assets/global/scripts/tj.js')}} "></script>
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
                <a href="index.html"><img src="{{ asset("assets/global/img/logo-default.png")}} " alt="logo" class="logo-default"></a>
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
                    <li class="">
                        <a href="http://www.coderfix.cn/">首页</a>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
                            开发项目 <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li >
                                <a href="http://www.coderfix.cn/#mmark">
                                    <i class="icon-briefcase"></i>
                                    萌Mark </a>
                            </li>
                            <li >
                                <a href="http://www.coderfix.cn/#pico">
                                    <i class="icon-briefcase"></i>
                                    PicoPico</a>
                            </li>
                            <li >
                                <a href="http://www.coderfix.cn/#gmzb">
                                    <i class="icon-briefcase"></i>
                                    购萌早报 </a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown active">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" >
                            作品 <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li  class="@if ($func === "index")
                                    active  @endif ">
                                <a href="/">
                                    <i class="icon-briefcase"></i>
                                    Http的Api调试工具 </a>
                            </li>
                            <li  class="@if ($func === "icon")
                                    active  @endif ">
                                <a href="/icon">
                                    <i class="icon-briefcase"></i>
                                    ico在线转换工具 </a>
                            </li>
                            <li  class="@if ($func === "playtimes")
                                    active  @endif ">
                                <a href="/play/times">
                                    <i class="icon-briefcase"></i>
                               短视频播放次数查询
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li >
                        <a href="https://github.com/diandianxiyu">GitHub</a>
                    </li>
                    <li >
                        <a href="http://blog.csdn.net/diandianxiyu_geek">CSDN博客</a>
                    </li>
                    <li >
                        <a href="http://blog.coderfix.cn/">WordPress</a>
                    </li>

                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>
<!-- END HEADER -->





@yield('content')




<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>关于</h2>
                <p>
                    90后PHP开发,Swift学习中,前端学习中

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
        2015 &copy; CoderFix.cn <a href="http://www.miitbeian.gov.cn/" title="京ICP备16000021号-1" target="_blank">京ICP备16000021号-1</a>
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<script src="{{ asset('assets/global/scripts/common.js')}} "></script>
</body>
<!-- END BODY -->
</html>